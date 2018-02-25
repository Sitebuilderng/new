<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `booking_products_orders` (
	`booking_products_ordersid` int(11) NOT NULL auto_increment,
	`ordersid` INT NOT NULL,
	`date` DATE NOT NULL,
	`normal_qty` INT NOT NULL,
	`special_qty` INT NOT NULL,
	`children_qty` INT NOT NULL,
	`paid` TINYINT NOT NULL, PRIMARY KEY  (`booking_products_ordersid`)) ENGINE=MyISAM;
*/

/**
* <b>booking_products_orders</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=booking_products_orders&attributeList=array+%28%0A++0+%3D%3E+%27ordersid%27%2C%0A++1+%3D%3E+%27date%27%2C%0A++2+%3D%3E+%27normal_qty%27%2C%0A++3+%3D%3E+%27special_qty%27%2C%0A++4+%3D%3E+%27children_qty%27%2C%0A++5+%3D%3E+%27paid%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27INT%27%2C%0A++1+%3D%3E+%27DATE%27%2C%0A++2+%3D%3E+%27INT%27%2C%0A++3+%3D%3E+%27INT%27%2C%0A++4+%3D%3E+%27INT%27%2C%0A++5+%3D%3E+%27TINYINT%27%2C%0A%29
*/
include_once('class.pog_base.php');
class booking_products_orders extends POG_Base
{
	public $booking_products_ordersId = '';

	/**
	 * @var INT
	 */
	public $ordersid;
	
	/**
	 * @var DATE
	 */
	public $date;
	
	/**
	 * @var INT
	 */
	public $normal_qty;
	
	/**
	 * @var INT
	 */
	public $special_qty;
	
	/**
	 * @var INT
	 */
	public $children_qty;
	
	/**
	 * @var TINYINT
	 */
	public $paid;
	
	public $pog_attribute_type = array(
		"booking_products_ordersId" => array('db_attributes' => array("NUMERIC", "INT")),
		"ordersid" => array('db_attributes' => array("NUMERIC", "INT")),
		"date" => array('db_attributes' => array("NUMERIC", "DATE")),
		"normal_qty" => array('db_attributes' => array("NUMERIC", "INT")),
		"special_qty" => array('db_attributes' => array("NUMERIC", "INT")),
		"children_qty" => array('db_attributes' => array("NUMERIC", "INT")),
		"paid" => array('db_attributes' => array("NUMERIC", "TINYINT")),
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
	
	function booking_products_orders($ordersid='', $date='', $normal_qty='', $special_qty='', $children_qty='', $paid='')
	{
		$this->ordersid = $ordersid;
		$this->date = $date;
		$this->normal_qty = $normal_qty;
		$this->special_qty = $special_qty;
		$this->children_qty = $children_qty;
		$this->paid = $paid;
	}
	
	
	/**
	* Gets object from database
	* @param integer $booking_products_ordersId 
	* @return object $booking_products_orders
	*/
	function Get($booking_products_ordersId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `booking_products_orders` where `booking_products_ordersid`='".intval($booking_products_ordersId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->booking_products_ordersId = $row['booking_products_ordersid'];
			$this->ordersid = $this->Unescape($row['ordersid']);
			$this->date = $row['date'];
			$this->normal_qty = $this->Unescape($row['normal_qty']);
			$this->special_qty = $this->Unescape($row['special_qty']);
			$this->children_qty = $this->Unescape($row['children_qty']);
			$this->paid = $this->Unescape($row['paid']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $booking_products_ordersList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `booking_products_orders` ";
		$booking_products_ordersList = Array();
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
			$sortBy = "booking_products_ordersid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$booking_products_orders = new $thisObjectName();
			$booking_products_orders->booking_products_ordersId = $row['booking_products_ordersid'];
			$booking_products_orders->ordersid = $this->Unescape($row['ordersid']);
			$booking_products_orders->date = $row['date'];
			$booking_products_orders->normal_qty = $this->Unescape($row['normal_qty']);
			$booking_products_orders->special_qty = $this->Unescape($row['special_qty']);
			$booking_products_orders->children_qty = $this->Unescape($row['children_qty']);
			$booking_products_orders->paid = $this->Unescape($row['paid']);
			$booking_products_ordersList[] = $booking_products_orders;
		}
		return $booking_products_ordersList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $booking_products_ordersId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->booking_products_ordersId!=''){
			$this->pog_query = "select `booking_products_ordersid` from `booking_products_orders` where `booking_products_ordersid`='".$this->booking_products_ordersId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `booking_products_orders` set 
			`ordersid`='".$this->Escape($this->ordersid)."', 
			`date`='".$this->date."', 
			`normal_qty`='".$this->Escape($this->normal_qty)."', 
			`special_qty`='".$this->Escape($this->special_qty)."', 
			`children_qty`='".$this->Escape($this->children_qty)."', 
			`paid`='".$this->Escape($this->paid)."' where `booking_products_ordersid`='".$this->booking_products_ordersId."'";
		}
		else
		{
			$this->pog_query = "insert into `booking_products_orders` (`ordersid`, `date`, `normal_qty`, `special_qty`, `children_qty`, `paid` ) values (
			'".$this->Escape($this->ordersid)."', 
			'".$this->date."', 
			'".$this->Escape($this->normal_qty)."', 
			'".$this->Escape($this->special_qty)."', 
			'".$this->Escape($this->children_qty)."', 
			'".$this->Escape($this->paid)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->booking_products_ordersId == "")
		{
			$this->booking_products_ordersId = $insertId;
		}
		return $this->booking_products_ordersId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $booking_products_ordersId
	*/
	function SaveNew()
	{
		$this->booking_products_ordersId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `booking_products_orders` where `booking_products_ordersid`='".$this->booking_products_ordersId."'";
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
			$pog_query = "delete from `booking_products_orders` where ";
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