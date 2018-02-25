<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `booking_products_prices` (
	`booking_products_pricesid` int(11) NOT NULL auto_increment,
	`booking_products_ratesid` INT NOT NULL,
	`customer_type` TINYINT NOT NULL,
	`duration_discount_threshold` TINYINT NOT NULL,
	`quantity_discount_threshold` TINYINT NOT NULL,
	`price` DECIMAL(16,2) NOT NULL,
	`min_price_per_space` DECIMAL(16,2) NOT NULL, PRIMARY KEY  (`booking_products_pricesid`)) ENGINE=MyISAM;
*/

/**
* <b>booking_products_prices</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=booking_products_prices&attributeList=array+%28%0A++0+%3D%3E+%27booking_products_ratesid%27%2C%0A++1+%3D%3E+%27customer_type%27%2C%0A++2+%3D%3E+%27duration_discount_threshold%27%2C%0A++3+%3D%3E+%27quantity_discount_threshold%27%2C%0A++4+%3D%3E+%27price%27%2C%0A++5+%3D%3E+%27min_price_per_space%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27INT%27%2C%0A++1+%3D%3E+%27TINYINT%27%2C%0A++2+%3D%3E+%27TINYINT%27%2C%0A++3+%3D%3E+%27TINYINT%27%2C%0A++4+%3D%3E+%27DECIMAL%2816%2C2%29%27%2C%0A++5+%3D%3E+%27DECIMAL%2816%2C2%29%27%2C%0A%29
*/
include_once('class.pog_base.php');
class booking_products_prices extends POG_Base
{
	public $booking_products_pricesId = '';

	/**
	 * @var INT
	 */
	public $booking_products_ratesid;
	
	/**
	 * @var TINYINT
	 */
	public $customer_type;
	
	/**
	 * @var TINYINT
	 */
	public $duration_discount_threshold;
	
	/**
	 * @var TINYINT
	 */
	public $quantity_discount_threshold;
	
	/**
	 * @var DECIMAL(16,2)
	 */
	public $price;
	
	/**
	 * @var DECIMAL(16,2)
	 */
	public $min_price_per_space;
	
	public $pog_attribute_type = array(
		"booking_products_pricesId" => array('db_attributes' => array("NUMERIC", "INT")),
		"booking_products_ratesid" => array('db_attributes' => array("NUMERIC", "INT")),
		"customer_type" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"duration_discount_threshold" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"quantity_discount_threshold" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"price" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"min_price_per_space" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
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
	
	function booking_products_prices($booking_products_ratesid='', $customer_type='', $duration_discount_threshold='', $quantity_discount_threshold='', $price='', $min_price_per_space='')
	{
		$this->booking_products_ratesid = $booking_products_ratesid;
		$this->customer_type = $customer_type;
		$this->duration_discount_threshold = $duration_discount_threshold;
		$this->quantity_discount_threshold = $quantity_discount_threshold;
		$this->price = $price;
		$this->min_price_per_space = $min_price_per_space;
	}
	
	
	/**
	* Gets object from database
	* @param integer $booking_products_pricesId 
	* @return object $booking_products_prices
	*/
	function Get($booking_products_pricesId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `booking_products_prices` where `booking_products_pricesid`='".intval($booking_products_pricesId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->booking_products_pricesId = $row['booking_products_pricesid'];
			$this->booking_products_ratesid = $this->Unescape($row['booking_products_ratesid']);
			$this->customer_type = $this->Unescape($row['customer_type']);
			$this->duration_discount_threshold = $this->Unescape($row['duration_discount_threshold']);
			$this->quantity_discount_threshold = $this->Unescape($row['quantity_discount_threshold']);
			$this->price = $this->Unescape($row['price']);
			$this->min_price_per_space = $this->Unescape($row['min_price_per_space']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $booking_products_pricesList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `booking_products_prices` ";
		$booking_products_pricesList = Array();
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
			$sortBy = "booking_products_pricesid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$booking_products_prices = new $thisObjectName();
			$booking_products_prices->booking_products_pricesId = $row['booking_products_pricesid'];
			$booking_products_prices->booking_products_ratesid = $this->Unescape($row['booking_products_ratesid']);
			$booking_products_prices->customer_type = $this->Unescape($row['customer_type']);
			$booking_products_prices->duration_discount_threshold = $this->Unescape($row['duration_discount_threshold']);
			$booking_products_prices->quantity_discount_threshold = $this->Unescape($row['quantity_discount_threshold']);
			$booking_products_prices->price = $this->Unescape($row['price']);
			$booking_products_prices->min_price_per_space = $this->Unescape($row['min_price_per_space']);
			$booking_products_pricesList[] = $booking_products_prices;
		}
		return $booking_products_pricesList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $booking_products_pricesId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->booking_products_pricesId!=''){
			$this->pog_query = "select `booking_products_pricesid` from `booking_products_prices` where `booking_products_pricesid`='".$this->booking_products_pricesId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `booking_products_prices` set 
			`booking_products_ratesid`='".$this->Escape($this->booking_products_ratesid)."', 
			`customer_type`='".$this->Escape($this->customer_type)."', 
			`duration_discount_threshold`='".$this->Escape($this->duration_discount_threshold)."', 
			`quantity_discount_threshold`='".$this->Escape($this->quantity_discount_threshold)."', 
			`price`='".$this->Escape($this->price)."', 
			`min_price_per_space`='".$this->Escape($this->min_price_per_space)."' where `booking_products_pricesid`='".$this->booking_products_pricesId."'";
		}
		else
		{
			$this->pog_query = "insert into `booking_products_prices` (`booking_products_ratesid`, `customer_type`, `duration_discount_threshold`, `quantity_discount_threshold`, `price`, `min_price_per_space` ) values (
			'".$this->Escape($this->booking_products_ratesid)."', 
			'".$this->Escape($this->customer_type)."', 
			'".$this->Escape($this->duration_discount_threshold)."', 
			'".$this->Escape($this->quantity_discount_threshold)."', 
			'".$this->Escape($this->price)."', 
			'".$this->Escape($this->min_price_per_space)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->booking_products_pricesId == "")
		{
			$this->booking_products_pricesId = $insertId;
		}
		return $this->booking_products_pricesId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $booking_products_pricesId
	*/
	function SaveNew()
	{
		$this->booking_products_pricesId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `booking_products_prices` where `booking_products_pricesid`='".$this->booking_products_pricesId."'";
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
			$pog_query = "delete from `booking_products_prices` where ";
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