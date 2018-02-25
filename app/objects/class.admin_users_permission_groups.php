<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `admin_users_permission_groups` (
	`admin_users_permission_groupsid` int(11) NOT NULL auto_increment,
	`name` VARCHAR(255) NOT NULL,
	`order` INT NOT NULL, PRIMARY KEY  (`admin_users_permission_groupsid`)) ENGINE=MyISAM;
*/

/**
* <b>admin_users_permission_groups</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=admin_users_permission_groups&attributeList=array+%28%0A++0+%3D%3E+%27name%27%2C%0A++1+%3D%3E+%27order%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527INT%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class admin_users_permission_groups extends POG_Base
{
	public $admin_users_permission_groupsId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $name;
	
	/**
	 * @var INT
	 */
	public $order;
	
	public $pog_attribute_type = array(
		"admin_users_permission_groupsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"order" => array('db_attributes' => array("NUMERIC", "INT")),
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
	
	function admin_users_permission_groups($name='', $order='')
	{
		$this->name = $name;
		$this->order = $order;
	}
	
	
	/**
	* Gets object from database
	* @param integer $admin_users_permission_groupsId 
	* @return object $admin_users_permission_groups
	*/
	function Get($admin_users_permission_groupsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `admin_users_permission_groups` where `admin_users_permission_groupsid`='".intval($admin_users_permission_groupsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->admin_users_permission_groupsId = $row['admin_users_permission_groupsid'];
			$this->name = $this->Unescape($row['name']);
			$this->order = $this->Unescape($row['order']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $admin_users_permission_groupsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `admin_users_permission_groups` ";
		$admin_users_permission_groupsList = Array();
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
			$sortBy = "admin_users_permission_groupsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$admin_users_permission_groups = new $thisObjectName();
			$admin_users_permission_groups->admin_users_permission_groupsId = $row['admin_users_permission_groupsid'];
			$admin_users_permission_groups->name = $this->Unescape($row['name']);
			$admin_users_permission_groups->order = $this->Unescape($row['order']);
			$admin_users_permission_groupsList[] = $admin_users_permission_groups;
		}
		return $admin_users_permission_groupsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $admin_users_permission_groupsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->admin_users_permission_groupsId!=''){
			$this->pog_query = "select `admin_users_permission_groupsid` from `admin_users_permission_groups` where `admin_users_permission_groupsid`='".$this->admin_users_permission_groupsId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `admin_users_permission_groups` set 
			`name`='".$this->Escape($this->name)."', 
			`order`='".$this->Escape($this->order)."' where `admin_users_permission_groupsid`='".$this->admin_users_permission_groupsId."'";
		}
		else
		{
			$this->pog_query = "insert into `admin_users_permission_groups` (`name`, `order` ) values (
			'".$this->Escape($this->name)."', 
			'".$this->Escape($this->order)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->admin_users_permission_groupsId == "")
		{
			$this->admin_users_permission_groupsId = $insertId;
		}
		return $this->admin_users_permission_groupsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $admin_users_permission_groupsId
	*/
	function SaveNew()
	{
		$this->admin_users_permission_groupsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `admin_users_permission_groups` where `admin_users_permission_groupsid`='".$this->admin_users_permission_groupsId."'";
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
			$pog_query = "delete from `admin_users_permission_groups` where ";
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