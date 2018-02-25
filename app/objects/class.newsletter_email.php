<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `newsletter_email` (
	`newsletter_emailid` int(11) NOT NULL auto_increment,
	`belongs_to_mailing_list` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	`inactive` VARCHAR(255) NOT NULL,
	`fail_on_last_send` VARCHAR(255) NOT NULL, PRIMARY KEY  (`newsletter_emailid`)) ENGINE=MyISAM;
*/

/**
* <b>newsletter_email</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.0d / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=newsletter_email&attributeList=array+%28%0A++0+%3D%3E+%27belongs_to_mailing_list%27%2C%0A++1+%3D%3E+%27email%27%2C%0A++2+%3D%3E+%27name%27%2C%0A++3+%3D%3E+%27inactive%27%2C%0A++4+%3D%3E+%27fail_on_last_send%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2529
*/
include_once('class.pog_base.php');
class newsletter_email extends POG_Base
{
	public $newsletter_emailId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $belongs_to_mailing_list;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $email;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $inactive;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $fail_on_last_send;
	
	public $pog_attribute_type = array(
		"newsletter_emailId" => array('db_attributes' => array("NUMERIC", "INT")),
		"belongs_to_mailing_list" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"email" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"inactive" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"fail_on_last_send" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
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
	
	function newsletter_email($belongs_to_mailing_list='', $email='', $name='', $inactive='', $fail_on_last_send='')
	{
		$this->belongs_to_mailing_list = $belongs_to_mailing_list;
		$this->email = $email;
		$this->name = $name;
		$this->inactive = $inactive;
		$this->fail_on_last_send = $fail_on_last_send;
	}
	
	
	/**
	* Gets object from database
	* @param integer $newsletter_emailId 
	* @return object $newsletter_email
	*/
	function Get($newsletter_emailId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `newsletter_email` where `newsletter_emailid`='".intval($newsletter_emailId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->newsletter_emailId = $row['newsletter_emailid'];
			$this->belongs_to_mailing_list = $this->Unescape($row['belongs_to_mailing_list']);
			$this->email = $this->Unescape($row['email']);
			$this->name = $this->Unescape($row['name']);
			$this->inactive = $this->Unescape($row['inactive']);
			$this->fail_on_last_send = $this->Unescape($row['fail_on_last_send']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $newsletter_emailList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `newsletter_email` ";
		$newsletter_emailList = Array();
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
			$sortBy = "newsletter_emailid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$newsletter_email = new $thisObjectName();
			$newsletter_email->newsletter_emailId = $row['newsletter_emailid'];
			$newsletter_email->belongs_to_mailing_list = $this->Unescape($row['belongs_to_mailing_list']);
			$newsletter_email->email = $this->Unescape($row['email']);
			$newsletter_email->name = $this->Unescape($row['name']);
			$newsletter_email->inactive = $this->Unescape($row['inactive']);
			$newsletter_email->fail_on_last_send = $this->Unescape($row['fail_on_last_send']);
			$newsletter_emailList[] = $newsletter_email;
		}
		return $newsletter_emailList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $newsletter_emailId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$this->pog_query = "select `newsletter_emailid` from `newsletter_email` where `newsletter_emailid`='".$this->newsletter_emailId."' LIMIT 1";
		$rows = Database::Query($this->pog_query, $connection);
		if ($rows > 0)
		{
			$this->pog_query = "update `newsletter_email` set 
			`belongs_to_mailing_list`='".$this->Escape($this->belongs_to_mailing_list)."', 
			`email`='".$this->Escape($this->email)."', 
			`name`='".$this->Escape($this->name)."', 
			`inactive`='".$this->Escape($this->inactive)."', 
			`fail_on_last_send`='".$this->Escape($this->fail_on_last_send)."' where `newsletter_emailid`='".$this->newsletter_emailId."'";
		}
		else
		{
			$this->pog_query = "insert into `newsletter_email` (`belongs_to_mailing_list`, `email`, `name`, `inactive`, `fail_on_last_send` ) values (
			'".$this->Escape($this->belongs_to_mailing_list)."', 
			'".$this->Escape($this->email)."', 
			'".$this->Escape($this->name)."', 
			'".$this->Escape($this->inactive)."', 
			'".$this->Escape($this->fail_on_last_send)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->newsletter_emailId == "")
		{
			$this->newsletter_emailId = $insertId;
		}
		return $this->newsletter_emailId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $newsletter_emailId
	*/
	function SaveNew()
	{
		$this->newsletter_emailId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `newsletter_email` where `newsletter_emailid`='".$this->newsletter_emailId."'";
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
			$pog_query = "delete from `newsletter_email` where ";
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