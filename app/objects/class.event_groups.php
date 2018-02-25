<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `event_groups` (
	`event_groupsid` int(11) NOT NULL auto_increment,
	`belongs_to_events_categories` INT NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	`sortorder` INT NOT NULL, PRIMARY KEY  (`event_groupsid`)) ENGINE=MyISAM;
*/

/**
* <b>event_groups</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=event_groups&attributeList=array+%28%0A++0+%3D%3E+%27belongs_to_events_categories%27%2C%0A++1+%3D%3E+%27name%27%2C%0A++2+%3D%3E+%27sortorder%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27INT%27%2C%0A++1+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++2+%3D%3E+%27INT%27%2C%0A%29
*/
include_once('class.pog_base.php');
class event_groups extends POG_Base
{
	public $event_groupsId = '';

	/**
	 * @var INT
	 */
	public $belongs_to_events_categories;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $name;
	
	/**
	 * @var INT
	 */
	public $sortorder;
	
	public $pog_attribute_type = array(
		"event_groupsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"belongs_to_events_categories" => array('db_attributes' => array("NUMERIC", "INT")),
		"name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"sortorder" => array('db_attributes' => array("NUMERIC", "INT")),
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
	
	function event_groups($belongs_to_events_categories='', $name='', $sortorder='')
	{
		$this->belongs_to_events_categories = $belongs_to_events_categories;
		$this->name = $name;
		$this->sortorder = $sortorder;
	}
	
	
	/**
	* Gets object from database
	* @param integer $event_groupsId 
	* @return object $event_groups
	*/
	function Get($event_groupsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `event_groups` where `event_groupsid`='".intval($event_groupsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->event_groupsId = $row['event_groupsid'];
			$this->belongs_to_events_categories = $this->Unescape($row['belongs_to_events_categories']);
			$this->name = $this->Unescape($row['name']);
			$this->sortorder = $this->Unescape($row['sortorder']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $event_groupsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `event_groups` ";
		$event_groupsList = Array();
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
			$sortBy = "event_groupsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$event_groups = new $thisObjectName();
			$event_groups->event_groupsId = $row['event_groupsid'];
			$event_groups->belongs_to_events_categories = $this->Unescape($row['belongs_to_events_categories']);
			$event_groups->name = $this->Unescape($row['name']);
			$event_groups->sortorder = $this->Unescape($row['sortorder']);
			$event_groupsList[] = $event_groups;
		}
		return $event_groupsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $event_groupsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->event_groupsId!=''){
			$this->pog_query = "select `event_groupsid` from `event_groups` where `event_groupsid`='".$this->event_groupsId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `event_groups` set 
			`belongs_to_events_categories`='".$this->Escape($this->belongs_to_events_categories)."', 
			`name`='".$this->Escape($this->name)."', 
			`sortorder`='".$this->Escape($this->sortorder)."' where `event_groupsid`='".$this->event_groupsId."'";
		}
		else
		{
			$this->pog_query = "insert into `event_groups` (`belongs_to_events_categories`, `name`, `sortorder` ) values (
			'".$this->Escape($this->belongs_to_events_categories)."', 
			'".$this->Escape($this->name)."', 
			'".$this->Escape($this->sortorder)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->event_groupsId == "")
		{
			$this->event_groupsId = $insertId;
		}
		return $this->event_groupsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $event_groupsId
	*/
	function SaveNew()
	{
		$this->event_groupsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `event_groups` where `event_groupsid`='".$this->event_groupsId."'";
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
			$pog_query = "delete from `event_groups` where ";
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