<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `newsletter_email_groups` (
	`newsletter_email_groupsid` int(11) NOT NULL auto_increment,
	`name` VARCHAR(255) NOT NULL,
	`autoresponder` INT NOT NULL,
	`autoresponder_subject` VARCHAR(255) NOT NULL, PRIMARY KEY  (`newsletter_email_groupsid`)) ENGINE=MyISAM;
*/

/**
* <b>newsletter_email_groups</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=newsletter_email_groups&attributeList=array+%28%0A++0+%3D%3E+%27name%27%2C%0A++1+%3D%3E+%27autoresponder%27%2C%0A++2+%3D%3E+%27autoresponder_subject%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A++2+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class newsletter_email_groups extends POG_Base
{
	public $newsletter_email_groupsId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $name;
	
	/**
	 * @var INT
	 */
	public $autoresponder;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $autoresponder_subject;
	
	public $pog_attribute_type = array(
		"newsletter_email_groupsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"autoresponder" => array('db_attributes' => array("NUMERIC", "INT")),
		"autoresponder_subject" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
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
	
	function newsletter_email_groups($name='', $autoresponder='', $autoresponder_subject='')
	{
		$this->name = $name;
		$this->autoresponder = $autoresponder;
		$this->autoresponder_subject = $autoresponder_subject;
	}
	
	
	/**
	* Gets object from database
	* @param integer $newsletter_email_groupsId 
	* @return object $newsletter_email_groups
	*/
	function Get($newsletter_email_groupsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `newsletter_email_groups` where `newsletter_email_groupsid`='".intval($newsletter_email_groupsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->newsletter_email_groupsId = $row['newsletter_email_groupsid'];
			$this->name = $this->Unescape($row['name']);
			$this->autoresponder = $this->Unescape($row['autoresponder']);
			$this->autoresponder_subject = $this->Unescape($row['autoresponder_subject']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $newsletter_email_groupsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `newsletter_email_groups` ";
		$newsletter_email_groupsList = Array();
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
			$sortBy = "newsletter_email_groupsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$newsletter_email_groups = new $thisObjectName();
			$newsletter_email_groups->newsletter_email_groupsId = $row['newsletter_email_groupsid'];
			$newsletter_email_groups->name = $this->Unescape($row['name']);
			$newsletter_email_groups->autoresponder = $this->Unescape($row['autoresponder']);
			$newsletter_email_groups->autoresponder_subject = $this->Unescape($row['autoresponder_subject']);
			$newsletter_email_groupsList[] = $newsletter_email_groups;
		}
		return $newsletter_email_groupsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $newsletter_email_groupsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->newsletter_email_groupsId!=''){
			$this->pog_query = "select `newsletter_email_groupsid` from `newsletter_email_groups` where `newsletter_email_groupsid`='".$this->newsletter_email_groupsId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `newsletter_email_groups` set 
			`name`='".$this->Escape($this->name)."', 
			`autoresponder`='".$this->Escape($this->autoresponder)."', 
			`autoresponder_subject`='".$this->Escape($this->autoresponder_subject)."' where `newsletter_email_groupsid`='".$this->newsletter_email_groupsId."'";
		}
		else
		{
			$this->pog_query = "insert into `newsletter_email_groups` (`name`, `autoresponder`, `autoresponder_subject` ) values (
			'".$this->Escape($this->name)."', 
			'".$this->Escape($this->autoresponder)."', 
			'".$this->Escape($this->autoresponder_subject)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->newsletter_email_groupsId == "")
		{
			$this->newsletter_email_groupsId = $insertId;
		}
		return $this->newsletter_email_groupsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $newsletter_email_groupsId
	*/
	function SaveNew()
	{
		$this->newsletter_email_groupsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `newsletter_email_groups` where `newsletter_email_groupsid`='".$this->newsletter_email_groupsId."'";
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
			$pog_query = "delete from `newsletter_email_groups` where ";
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