<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `access_groups` (
	`access_groupsid` int(11) NOT NULL auto_increment,
	`password` CHAR(40) NOT NULL,
	`username` VARCHAR(255) NOT NULL,
	`salt` VARCHAR(255) NOT NULL, PRIMARY KEY  (`access_groupsid`)) ENGINE=MyISAM;
*/

/**
* <b>access_groups</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.0e / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=access_groups&attributeList=array+%28%0A++0+%3D%3E+%27password%27%2C%0A++1+%3D%3E+%27username%27%2C%0A++2+%3D%3E+%27salt%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27CHAR%2840%29%27%2C%0A++1+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++2+%3D%3E+%27VARCHAR%28255%29%27%2C%0A%29
*/
include_once('class.pog_base.php');
class access_groups extends POG_Base
{
	public $access_groupsId = '';

	/**
	 * @var CHAR(40)
	 */
	public $password;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $username;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $salt;
	
	public $pog_attribute_type = array(
		"access_groupsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"password" => array('db_attributes' => array("TEXT", "CHAR", "40")),
		"username" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"salt" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
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
	
	function access_groups($password='', $username='', $salt='')
	{
		$this->password = $password;
		$this->username = $username;
		$this->salt = $salt;
	}
	
	
	/**
	* Gets object from database
	* @param integer $access_groupsId 
	* @return object $access_groups
	*/
	function Get($access_groupsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `access_groups` where `access_groupsid`='".intval($access_groupsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->access_groupsId = $row['access_groupsid'];
			$this->password = $this->Unescape($row['password']);
			$this->username = $this->Unescape($row['username']);
			$this->salt = $this->Unescape($row['salt']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $access_groupsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `access_groups` ";
		$access_groupsList = Array();
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
			$sortBy = "access_groupsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$access_groups = new $thisObjectName();
			$access_groups->access_groupsId = $row['access_groupsid'];
			$access_groups->password = $this->Unescape($row['password']);
			$access_groups->username = $this->Unescape($row['username']);
			$access_groups->salt = $this->Unescape($row['salt']);
			$access_groupsList[] = $access_groups;
		}
		return $access_groupsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $access_groupsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$this->pog_query = "select `access_groupsid` from `access_groups` where `access_groupsid`='".$this->access_groupsId."' LIMIT 1";
		$rows = Database::Query($this->pog_query, $connection);
		if ($rows > 0)
		{
			$this->pog_query = "update `access_groups` set 
			`password`='".$this->Escape($this->password)."', 
			`username`='".$this->Escape($this->username)."', 
			`salt`='".$this->Escape($this->salt)."' where `access_groupsid`='".$this->access_groupsId."'";
		}
		else
		{
			$this->pog_query = "insert into `access_groups` (`password`, `username`, `salt` ) values (
			'".$this->Escape($this->password)."', 
			'".$this->Escape($this->username)."', 
			'".$this->Escape($this->salt)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->access_groupsId == "")
		{
			$this->access_groupsId = $insertId;
		}
		return $this->access_groupsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $access_groupsId
	*/
	function SaveNew()
	{
		$this->access_groupsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `access_groups` where `access_groupsid`='".$this->access_groupsId."'";
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
			$pog_query = "delete from `access_groups` where ";
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