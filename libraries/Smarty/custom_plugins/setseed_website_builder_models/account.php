<?php

class Account extends Model {
	public $errors;
	public $usersid;
	public function create($newuser)
	{

		$safeEmail = $this->escapeString($newuser->email);

		if (!$this->errors) {

			$guid = $this->createGUID();

			$usersid = $this->insert('INSERT INTO users(
											email
											,joined
											,guid
										)
										VALUES(
											"'.$safeEmail.'"
											,"'.$this->to_datetime(time()).'"
											,"'.$guid.'"
										)');

			$user = $this->getUser($usersid);
			return $user;
		} else {
			$result = false;
		}

		return $result;
	}
	public function getUsers()
	{
		$users = $this->query('SELECT * FROM users');
		return $users;
	}
	public function getUser($id) {
		$safeId = $this->escapeString($id);
		$result = $this->query('SELECT * FROM users WHERE usersid='.$safeId.'');
		return $result[0];
	}
	public function deleteAccount($id) {
		$safeId = $this->escapeString($id);
		$exists = $this->query('SELECT * FROM users WHERE usersid='.$safeId.'');
		if (count($exists)>0) {
			$result = $this->execute('DELETE FROM users WHERE usersid='.$safeId);
			return $result;
		} else {
			return false;
		}

	}
	public function getUserFromEmail($email)
	{
		$safeEmail = $this->escapeString($email);
		$result = $this->query('SELECT * FROM users WHERE email="'.$safeEmail.'"');
		return $result[0];
	}
	public function getUserFromGuid($guid)
	{
		$safeGuid = $this->escapeString($guid);
		$result = $this->query('SELECT * FROM users WHERE guid="'.$safeGuid.'"');
		return $result[0];
	}

	public function userExists($email)
	{
		$safeEmail =$this->escapeString($email);
		$result = $this->query('SELECT * FROM users WHERE email="'.$safeEmail.'"');
		return $result;
	}
	private function createGUID()
	{
		$guid = md5(uniqid(rand(), true));
		return $guid;
	}
	public function setAgreementID($agreementid)
	{
		$this->query('UPDATE users SET agreementid="'.$this->escapeString($agreementid).'" WHERE usersid='.$this->usersid);
	}
}
