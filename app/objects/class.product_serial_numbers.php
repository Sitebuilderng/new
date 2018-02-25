<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `product_serial_numbers` (
	`product_serial_numbersid` int(11) NOT NULL auto_increment,
	`belongs_to_product` INT NOT NULL,
	`code` MEDIUMTEXT NOT NULL,
	`used` INT NOT NULL, PRIMARY KEY  (`product_serial_numbersid`)) ENGINE=MyISAM;
*/

/**
* <b>product_serial_numbers</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=product_serial_numbers&attributeList=array+%28%0A++0+%3D%3E+%27belongs_to_product%27%2C%0A++1+%3D%3E+%27code%27%2C%0A++2+%3D%3E+%27used%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527INT%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A++2+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class product_serial_numbers extends POG_Base
{
	public $product_serial_numbersId = '';

	/**
	 * @var INT
	 */
	public $belongs_to_product;

	/**
	 * @var MEDIUMTEXT
	 */
	public $code;

	/**
	 * @var INT
	 */
	public $used;

	public $pog_attribute_type = array(
		"product_serial_numbersId" => array('db_attributes' => array("NUMERIC", "INT")),
		"belongs_to_product" => array('db_attributes' => array("NUMERIC", "INT")),
		"code" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"used" => array('db_attributes' => array("NUMERIC", "INT")),
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

	function product_serial_numbers($belongs_to_product='', $code='', $used='')
	{
		$this->belongs_to_product = $belongs_to_product;
		$this->code = $code;
		$this->used = $used;
	}


	/**
	* Gets object from database
	* @param integer $product_serial_numbersId
	* @return object $product_serial_numbers
	*/
	function Get($product_serial_numbersId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `product_serial_numbers` where `product_serial_numbersid`='".intval($product_serial_numbersId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->product_serial_numbersId = $row['product_serial_numbersid'];
			$this->belongs_to_product = $this->Unescape($row['belongs_to_product']);
			$this->code = $this->Unescape($row['code']);
			$this->used = $this->Unescape($row['used']);
		}
		return $this;
	}


	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...}
	* @param string $sortBy
	* @param boolean $ascending
	* @param int limit
	* @return array $product_serial_numbersList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `product_serial_numbers` ";
		$product_serial_numbersList = Array();
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
			$sortBy = "product_serial_numbersid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$product_serial_numbers = new $thisObjectName();
			$product_serial_numbers->product_serial_numbersId = $row['product_serial_numbersid'];
			$product_serial_numbers->belongs_to_product = $this->Unescape($row['belongs_to_product']);
			$product_serial_numbers->code = $this->Unescape($row['code']);
			$product_serial_numbers->used = $this->Unescape($row['used']);
			$product_serial_numbersList[] = $product_serial_numbers;
		}
		return $product_serial_numbersList;
	}


	/**
	* Saves the object to the database
	* @return integer $product_serial_numbersId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->product_serial_numbersId!=''){
			$this->pog_query = "select `product_serial_numbersid` from `product_serial_numbers` where `product_serial_numbersid`='".$this->product_serial_numbersId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `product_serial_numbers` set
			`belongs_to_product`='".$this->Escape($this->belongs_to_product)."',
			`code`='".$this->Escape($this->code)."',
			`used`='".$this->Escape($this->used)."' where `product_serial_numbersid`='".$this->product_serial_numbersId."'";
		}
		else
		{
			$this->pog_query = "insert into `product_serial_numbers` (`belongs_to_product`, `code`, `used` ) values (
			'".$this->Escape($this->belongs_to_product)."',
			'".$this->Escape($this->code)."',
			'".$this->Escape($this->used)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->product_serial_numbersId == "")
		{
			$this->product_serial_numbersId = $insertId;
		}
		return $this->product_serial_numbersId;
	}


	/**
	* Clones the object and saves it to the database
	* @return integer $product_serial_numbersId
	*/
	function SaveNew()
	{
		$this->product_serial_numbersId = '';
		return $this->Save();
	}


	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `product_serial_numbers` where `product_serial_numbersid`='".$this->product_serial_numbersId."'";
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
			$pog_query = "delete from `product_serial_numbers` where ";
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
