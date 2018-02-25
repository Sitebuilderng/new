<?php
class Model {

	private $connection;
	public function __construct($config)
	{	
		
		$this->connection = new mysqli($config['host'], $config['user'], $config['pass'], $config['db']);

		$result = $this->connection->query('select 1 from `websites`');

		if ($result===false) {
			$this->connection->query("
			CREATE TABLE `coupons` (
			  `couponsid` int(11) NOT NULL AUTO_INCREMENT,
			  `code` varchar(255) NOT NULL,
			  `expires` datetime NOT NULL,
			  `claimed_by_users_id` int(11) NOT NULL,
			  `discount` int(11) NOT NULL,
			  PRIMARY KEY (`couponsid`),
			  KEY `claimed_by_website_id` (`claimed_by_users_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8;");
						$this->connection->query("
			CREATE TABLE `payments` (
			  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
			  `usersid` int(11) NOT NULL,
			  `date` datetime NOT NULL,
			  `currency` varchar(3) NOT NULL,
			  `amount` decimal(15,2) NOT NULL,
			  `total_amount` decimal(15,2) NOT NULL,
			  `tax` decimal(15,2) NOT NULL,
			  `country_code` varchar(2) NOT NULL DEFAULT '',
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;
			");
									$this->connection->query("
			CREATE TABLE `sessions` (
			  `sessionsid` int(11) NOT NULL AUTO_INCREMENT,
			  `users_id` int(11) NOT NULL,
			  `token` varchar(255) NOT NULL,
			  `handshake_test` varchar(255) NOT NULL,
			  `last_seen` datetime NOT NULL,
			  `persistent` tinyint(1) NOT NULL,
			  PRIMARY KEY (`sessionsid`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;
			");
			$this->connection->query("
			CREATE TABLE `users` (
			  `usersid` int(11) NOT NULL AUTO_INCREMENT,
			  `email` varchar(255) NOT NULL,
			  `password` char(123) NOT NULL,
			  `salt` varchar(255) NOT NULL,
			  `joined` datetime NOT NULL,
			  `email_verified` int(1) NOT NULL,
			  `guid` char(32) NOT NULL,
			  `agreementid` varchar(255) DEFAULT '',
			  PRIMARY KEY (`usersid`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;
			");
			$this->connection->query("
			CREATE TABLE `websites` (
			  `websitesid` int(11) NOT NULL AUTO_INCREMENT,
			  `domain` varchar(255) NOT NULL,
			  `belongs_to_user` int(11) NOT NULL,
			  `payment_expires` datetime NOT NULL,
			  `free_trial` int(1) NOT NULL,
			  `failed` int(1) NOT NULL,
			  `error_log` mediumtext NOT NULL,
			  `disabled` int(1) NOT NULL,
			  `theme` varchar(255) NOT NULL,
			  `import_data` varchar(255) NOT NULL,
			  `unlimited_pages` int(1) NOT NULL,
			  `blog` int(1) NOT NULL,
			  `unlimited_blog` int(1) NOT NULL,
			  `mailing_lists` int(1) NOT NULL,
			  `shop` int(1) NOT NULL,
			  `unlimited_products` int(1) NOT NULL,
			  `livechat` int(1) NOT NULL,
			  `video` int(1) NOT NULL,
			  `galleries` int(1) NOT NULL,
			  `contact_forms` int(1) NOT NULL,
			  `calendar` int(1) NOT NULL,
			  `unlimited_staff` int(1) NOT NULL,
			  `balance` decimal(15,2) NOT NULL,
			  `last_saved` datetime NOT NULL,
			  `plan` varchar(255) NOT NULL,
			  `push_to_hub` int(1) NOT NULL,
			  `annual` int(11) NOT NULL,
			  `created` int(11) NOT NULL,
  			  `domain_registered` int(1) NOT NULL,
			  `domain_register` int(1) NOT NULL,
  			  `domain_cancel` int(1) NOT NULL,
			  `domain_expires` datetime NOT NULL,
			  PRIMARY KEY (`websitesid`)
			) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
				
			");
		}		
		
		
	}

	public function escapeString($string)
	{
		return mysqli_real_escape_string($this->connection,$string);
	}

	public function escapeArray($array)
	{
	    array_walk_recursive($array, create_function('&$v', '$v = string mysqli::escape_string ( string $v );'));
		return $array;
	}
	
	public function to_bool($val)
	{
	    return !!$val;
	}
	
	public function to_date($val)
	{
	    return date('Y-m-d', $val);
	}
	
	public function to_time($val)
	{
	    return date('H:i:s', $val);
	}
	
	public function to_datetime($val)
	{
	    return date('Y-m-d H:i:s', $val);
	}
	
	public function query($qry)
	{

		$result = $this->connection->query($qry);
//		echo mysqli_error($this->connection);
//		echo $this->connection->error;
		$resultObjects = array();

		while($row = mysqli_fetch_object($result)) $resultObjects[] = $row;

		return $resultObjects;
	}

	public function execute($qry)
	{
		$exec = $this->connection->query($qry);
		return $exec;
	}
	public function insert($qry)
	{
		$exec = $this->connection->query($qry);		
		return intval(mysqli_insert_id($this->connection));
	}
	
	public function randomString($length)
	{
		$intermediateSalt = md5(uniqid(rand(), true));
		$intermediateSalt2 = md5(uniqid(rand(), true));
		$salt = substr($intermediateSalt.$intermediateSalt2, 0, $length);
		return $salt;
	}
	
	public function normalize ($string) {
	    $table = array(
	        'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
	        'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
	        'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
	        'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
	        'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
	        'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
	        'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
	        'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r',
	    );

	    return strtr($string, $table);
	}
	public function friendlyString($string)
	{
		
		$string = strtolower($this->normalize($string));
		$patterns[0] = "/[^\-A-Za-z0-9\s]/";		
		$patterns[1] = "/ /";
		$replacements[0] = "";
		$replacements[1] = "-";
		$url = preg_replace($patterns, $replacements, $string);
		return str_replace("--", "-", $url);

	}
	
	
    
}
?>
