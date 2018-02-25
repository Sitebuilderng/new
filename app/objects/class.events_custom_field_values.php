<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `events_custom_field_values` (
	`events_custom_field_valuesid` int(11) NOT NULL auto_increment,
	`events_custom_fieldsid` INT NOT NULL,
	`eventsid` INT NOT NULL,
	`value` MEDIUMTEXT NOT NULL, PRIMARY KEY  (`events_custom_field_valuesid`)) ENGINE=MyISAM;
*/

/**
* <b>events_custom_field_values</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=events_custom_field_values&attributeList=array+%28%0A++0+%3D%3E+%27events_custom_fieldsid%27%2C%0A++1+%3D%3E+%27eventsid%27%2C%0A++2+%3D%3E+%27value%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27INT%27%2C%0A++1+%3D%3E+%27INT%27%2C%0A++2+%3D%3E+%27MEDIUMTEXT%27%2C%0A%29
*/
include_once('class.pog_base.php');
class events_custom_field_values extends POG_Base
{
	public $events_custom_field_valuesId = '';

	/**
	 * @var INT
	 */
	public $events_custom_fieldsid;
	
	/**
	 * @var INT
	 */
	public $eventsid;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $value;
	
	public $pog_attribute_type = array(
		"events_custom_field_valuesId" => array('db_attributes' => array("NUMERIC", "INT")),
		"events_custom_fieldsid" => array('db_attributes' => array("NUMERIC", "INT")),
		"eventsid" => array('db_attributes' => array("NUMERIC", "INT")),
		"value" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
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
	
	function events_custom_field_values($events_custom_fieldsid='', $eventsid='', $value='')
	{
		$this->events_custom_fieldsid = $events_custom_fieldsid;
		$this->eventsid = $eventsid;
		$this->value = $value;
	}
	
	
	/**
	* Gets object from database
	* @param integer $events_custom_field_valuesId 
	* @return object $events_custom_field_values
	*/
	function Get($events_custom_field_valuesId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `events_custom_field_values` where `events_custom_field_valuesid`='".intval($events_custom_field_valuesId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->events_custom_field_valuesId = $row['events_custom_field_valuesid'];
			$this->events_custom_fieldsid = $this->Unescape($row['events_custom_fieldsid']);
			$this->eventsid = $this->Unescape($row['eventsid']);
			$this->value = $this->Unescape($row['value']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $events_custom_field_valuesList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `events_custom_field_values` ";
		$events_custom_field_valuesList = Array();
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
			$sortBy = "events_custom_field_valuesid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$events_custom_field_values = new $thisObjectName();
			$events_custom_field_values->events_custom_field_valuesId = $row['events_custom_field_valuesid'];
			$events_custom_field_values->events_custom_fieldsid = $this->Unescape($row['events_custom_fieldsid']);
			$events_custom_field_values->eventsid = $this->Unescape($row['eventsid']);
			$events_custom_field_values->value = $this->Unescape($row['value']);
			$events_custom_field_valuesList[] = $events_custom_field_values;
		}
		return $events_custom_field_valuesList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $events_custom_field_valuesId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->events_custom_field_valuesId!=''){
			$this->pog_query = "select `events_custom_field_valuesid` from `events_custom_field_values` where `events_custom_field_valuesid`='".$this->events_custom_field_valuesId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `events_custom_field_values` set 
			`events_custom_fieldsid`='".$this->Escape($this->events_custom_fieldsid)."', 
			`eventsid`='".$this->Escape($this->eventsid)."', 
			`value`='".$this->Escape($this->value)."' where `events_custom_field_valuesid`='".$this->events_custom_field_valuesId."'";
		}
		else
		{
			$this->pog_query = "insert into `events_custom_field_values` (`events_custom_fieldsid`, `eventsid`, `value` ) values (
			'".$this->Escape($this->events_custom_fieldsid)."', 
			'".$this->Escape($this->eventsid)."', 
			'".$this->Escape($this->value)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->events_custom_field_valuesId == "")
		{
			$this->events_custom_field_valuesId = $insertId;
		}
		return $this->events_custom_field_valuesId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $events_custom_field_valuesId
	*/
	function SaveNew()
	{
		$this->events_custom_field_valuesId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `events_custom_field_values` where `events_custom_field_valuesid`='".$this->events_custom_field_valuesId."'";
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
			$pog_query = "delete from `events_custom_field_values` where ";
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