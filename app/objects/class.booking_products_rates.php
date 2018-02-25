<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `booking_products_rates` (
	`booking_products_ratesid` int(11) NOT NULL auto_increment,
	`booking_productsid` INT NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	`deleted` TINYINT NOT NULL, PRIMARY KEY  (`booking_products_ratesid`)) ENGINE=MyISAM;
*/

/**
* <b>booking_products_rates</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=booking_products_rates&attributeList=array+%28%0A++0+%3D%3E+%27booking_productsid%27%2C%0A++1+%3D%3E+%27name%27%2C%0A++2+%3D%3E+%27deleted%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27INT%27%2C%0A++1+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++2+%3D%3E+%27TINYINT%27%2C%0A%29
*/
include_once('class.pog_base.php');
class booking_products_rates extends POG_Base
{
	public $booking_products_ratesId = '';

	/**
	 * @var INT
	 */
	public $booking_productsid;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $name;
	
	/**
	 * @var TINYINT
	 */
	public $deleted;
	
	public $pog_attribute_type = array(
		"booking_products_ratesId" => array('db_attributes' => array("NUMERIC", "INT")),
		"booking_productsid" => array('db_attributes' => array("NUMERIC", "INT")),
		"name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"deleted" => array('db_attributes' => array("NUMERIC", "TINYINT")),
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
	
	function booking_products_rates($booking_productsid='', $name='', $deleted='')
	{
		$this->booking_productsid = $booking_productsid;
		$this->name = $name;
		$this->deleted = $deleted;
	}
	
	
	/**
	* Gets object from database
	* @param integer $booking_products_ratesId 
	* @return object $booking_products_rates
	*/
	function Get($booking_products_ratesId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `booking_products_rates` where `booking_products_ratesid`='".intval($booking_products_ratesId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->booking_products_ratesId = $row['booking_products_ratesid'];
			$this->booking_productsid = $this->Unescape($row['booking_productsid']);
			$this->name = $this->Unescape($row['name']);
			$this->deleted = $this->Unescape($row['deleted']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $booking_products_ratesList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `booking_products_rates` ";
		$booking_products_ratesList = Array();
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
			$sortBy = "booking_products_ratesid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$booking_products_rates = new $thisObjectName();
			$booking_products_rates->booking_products_ratesId = $row['booking_products_ratesid'];
			$booking_products_rates->booking_productsid = $this->Unescape($row['booking_productsid']);
			$booking_products_rates->name = $this->Unescape($row['name']);
			$booking_products_rates->deleted = $this->Unescape($row['deleted']);
			$booking_products_ratesList[] = $booking_products_rates;
		}
		return $booking_products_ratesList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $booking_products_ratesId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->booking_products_ratesId!=''){
			$this->pog_query = "select `booking_products_ratesid` from `booking_products_rates` where `booking_products_ratesid`='".$this->booking_products_ratesId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `booking_products_rates` set 
			`booking_productsid`='".$this->Escape($this->booking_productsid)."', 
			`name`='".$this->Escape($this->name)."', 
			`deleted`='".$this->Escape($this->deleted)."' where `booking_products_ratesid`='".$this->booking_products_ratesId."'";
		}
		else
		{
			$this->pog_query = "insert into `booking_products_rates` (`booking_productsid`, `name`, `deleted` ) values (
			'".$this->Escape($this->booking_productsid)."', 
			'".$this->Escape($this->name)."', 
			'".$this->Escape($this->deleted)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->booking_products_ratesId == "")
		{
			$this->booking_products_ratesId = $insertId;
		}
		return $this->booking_products_ratesId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $booking_products_ratesId
	*/
	function SaveNew()
	{
		$this->booking_products_ratesId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `booking_products_rates` where `booking_products_ratesid`='".$this->booking_products_ratesId."'";
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
			$pog_query = "delete from `booking_products_rates` where ";
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