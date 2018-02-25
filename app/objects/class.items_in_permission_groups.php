<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `items_in_permission_groups` (
	`items_in_permission_groupsid` int(11) NOT NULL auto_increment,
	`item_id` INT NOT NULL,
	`item_type` VARCHAR(255) NOT NULL,
	`permission_group_id` INT NOT NULL, PRIMARY KEY  (`items_in_permission_groupsid`)) ENGINE=MyISAM;
*/

/**
* <b>items_in_permission_groups</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=items_in_permission_groups&attributeList=array+%28%0A++0+%3D%3E+%27item_id%27%2C%0A++1+%3D%3E+%27item_type%27%2C%0A++2+%3D%3E+%27permission_group_id%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27INT%27%2C%0A++1+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++2+%3D%3E+%27INT%27%2C%0A%29
*/
include_once('class.pog_base.php');
class items_in_permission_groups extends POG_Base
{
	public $items_in_permission_groupsId = '';

	/**
	 * @var INT
	 */
	public $item_id;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $item_type;
	
	/**
	 * @var INT
	 */
	public $permission_group_id;
	
	public $pog_attribute_type = array(
		"items_in_permission_groupsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"item_id" => array('db_attributes' => array("NUMERIC", "INT")),
		"item_type" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"permission_group_id" => array('db_attributes' => array("NUMERIC", "INT")),
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
	
	function items_in_permission_groups($item_id='', $item_type='', $permission_group_id='')
	{
		$this->item_id = $item_id;
		$this->item_type = $item_type;
		$this->permission_group_id = $permission_group_id;
	}
	
	
	/**
	* Gets object from database
	* @param integer $items_in_permission_groupsId 
	* @return object $items_in_permission_groups
	*/
	function Get($items_in_permission_groupsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `items_in_permission_groups` where `items_in_permission_groupsid`='".intval($items_in_permission_groupsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->items_in_permission_groupsId = $row['items_in_permission_groupsid'];
			$this->item_id = $this->Unescape($row['item_id']);
			$this->item_type = $this->Unescape($row['item_type']);
			$this->permission_group_id = $this->Unescape($row['permission_group_id']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $items_in_permission_groupsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `items_in_permission_groups` ";
		$items_in_permission_groupsList = Array();
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
			$sortBy = "items_in_permission_groupsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$items_in_permission_groups = new $thisObjectName();
			$items_in_permission_groups->items_in_permission_groupsId = $row['items_in_permission_groupsid'];
			$items_in_permission_groups->item_id = $this->Unescape($row['item_id']);
			$items_in_permission_groups->item_type = $this->Unescape($row['item_type']);
			$items_in_permission_groups->permission_group_id = $this->Unescape($row['permission_group_id']);
			$items_in_permission_groupsList[] = $items_in_permission_groups;
		}
		return $items_in_permission_groupsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $items_in_permission_groupsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->items_in_permission_groupsId!=''){
			$this->pog_query = "select `items_in_permission_groupsid` from `items_in_permission_groups` where `items_in_permission_groupsid`='".$this->items_in_permission_groupsId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `items_in_permission_groups` set 
			`item_id`='".$this->Escape($this->item_id)."', 
			`item_type`='".$this->Escape($this->item_type)."', 
			`permission_group_id`='".$this->Escape($this->permission_group_id)."' where `items_in_permission_groupsid`='".$this->items_in_permission_groupsId."'";
		}
		else
		{
			$this->pog_query = "insert into `items_in_permission_groups` (`item_id`, `item_type`, `permission_group_id` ) values (
			'".$this->Escape($this->item_id)."', 
			'".$this->Escape($this->item_type)."', 
			'".$this->Escape($this->permission_group_id)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->items_in_permission_groupsId == "")
		{
			$this->items_in_permission_groupsId = $insertId;
		}
		return $this->items_in_permission_groupsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $items_in_permission_groupsId
	*/
	function SaveNew()
	{
		$this->items_in_permission_groupsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `items_in_permission_groups` where `items_in_permission_groupsid`='".$this->items_in_permission_groupsId."'";
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
			$pog_query = "delete from `items_in_permission_groups` where ";
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