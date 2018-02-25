<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `booking_products` (
	`booking_productsid` int(11) NOT NULL auto_increment,
	`name` VARCHAR(255) NOT NULL,
	`type` VARCHAR(255) NOT NULL,
	`place_name` TINYINT NOT NULL,
	`number_places_available` INT NOT NULL,
	`number_spaces_available` INT NOT NULL,
	`allow_deposit_checkout` TINYINT NOT NULL,
	`deposit_percent` DECIMAL NOT NULL,
	`use_minimum_charge_per_space` TINYINT NOT NULL,
	`different_price_children` TINYINT NOT NULL,
	`different_price_special` TINYINT NOT NULL,
	`adult_required` TINYINT NOT NULL,
	`require_form_per_person` INT NOT NULL,
	`child_name` VARCHAR(255) NOT NULL,
	`adult_name` VARCHAR(255) NOT NULL,
	`concession_name` VARCHAR(255) NOT NULL,
	`child_name_plural` VARCHAR(255) NOT NULL,
	`adult_name_plural` VARCHAR(255) NOT NULL,
	`concession_name_plural` VARCHAR(255) NOT NULL, PRIMARY KEY  (`booking_productsid`)) ENGINE=MyISAM;
*/

/**
* <b>booking_products</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=booking_products&attributeList=array+%28%0A++0+%3D%3E+%27name%27%2C%0A++1+%3D%3E+%27type%27%2C%0A++2+%3D%3E+%27place_name%27%2C%0A++3+%3D%3E+%27number_places_available%27%2C%0A++4+%3D%3E+%27number_spaces_available%27%2C%0A++5+%3D%3E+%27allow_deposit_checkout%27%2C%0A++6+%3D%3E+%27deposit_percent%27%2C%0A++7+%3D%3E+%27use_minimum_charge_per_space%27%2C%0A++8+%3D%3E+%27different_price_children%27%2C%0A++9+%3D%3E+%27different_price_special%27%2C%0A++10+%3D%3E+%27adult_required%27%2C%0A++11+%3D%3E+%27require_form_per_person%27%2C%0A++12+%3D%3E+%27child_name%27%2C%0A++13+%3D%3E+%27adult_name%27%2C%0A++14+%3D%3E+%27concession_name%27%2C%0A++15+%3D%3E+%27child_name_plural%27%2C%0A++16+%3D%3E+%27adult_name_plural%27%2C%0A++17+%3D%3E+%27concession_name_plural%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++1+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++2+%3D%3E+%27TINYINT%27%2C%0A++3+%3D%3E+%27INT%27%2C%0A++4+%3D%3E+%27INT%27%2C%0A++5+%3D%3E+%27TINYINT%27%2C%0A++6+%3D%3E+%27DECIMAL%27%2C%0A++7+%3D%3E+%27TINYINT%27%2C%0A++8+%3D%3E+%27TINYINT%27%2C%0A++9+%3D%3E+%27TINYINT%27%2C%0A++10+%3D%3E+%27TINYINT%27%2C%0A++11+%3D%3E+%27INT%27%2C%0A++12+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++13+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++14+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++15+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++16+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++17+%3D%3E+%27VARCHAR%28255%29%27%2C%0A%29
*/
include_once('class.pog_base.php');
class booking_products extends POG_Base
{
	public $booking_productsId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $type;
	
	/**
	 * @var TINYINT
	 */
	public $place_name;
	
	/**
	 * @var INT
	 */
	public $number_places_available;
	
	/**
	 * @var INT
	 */
	public $number_spaces_available;
	
	/**
	 * @var TINYINT
	 */
	public $allow_deposit_checkout;
	
	/**
	 * @var DECIMAL
	 */
	public $deposit_percent;
	
	/**
	 * @var TINYINT
	 */
	public $use_minimum_charge_per_space;
	
	/**
	 * @var TINYINT
	 */
	public $different_price_children;
	
	/**
	 * @var TINYINT
	 */
	public $different_price_special;
	
	/**
	 * @var TINYINT
	 */
	public $adult_required;
	
	/**
	 * @var INT
	 */
	public $require_form_per_person;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $child_name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $adult_name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $concession_name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $child_name_plural;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $adult_name_plural;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $concession_name_plural;
	
	public $pog_attribute_type = array(
		"booking_productsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"type" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"place_name" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"number_places_available" => array('db_attributes' => array("NUMERIC", "INT")),
		"number_spaces_available" => array('db_attributes' => array("NUMERIC", "INT")),
		"allow_deposit_checkout" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"deposit_percent" => array('db_attributes' => array("NUMERIC", "DECIMAL")),
		"use_minimum_charge_per_space" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"different_price_children" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"different_price_special" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"adult_required" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"require_form_per_person" => array('db_attributes' => array("NUMERIC", "INT")),
		"child_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"adult_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"concession_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"child_name_plural" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"adult_name_plural" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"concession_name_plural" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
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
	
	function booking_products($name='', $type='', $place_name='', $number_places_available='', $number_spaces_available='', $allow_deposit_checkout='', $deposit_percent='', $use_minimum_charge_per_space='', $different_price_children='', $different_price_special='', $adult_required='', $require_form_per_person='', $child_name='', $adult_name='', $concession_name='', $child_name_plural='', $adult_name_plural='', $concession_name_plural='')
	{
		$this->name = $name;
		$this->type = $type;
		$this->place_name = $place_name;
		$this->number_places_available = $number_places_available;
		$this->number_spaces_available = $number_spaces_available;
		$this->allow_deposit_checkout = $allow_deposit_checkout;
		$this->deposit_percent = $deposit_percent;
		$this->use_minimum_charge_per_space = $use_minimum_charge_per_space;
		$this->different_price_children = $different_price_children;
		$this->different_price_special = $different_price_special;
		$this->adult_required = $adult_required;
		$this->require_form_per_person = $require_form_per_person;
		$this->child_name = $child_name;
		$this->adult_name = $adult_name;
		$this->concession_name = $concession_name;
		$this->child_name_plural = $child_name_plural;
		$this->adult_name_plural = $adult_name_plural;
		$this->concession_name_plural = $concession_name_plural;
	}
	
	
	/**
	* Gets object from database
	* @param integer $booking_productsId 
	* @return object $booking_products
	*/
	function Get($booking_productsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `booking_products` where `booking_productsid`='".intval($booking_productsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->booking_productsId = $row['booking_productsid'];
			$this->name = $this->Unescape($row['name']);
			$this->type = $this->Unescape($row['type']);
			$this->place_name = $this->Unescape($row['place_name']);
			$this->number_places_available = $this->Unescape($row['number_places_available']);
			$this->number_spaces_available = $this->Unescape($row['number_spaces_available']);
			$this->allow_deposit_checkout = $this->Unescape($row['allow_deposit_checkout']);
			$this->deposit_percent = $this->Unescape($row['deposit_percent']);
			$this->use_minimum_charge_per_space = $this->Unescape($row['use_minimum_charge_per_space']);
			$this->different_price_children = $this->Unescape($row['different_price_children']);
			$this->different_price_special = $this->Unescape($row['different_price_special']);
			$this->adult_required = $this->Unescape($row['adult_required']);
			$this->require_form_per_person = $this->Unescape($row['require_form_per_person']);
			$this->child_name = $this->Unescape($row['child_name']);
			$this->adult_name = $this->Unescape($row['adult_name']);
			$this->concession_name = $this->Unescape($row['concession_name']);
			$this->child_name_plural = $this->Unescape($row['child_name_plural']);
			$this->adult_name_plural = $this->Unescape($row['adult_name_plural']);
			$this->concession_name_plural = $this->Unescape($row['concession_name_plural']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $booking_productsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `booking_products` ";
		$booking_productsList = Array();
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
			$sortBy = "booking_productsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$booking_products = new $thisObjectName();
			$booking_products->booking_productsId = $row['booking_productsid'];
			$booking_products->name = $this->Unescape($row['name']);
			$booking_products->type = $this->Unescape($row['type']);
			$booking_products->place_name = $this->Unescape($row['place_name']);
			$booking_products->number_places_available = $this->Unescape($row['number_places_available']);
			$booking_products->number_spaces_available = $this->Unescape($row['number_spaces_available']);
			$booking_products->allow_deposit_checkout = $this->Unescape($row['allow_deposit_checkout']);
			$booking_products->deposit_percent = $this->Unescape($row['deposit_percent']);
			$booking_products->use_minimum_charge_per_space = $this->Unescape($row['use_minimum_charge_per_space']);
			$booking_products->different_price_children = $this->Unescape($row['different_price_children']);
			$booking_products->different_price_special = $this->Unescape($row['different_price_special']);
			$booking_products->adult_required = $this->Unescape($row['adult_required']);
			$booking_products->require_form_per_person = $this->Unescape($row['require_form_per_person']);
			$booking_products->child_name = $this->Unescape($row['child_name']);
			$booking_products->adult_name = $this->Unescape($row['adult_name']);
			$booking_products->concession_name = $this->Unescape($row['concession_name']);
			$booking_products->child_name_plural = $this->Unescape($row['child_name_plural']);
			$booking_products->adult_name_plural = $this->Unescape($row['adult_name_plural']);
			$booking_products->concession_name_plural = $this->Unescape($row['concession_name_plural']);
			$booking_productsList[] = $booking_products;
		}
		return $booking_productsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $booking_productsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->booking_productsId!=''){
			$this->pog_query = "select `booking_productsid` from `booking_products` where `booking_productsid`='".$this->booking_productsId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `booking_products` set 
			`name`='".$this->Escape($this->name)."', 
			`type`='".$this->Escape($this->type)."', 
			`place_name`='".$this->Escape($this->place_name)."', 
			`number_places_available`='".$this->Escape($this->number_places_available)."', 
			`number_spaces_available`='".$this->Escape($this->number_spaces_available)."', 
			`allow_deposit_checkout`='".$this->Escape($this->allow_deposit_checkout)."', 
			`deposit_percent`='".$this->Escape($this->deposit_percent)."', 
			`use_minimum_charge_per_space`='".$this->Escape($this->use_minimum_charge_per_space)."', 
			`different_price_children`='".$this->Escape($this->different_price_children)."', 
			`different_price_special`='".$this->Escape($this->different_price_special)."', 
			`adult_required`='".$this->Escape($this->adult_required)."', 
			`require_form_per_person`='".$this->Escape($this->require_form_per_person)."', 
			`child_name`='".$this->Escape($this->child_name)."', 
			`adult_name`='".$this->Escape($this->adult_name)."', 
			`concession_name`='".$this->Escape($this->concession_name)."', 
			`child_name_plural`='".$this->Escape($this->child_name_plural)."', 
			`adult_name_plural`='".$this->Escape($this->adult_name_plural)."', 
			`concession_name_plural`='".$this->Escape($this->concession_name_plural)."' where `booking_productsid`='".$this->booking_productsId."'";
		}
		else
		{
			$this->pog_query = "insert into `booking_products` (`name`, `type`, `place_name`, `number_places_available`, `number_spaces_available`, `allow_deposit_checkout`, `deposit_percent`, `use_minimum_charge_per_space`, `different_price_children`, `different_price_special`, `adult_required`, `require_form_per_person`, `child_name`, `adult_name`, `concession_name`, `child_name_plural`, `adult_name_plural`, `concession_name_plural` ) values (
			'".$this->Escape($this->name)."', 
			'".$this->Escape($this->type)."', 
			'".$this->Escape($this->place_name)."', 
			'".$this->Escape($this->number_places_available)."', 
			'".$this->Escape($this->number_spaces_available)."', 
			'".$this->Escape($this->allow_deposit_checkout)."', 
			'".$this->Escape($this->deposit_percent)."', 
			'".$this->Escape($this->use_minimum_charge_per_space)."', 
			'".$this->Escape($this->different_price_children)."', 
			'".$this->Escape($this->different_price_special)."', 
			'".$this->Escape($this->adult_required)."', 
			'".$this->Escape($this->require_form_per_person)."', 
			'".$this->Escape($this->child_name)."', 
			'".$this->Escape($this->adult_name)."', 
			'".$this->Escape($this->concession_name)."', 
			'".$this->Escape($this->child_name_plural)."', 
			'".$this->Escape($this->adult_name_plural)."', 
			'".$this->Escape($this->concession_name_plural)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->booking_productsId == "")
		{
			$this->booking_productsId = $insertId;
		}
		return $this->booking_productsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $booking_productsId
	*/
	function SaveNew()
	{
		$this->booking_productsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `booking_products` where `booking_productsid`='".$this->booking_productsId."'";
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
			$pog_query = "delete from `booking_products` where ";
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