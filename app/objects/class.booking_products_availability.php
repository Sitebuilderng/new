<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `booking_products_availability` (
	`booking_products_availabilityid` int(11) NOT NULL auto_increment,
	`booking_productsid` INT NOT NULL,
	`booking_products_ratesid` INT NOT NULL,
	`date` DATE NOT NULL,
	`block_start` TINYINT NOT NULL,
	`block_middle` TINYINT NOT NULL,
	`block_end` TINYINT NOT NULL, PRIMARY KEY  (`booking_products_availabilityid`)) ENGINE=MyISAM;
*/

/**
* <b>booking_products_availability</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=booking_products_availability&attributeList=array+%28%0A++0+%3D%3E+%27booking_productsid%27%2C%0A++1+%3D%3E+%27booking_products_ratesid%27%2C%0A++2+%3D%3E+%27date%27%2C%0A++3+%3D%3E+%27block_start%27%2C%0A++4+%3D%3E+%27block_middle%27%2C%0A++5+%3D%3E+%27block_end%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27INT%27%2C%0A++1+%3D%3E+%27INT%27%2C%0A++2+%3D%3E+%27DATE%27%2C%0A++3+%3D%3E+%27TINYINT%27%2C%0A++4+%3D%3E+%27TINYINT%27%2C%0A++5+%3D%3E+%27TINYINT%27%2C%0A%29
*/
include_once('class.pog_base.php');
class booking_products_availability extends POG_Base
{
	public $booking_products_availabilityId = '';

	/**
	 * @var INT
	 */
	public $booking_productsid;
	
	/**
	 * @var INT
	 */
	public $booking_products_ratesid;
	
	/**
	 * @var DATE
	 */
	public $date;
	
	/**
	 * @var TINYINT
	 */
	public $block_start;
	
	/**
	 * @var TINYINT
	 */
	public $block_middle;
	
	/**
	 * @var TINYINT
	 */
	public $block_end;
	
	public $pog_attribute_type = array(
		"booking_products_availabilityId" => array('db_attributes' => array("NUMERIC", "INT")),
		"booking_productsid" => array('db_attributes' => array("NUMERIC", "INT")),
		"booking_products_ratesid" => array('db_attributes' => array("NUMERIC", "INT")),
		"date" => array('db_attributes' => array("NUMERIC", "DATE")),
		"block_start" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"block_middle" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"block_end" => array('db_attributes' => array("NUMERIC", "TINYINT")),
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
	
	function booking_products_availability($booking_productsid='', $booking_products_ratesid='', $date='', $block_start='', $block_middle='', $block_end='')
	{
		$this->booking_productsid = $booking_productsid;
		$this->booking_products_ratesid = $booking_products_ratesid;
		$this->date = $date;
		$this->block_start = $block_start;
		$this->block_middle = $block_middle;
		$this->block_end = $block_end;
	}
	
	
	/**
	* Gets object from database
	* @param integer $booking_products_availabilityId 
	* @return object $booking_products_availability
	*/
	function Get($booking_products_availabilityId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `booking_products_availability` where `booking_products_availabilityid`='".intval($booking_products_availabilityId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->booking_products_availabilityId = $row['booking_products_availabilityid'];
			$this->booking_productsid = $this->Unescape($row['booking_productsid']);
			$this->booking_products_ratesid = $this->Unescape($row['booking_products_ratesid']);
			$this->date = $row['date'];
			$this->block_start = $this->Unescape($row['block_start']);
			$this->block_middle = $this->Unescape($row['block_middle']);
			$this->block_end = $this->Unescape($row['block_end']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $booking_products_availabilityList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `booking_products_availability` ";
		$booking_products_availabilityList = Array();
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
			$sortBy = "booking_products_availabilityid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$booking_products_availability = new $thisObjectName();
			$booking_products_availability->booking_products_availabilityId = $row['booking_products_availabilityid'];
			$booking_products_availability->booking_productsid = $this->Unescape($row['booking_productsid']);
			$booking_products_availability->booking_products_ratesid = $this->Unescape($row['booking_products_ratesid']);
			$booking_products_availability->date = $row['date'];
			$booking_products_availability->block_start = $this->Unescape($row['block_start']);
			$booking_products_availability->block_middle = $this->Unescape($row['block_middle']);
			$booking_products_availability->block_end = $this->Unescape($row['block_end']);
			$booking_products_availabilityList[] = $booking_products_availability;
		}
		return $booking_products_availabilityList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $booking_products_availabilityId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->booking_products_availabilityId!=''){
			$this->pog_query = "select `booking_products_availabilityid` from `booking_products_availability` where `booking_products_availabilityid`='".$this->booking_products_availabilityId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `booking_products_availability` set 
			`booking_productsid`='".$this->Escape($this->booking_productsid)."', 
			`booking_products_ratesid`='".$this->Escape($this->booking_products_ratesid)."', 
			`date`='".$this->date."', 
			`block_start`='".$this->Escape($this->block_start)."', 
			`block_middle`='".$this->Escape($this->block_middle)."', 
			`block_end`='".$this->Escape($this->block_end)."' where `booking_products_availabilityid`='".$this->booking_products_availabilityId."'";
		}
		else
		{
			$this->pog_query = "insert into `booking_products_availability` (`booking_productsid`, `booking_products_ratesid`, `date`, `block_start`, `block_middle`, `block_end` ) values (
			'".$this->Escape($this->booking_productsid)."', 
			'".$this->Escape($this->booking_products_ratesid)."', 
			'".$this->date."', 
			'".$this->Escape($this->block_start)."', 
			'".$this->Escape($this->block_middle)."', 
			'".$this->Escape($this->block_end)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->booking_products_availabilityId == "")
		{
			$this->booking_products_availabilityId = $insertId;
		}
		return $this->booking_products_availabilityId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $booking_products_availabilityId
	*/
	function SaveNew()
	{
		$this->booking_products_availabilityId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `booking_products_availability` where `booking_products_availabilityid`='".$this->booking_products_availabilityId."'";
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
			$pog_query = "delete from `booking_products_availability` where ";
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