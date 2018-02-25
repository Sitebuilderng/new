<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `newsletter_email_config` (
	`newsletter_email_configid` int(11) NOT NULL auto_increment,
	`smtp_server` VARCHAR(255) NOT NULL,
	`from_email` VARCHAR(255) NOT NULL,
	`from_name` VARCHAR(255) NOT NULL,
	`username` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	`subject` VARCHAR(255) NOT NULL,
	`email_me` VARCHAR(255) NOT NULL, PRIMARY KEY  (`newsletter_email_configid`)) ENGINE=MyISAM;
*/

/**
* <b>newsletter_email_config</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.0e / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=newsletter_email_config&attributeList=array+%28%0A++0+%3D%3E+%27smtp_server%27%2C%0A++1+%3D%3E+%27from_email%27%2C%0A++2+%3D%3E+%27from_name%27%2C%0A++3+%3D%3E+%27username%27%2C%0A++4+%3D%3E+%27password%27%2C%0A++5+%3D%3E+%27subject%27%2C%0A++6+%3D%3E+%27email_me%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B5%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B6%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2529
*/
include_once('class.pog_base.php');
class newsletter_email_config extends POG_Base
{
	public $newsletter_email_configId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $smtp_server;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $from_email;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $from_name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $username;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $password;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $subject;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $email_me;
	
	public $pog_attribute_type = array(
		"newsletter_email_configId" => array('db_attributes' => array("NUMERIC", "INT")),
		"smtp_server" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"from_email" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"from_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"username" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"password" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"subject" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"email_me" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		);
	public $pog_query;
	
	
	/**
	* Getter for some private attributes
	* @return mixed $attribute
	*/
	public function __get($attribute)
	{
		if (isset($this->{"_".$attribute}))
		{
			return $this->{"_".$attribute};
		}
		else
		{
			return false;
		}
	}
	
	function newsletter_email_config($smtp_server='', $from_email='', $from_name='', $username='', $password='', $subject='', $email_me='')
	{
		$this->smtp_server = $smtp_server;
		$this->from_email = $from_email;
		$this->from_name = $from_name;
		$this->username = $username;
		$this->password = $password;
		$this->subject = $subject;
		$this->email_me = $email_me;
	}
	
	
	/**
	* Gets object from database
	* @param integer $newsletter_email_configId 
	* @return object $newsletter_email_config
	*/
	function Get($newsletter_email_configId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `newsletter_email_config` where `newsletter_email_configid`='".intval($newsletter_email_configId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->newsletter_email_configId = $row['newsletter_email_configid'];
			$this->smtp_server = $this->Unescape($row['smtp_server']);
			$this->from_email = $this->Unescape($row['from_email']);
			$this->from_name = $this->Unescape($row['from_name']);
			$this->username = $this->Unescape($row['username']);
			$this->password = $this->Unescape($row['password']);
			$this->subject = $this->Unescape($row['subject']);
			$this->email_me = $this->Unescape($row['email_me']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $newsletter_email_configList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `newsletter_email_config` ";
		$newsletter_email_configList = Array();
		if (sizeof($fcv_array) > 0)
		{
			$this->pog_query .= " where ";
			for ($i=0, $c=sizeof($fcv_array); $i<$c; $i++)
			{
				if (sizeof($fcv_array[$i]) == 1)
				{
					$this->pog_query .= " ".$fcv_array[$i][0]." ";
					continue;
				}
				else
				{
					if ($i > 0 && sizeof($fcv_array[$i-1]) != 1)
					{
						$this->pog_query .= " AND ";
					}
					if (isset($this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes']) && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'NUMERIC' && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'SET')
					{
						if ($GLOBALS['configuration']['db_encoding'] == 1)
						{
							$value = POG_Base::IsColumn($fcv_array[$i][2]) ? "BASE64_DECODE(".$fcv_array[$i][2].")" : "'".$fcv_array[$i][2]."'";
							$this->pog_query .= "BASE64_DECODE(`".$fcv_array[$i][0]."`) ".$fcv_array[$i][1]." ".$value;
						}
						else
						{
							$value =  POG_Base::IsColumn($fcv_array[$i][2]) ? $fcv_array[$i][2] : "'".$this->Escape($fcv_array[$i][2])."'";
							$this->pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." ".$value;
						}
					}
					else
					{
						$value = POG_Base::IsColumn($fcv_array[$i][2]) ? $fcv_array[$i][2] : "'".$fcv_array[$i][2]."'";
						$this->pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." ".$value;
					}
				}
			}
		}
		if ($sortBy != '')
		{
			if (isset($this->pog_attribute_type[$sortBy]['db_attributes']) && $this->pog_attribute_type[$sortBy]['db_attributes'][0] != 'NUMERIC' && $this->pog_attribute_type[$sortBy]['db_attributes'][0] != 'SET')
			{
				if ($GLOBALS['configuration']['db_encoding'] == 1)
				{
					$sortBy = "BASE64_DECODE($sortBy) ";
				}
				else
				{
					$sortBy = "$sortBy ";
				}
			}
			else
			{
				$sortBy = "$sortBy ";
			}
		}
		else
		{
			$sortBy = "newsletter_email_configid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$newsletter_email_config = new $thisObjectName();
			$newsletter_email_config->newsletter_email_configId = $row['newsletter_email_configid'];
			$newsletter_email_config->smtp_server = $this->Unescape($row['smtp_server']);
			$newsletter_email_config->from_email = $this->Unescape($row['from_email']);
			$newsletter_email_config->from_name = $this->Unescape($row['from_name']);
			$newsletter_email_config->username = $this->Unescape($row['username']);
			$newsletter_email_config->password = $this->Unescape($row['password']);
			$newsletter_email_config->subject = $this->Unescape($row['subject']);
			$newsletter_email_config->email_me = $this->Unescape($row['email_me']);
			$newsletter_email_configList[] = $newsletter_email_config;
		}
		return $newsletter_email_configList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $newsletter_email_configId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$this->pog_query = "select `newsletter_email_configid` from `newsletter_email_config` where `newsletter_email_configid`='".$this->newsletter_email_configId."' LIMIT 1";
		$rows = Database::Query($this->pog_query, $connection);
		if ($rows > 0)
		{
			$this->pog_query = "update `newsletter_email_config` set 
			`smtp_server`='".$this->Escape($this->smtp_server)."', 
			`from_email`='".$this->Escape($this->from_email)."', 
			`from_name`='".$this->Escape($this->from_name)."', 
			`username`='".$this->Escape($this->username)."', 
			`password`='".$this->Escape($this->password)."', 
			`subject`='".$this->Escape($this->subject)."', 
			`email_me`='".$this->Escape($this->email_me)."' where `newsletter_email_configid`='".$this->newsletter_email_configId."'";
		}
		else
		{
			$this->pog_query = "insert into `newsletter_email_config` (`smtp_server`, `from_email`, `from_name`, `username`, `password`, `subject`, `email_me` ) values (
			'".$this->Escape($this->smtp_server)."', 
			'".$this->Escape($this->from_email)."', 
			'".$this->Escape($this->from_name)."', 
			'".$this->Escape($this->username)."', 
			'".$this->Escape($this->password)."', 
			'".$this->Escape($this->subject)."', 
			'".$this->Escape($this->email_me)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->newsletter_email_configId == "")
		{
			$this->newsletter_email_configId = $insertId;
		}
		return $this->newsletter_email_configId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $newsletter_email_configId
	*/
	function SaveNew()
	{
		$this->newsletter_email_configId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `newsletter_email_config` where `newsletter_email_configid`='".$this->newsletter_email_configId."'";
		return Database::NonQuery($this->pog_query, $connection);
	}
	
	
	/**
	* Deletes a list of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param bool $deep 
	* @return 
	*/
	function DeleteList($fcv_array)
	{
		if (sizeof($fcv_array) > 0)
		{
			$connection = Database::Connect();
			$pog_query = "delete from `newsletter_email_config` where ";
			for ($i=0, $c=sizeof($fcv_array); $i<$c; $i++)
			{
				if (sizeof($fcv_array[$i]) == 1)
				{
					$pog_query .= " ".$fcv_array[$i][0]." ";
					continue;
				}
				else
				{
					if ($i > 0 && sizeof($fcv_array[$i-1]) !== 1)
					{
						$pog_query .= " AND ";
					}
					if (isset($this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes']) && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'NUMERIC' && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'SET')
					{
						$pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." '".$this->Escape($fcv_array[$i][2])."'";
					}
					else
					{
						$pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." '".$fcv_array[$i][2]."'";
					}
				}
			}
			return Database::NonQuery($pog_query, $connection);
		}
	}
}
?>