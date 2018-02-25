<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `tables` (
	`tablesid` int(11) NOT NULL auto_increment,
	`name` VARCHAR(255) NOT NULL,
	`csv` MEDIUMTEXT NOT NULL,
	`headers` TINYINT NOT NULL,
	`caption` MEDIUMTEXT NOT NULL, PRIMARY KEY  (`tablesid`)) ENGINE=MyISAM;
*/

/**
* <b>tables</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=tables&attributeList=array+%28%0A++0+%3D%3E+%27name%27%2C%0A++1+%3D%3E+%27csv%27%2C%0A++2+%3D%3E+%27headers%27%2C%0A++3+%3D%3E+%27caption%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++1+%3D%3E+%27MEDIUMTEXT%27%2C%0A++2+%3D%3E+%27TINYINT%27%2C%0A++3+%3D%3E+%27MEDIUMTEXT%27%2C%0A%29
*/
include_once('class.pog_base.php');
class tables extends POG_Base
{
	public $tablesId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $name;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $csv;
	
	/**
	 * @var TINYINT
	 */
	public $headers;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $caption;
	
	public $pog_attribute_type = array(
		"tablesId" => array('db_attributes' => array("NUMERIC", "INT")),
		"name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"csv" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"headers" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"caption" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
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
	
	function tables($name='', $csv='', $headers='', $caption='')
	{
		$this->name = $name;
		$this->csv = $csv;
		$this->headers = $headers;
		$this->caption = $caption;
	}
	
	
	/**
	* Gets object from database
	* @param integer $tablesId 
	* @return object $tables
	*/
	function Get($tablesId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `tables` where `tablesid`='".intval($tablesId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->tablesId = $row['tablesid'];
			$this->name = $this->Unescape($row['name']);
			$this->csv = $this->Unescape($row['csv']);
			$this->headers = $this->Unescape($row['headers']);
			$this->caption = $this->Unescape($row['caption']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $tablesList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `tables` ";
		$tablesList = Array();
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
			$sortBy = "tablesid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$tables = new $thisObjectName();
			$tables->tablesId = $row['tablesid'];
			$tables->name = $this->Unescape($row['name']);
			$tables->csv = $this->Unescape($row['csv']);
			$tables->headers = $this->Unescape($row['headers']);
			$tables->caption = $this->Unescape($row['caption']);
			$tablesList[] = $tables;
		}
		return $tablesList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $tablesId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->tablesId!=''){
			$this->pog_query = "select `tablesid` from `tables` where `tablesid`='".$this->tablesId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `tables` set 
			`name`='".$this->Escape($this->name)."', 
			`csv`='".$this->Escape($this->csv)."', 
			`headers`='".$this->Escape($this->headers)."', 
			`caption`='".$this->Escape($this->caption)."' where `tablesid`='".$this->tablesId."'";
		}
		else
		{
			$this->pog_query = "insert into `tables` (`name`, `csv`, `headers`, `caption` ) values (
			'".$this->Escape($this->name)."', 
			'".$this->Escape($this->csv)."', 
			'".$this->Escape($this->headers)."', 
			'".$this->Escape($this->caption)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->tablesId == "")
		{
			$this->tablesId = $insertId;
		}
		return $this->tablesId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $tablesId
	*/
	function SaveNew()
	{
		$this->tablesId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `tables` where `tablesid`='".$this->tablesId."'";
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
			$pog_query = "delete from `tables` where ";
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