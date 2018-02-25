<?php

class Auth extends Model {
	public $errors;
	public $langs;
	public function changePass($userid)
	{
		$safeid = $this->escapeString($userid);
		$result = $this->query('SELECT * FROM users WHERE usersid='.$safeid.'');
		
		$salt = $result[0]->salt;
		$password = $this->generatePassword(2).'-'.$this->generatePassword(2).'-'.$this->generatePassword(2);
        $param=$this->generateParam($salt);
		$cryptPass = crypt(urlencode($password),$param);
		$update = $this->execute('UPDATE `users` SET 
			password=\''.$cryptPass.'\' 
			, salt=\''.$param.'\' 
			WHERE usersid='.$result[0]->usersid.'');
		return $password;
	}
	public function checkPass($email,$pass)
	{
		$this->errors=false;
		$safeEmail = $this->escapeString($email);
		$result = $this->query('SELECT * FROM users WHERE email="'.$safeEmail.'" AND password!=\'\' AND email_verified=1');
		if ($result) {

			$cryptPass = crypt(urlencode($pass),$result[0]->salt);
			if ($cryptPass==$result[0]->password)	 {
				return true;
			} else {
				return false;
			}
		
		} else {
			return false;
		}
		return $result;
	}
	public function login($email,$pass,$keep=false,$forgot=false)
	{
		$this->errors=false;
		$safeEmail = $this->escapeString($email);
		$result = $this->query('SELECT * FROM users WHERE email="'.$safeEmail.'" AND password!=\'\' AND email_verified=1');
		if ($result) {

			$cryptPass = crypt(urlencode($pass),$result[0]->salt);
			if ($cryptPass==$result[0]->password)	 {
				// Success
				$this->setSession($keep,$result);
			} else {
				// Fail
				$this->errors['pass'] = $this->langs['login_pass_incorrect'];
				$result = false;
			}
		
		} else {
			$notverified = $this->query('SELECT * FROM users WHERE email="'.$safeEmail.'" AND email_verified=0');
			if ($notverified) {
				$this->errors['email'] = $this->langs['login_not_verified'];
			} else {
				$nopassword = $this->query('SELECT * FROM users WHERE email="'.$safeEmail.'" AND password=\'\'');
				if ($nopassword) {
					$this->errors['email'] = $this->langs['login_no_password'];
				} else {
					$this->errors['email'] = $this->langs['login_user_not_found'];
				}
			}
		}
		return $result;
	}
	public function loginId($id)
	{

		$this->errors=false;
		$id = $this->escapeString($id);

		$result = $this->query('SELECT * FROM users WHERE usersid='.$id.' AND password!=\'\' AND email_verified=1');
		if ($result) {
			$this->setSession($keep,$result);
						
		} else {
			return false;
		}
		return $result;
	}
	public function choosepass($code,$password)
	{

		$safeCode = $this->escapeString($code);
		$result = $this->query('SELECT * FROM users WHERE guid="'.$safeCode.'"');
		if ($result) {

	        $salt=substr(base64_encode(openssl_random_pseudo_bytes(17)),0,22);
	        $salt=str_replace("+",".",$salt);

	        $param=$this->generateParam($salt);
			$cryptPass = crypt(urlencode($password),$param);

			$update = $this->execute('UPDATE `users` SET 
				password=\''.$cryptPass.'\' 
				, salt=\''.$param.'\' 
				WHERE usersid='.$result[0]->usersid.'');		
		}
		return $result;
	}
	public function setSession($keep,$result,$redirect="")
	{
		$token=substr(base64_encode(openssl_random_pseudo_bytes(17)),0,22);
		$handshake = $this->getHandshake();
		$persistent=($keep?1:0);
		$session = $this->insert('INSERT INTO sessions (
			users_id
			,token
			,handshake_test
			,last_seen
			,persistent
		) VALUES(
			"'.$result[0]->usersid.'"
			,"'.$token.'"
			,"'.$this->escapeString($handshake).'"
			,"'.$this->to_datetime(time()).'"
			,"'.$persistent.'"
		)');
		
		if ($keep) {
			unset($_SESSION['token']);
			setcookie("token",$token,time()+60*60*24*30*6,"/"); // Expires in 6 months' time
		} else {
			unset($_COOKIE['token']);
			setcookie('token', null, -1, '/');
			$_SESSION['token']=$token;
		}
		$page = explode("?",$_SERVER['REQUEST_URI']);
		header('Location: '.$page[0].$redirect);
		exit();
	}
	public function checkSession()
	{
		
		if (isset($_COOKIE['token'])) {
			$token = $_COOKIE['token'];
			$persistent=true;
		} else {
			$token = $_SESSION['token'];
			$persistent=false;
		}
		
		$safeToken = $this->escapeString($token);
		$handshake = $this->getHandshake();
		if ($persistent) {
			$result = $this->query('SELECT * FROM sessions WHERE 
				`token`="'.$safeToken.'" 
				AND `persistent`=1 
				AND `handshake_test`="'.$this->escapeString($handshake).'"');
		} else {
			$result = $this->query('SELECT * FROM sessions WHERE 
				`token`="'.$safeToken.'" 
				AND `last_seen` > SUBDATE(now(), INTERVAL 24 HOUR) 
				AND `persistent`=0 
				AND `handshake_test`="'.$this->escapeString($handshake).'"');
		}
		if ($result) {
			$update = $this->execute('UPDATE sessions SET last_seen="'.$this->to_datetime(time()).'" WHERE sessionsid='.$result[0]->sessionsid.'');
			$user = $this->query('SELECT * FROM users WHERE usersid='.$result[0]->users_id);
			$userR = $user[0];
			$userR->createdtimestamp = strtotime($userR->joined);
			return $userR;
		} else {
			return false;
		}
	}
	public function logout($token)
	{
		$safeToken = $this->escapeString($token);
		$result = $this->execute('DELETE FROM sessions WHERE token="'.$safeToken.'"');

		$this->deleteOldSessions();
		
		unset($_SESSION['token']);
		unset($_COOKIE['token']);
		setcookie('token', null, -1, '/');
		$page = explode("?",$_SERVER['REQUEST_URI']);
		header('Location: '.$page[0]);
		exit();
	}
	public function verified($code)
	{
		$safeCode = $this->escapeString($code);

		$result = $this->query('SELECT * FROM users WHERE guid="'.$safeCode.'"');
		if ($result) {								
			$update = $this->execute('UPDATE users SET email_verified=1 WHERE usersid='.$result[0]->usersid);

			return true;
		}
		return $result;
	}
	private function getHandshake()
	{
		return md5($_SERVER['HTTP_USER_AGENT']);
	}
	private function deleteOldSessions()
	{
		$result = $this->execute('DELETE FROM sessions WHERE 
			`last_seen` < SUBDATE(now(), INTERVAL 24 HOUR) 
			AND `persistent`=0');
		$result = $this->execute('DELETE FROM sessions WHERE 
			`last_seen` < SUBDATE(now(), INTERVAL 6 MONTH) 
			AND `persistent`=1');
	}
	private function generateParam($salt)
	{
        $param='$'.implode('$',array(
                "2y", //select the most secure version of blowfish (>=PHP 5.3.7)
                str_pad(10,2,"0",STR_PAD_LEFT),
                $salt //add the salt
        ));
		return $param;
	}
	private function generatePassword($length)
	{
	    $chars = 'ABCDEFGHJKMNOPQRSTUVWXYZ23456789';
	    $count = mb_strlen($chars);

	    for ($i = 0, $result = ''; $i < $length; $i++) {
	        $index = rand(0, $count - 1);
	        $result .= mb_substr($chars, $index, 1);
	    }

	    return $result;
		
	}
}
