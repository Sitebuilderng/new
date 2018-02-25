<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `buyer` (
	`buyerid` int(11) NOT NULL auto_increment,
	`first_name` VARCHAR(255) NOT NULL,
	`last_name` VARCHAR(255) NOT NULL,
	`address_city` VARCHAR(255) NOT NULL,
	`address_country` VARCHAR(255) NOT NULL,
	`address_state` VARCHAR(255) NOT NULL,
	`address_street` VARCHAR(255) NOT NULL,
	`address_zip` VARCHAR(255) NOT NULL,
	`payer_business_name` VARCHAR(255) NOT NULL,
	`payer_email` VARCHAR(255) NOT NULL,
	`payer_id` VARCHAR(255) NOT NULL,
	`paid` INT NOT NULL,
	`status` VARCHAR(255) NOT NULL,
	`txn_id` VARCHAR(255) NOT NULL,
	`dispatched` INT NOT NULL,
	`mc_gross` DECIMAL (16,2) NOT NULL,
	`timestamp` INT NOT NULL,
	`alt_billing_address1` VARCHAR(255) NOT NULL,
	`alt_billing_address2` VARCHAR(255) NOT NULL,
	`alt_billing_city` VARCHAR(255) NOT NULL,
	`alt_billing_state` VARCHAR(255) NOT NULL,
	`alt_billing_country` VARCHAR(255) NOT NULL,
	`alt_billing_zip` VARCHAR(255) NOT NULL,
	`alt_billing_first_name` VARCHAR(255) NOT NULL,
	`alt_billing_last_name` VARCHAR(255) NOT NULL,
	`address_status` VARCHAR(255) NOT NULL,
	`checkout_form_result` MEDIUMTEXT NOT NULL,
	`phone` VARCHAR(255) NOT NULL,
	`mobile` VARCHAR(255) NOT NULL,
	`key` VARCHAR(255) NOT NULL,
	`deleted` TINYINT NOT NULL, PRIMARY KEY  (`buyerid`)) ENGINE=MyISAM;
*/

/**
* <b>buyer</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=buyer&attributeList=array+%28%0A++0+%3D%3E+%27first_name%27%2C%0A++1+%3D%3E+%27last_name%27%2C%0A++2+%3D%3E+%27address_city%27%2C%0A++3+%3D%3E+%27address_country%27%2C%0A++4+%3D%3E+%27address_state%27%2C%0A++5+%3D%3E+%27address_street%27%2C%0A++6+%3D%3E+%27address_zip%27%2C%0A++7+%3D%3E+%27payer_business_name%27%2C%0A++8+%3D%3E+%27payer_email%27%2C%0A++9+%3D%3E+%27payer_id%27%2C%0A++10+%3D%3E+%27paid%27%2C%0A++11+%3D%3E+%27status%27%2C%0A++12+%3D%3E+%27txn_id%27%2C%0A++13+%3D%3E+%27dispatched%27%2C%0A++14+%3D%3E+%27mc_gross%27%2C%0A++15+%3D%3E+%27timestamp%27%2C%0A++16+%3D%3E+%27alt_billing_address1%27%2C%0A++17+%3D%3E+%27alt_billing_address2%27%2C%0A++18+%3D%3E+%27alt_billing_city%27%2C%0A++19+%3D%3E+%27alt_billing_state%27%2C%0A++20+%3D%3E+%27alt_billing_country%27%2C%0A++21+%3D%3E+%27alt_billing_zip%27%2C%0A++22+%3D%3E+%27alt_billing_first_name%27%2C%0A++23+%3D%3E+%27alt_billing_last_name%27%2C%0A++24+%3D%3E+%27address_status%27%2C%0A++25+%3D%3E+%27checkout_form_result%27%2C%0A++26+%3D%3E+%27phone%27%2C%0A++27+%3D%3E+%27mobile%27%2C%0A++28+%3D%3E+%27key%27%2C%0A++29+%3D%3E+%27deleted%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B5%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B6%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B7%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B8%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B9%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B10%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B11%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B12%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B13%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B14%2B%253D%253E%2B%2527DECIMAL%2B%252816%252C2%2529%2527%252C%250A%2B%2B15%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B16%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B17%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B18%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B19%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B20%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B21%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B22%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B23%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B24%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B25%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B26%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B27%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B28%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B29%2B%253D%253E%2B%2527TINYINT%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A++2+%3D%3E+%27%27%2C%0A++3+%3D%3E+%27%27%2C%0A++4+%3D%3E+%27%27%2C%0A++5+%3D%3E+%27%27%2C%0A++6+%3D%3E+%27%27%2C%0A++7+%3D%3E+%27%27%2C%0A++8+%3D%3E+%27%27%2C%0A++9+%3D%3E+%27%27%2C%0A++10+%3D%3E+%27%27%2C%0A++11+%3D%3E+%27%27%2C%0A++12+%3D%3E+%27%27%2C%0A++13+%3D%3E+%27%27%2C%0A++14+%3D%3E+%27%27%2C%0A++15+%3D%3E+%27%27%2C%0A++16+%3D%3E+%27%27%2C%0A++17+%3D%3E+%27%27%2C%0A++18+%3D%3E+%27%27%2C%0A++19+%3D%3E+%27%27%2C%0A++20+%3D%3E+%27%27%2C%0A++21+%3D%3E+%27%27%2C%0A++22+%3D%3E+%27%27%2C%0A++23+%3D%3E+%27%27%2C%0A++24+%3D%3E+%27%27%2C%0A++25+%3D%3E+%27%27%2C%0A++26+%3D%3E+%27%27%2C%0A++27+%3D%3E+%27%27%2C%0A++28+%3D%3E+%27%27%2C%0A++29+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class buyer extends POG_Base
{
	public $buyerId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $first_name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $last_name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $address_city;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $address_country;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $address_state;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $address_street;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $address_zip;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $payer_business_name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $payer_email;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $payer_id;
	
	/**
	 * @var INT
	 */
	public $paid;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $status;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $txn_id;
	
	/**
	 * @var INT
	 */
	public $dispatched;
	
	/**
	 * @var DECIMAL (16,2)
	 */
	public $mc_gross;
	
	/**
	 * @var INT
	 */
	public $timestamp;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $alt_billing_address1;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $alt_billing_address2;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $alt_billing_city;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $alt_billing_state;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $alt_billing_country;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $alt_billing_zip;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $alt_billing_first_name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $alt_billing_last_name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $address_status;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $checkout_form_result;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $phone;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $mobile;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $key;
	
	/**
	 * @var TINYINT
	 */
	public $deleted;
	
	public $pog_attribute_type = array(
		"buyerId" => array('db_attributes' => array("NUMERIC", "INT")),
		"first_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"last_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"address_city" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"address_country" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"address_state" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"address_street" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"address_zip" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"payer_business_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"payer_email" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"payer_id" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"paid" => array('db_attributes' => array("NUMERIC", "INT")),
		"status" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"txn_id" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"dispatched" => array('db_attributes' => array("NUMERIC", "INT")),
		"mc_gross" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"timestamp" => array('db_attributes' => array("NUMERIC", "INT")),
		"alt_billing_address1" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"alt_billing_address2" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"alt_billing_city" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"alt_billing_state" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"alt_billing_country" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"alt_billing_zip" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"alt_billing_first_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"alt_billing_last_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"address_status" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"checkout_form_result" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"phone" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"mobile" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"key" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
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
	
	function buyer($first_name='', $last_name='', $address_city='', $address_country='', $address_state='', $address_street='', $address_zip='', $payer_business_name='', $payer_email='', $payer_id='', $paid='', $status='', $txn_id='', $dispatched='', $mc_gross='', $timestamp='', $alt_billing_address1='', $alt_billing_address2='', $alt_billing_city='', $alt_billing_state='', $alt_billing_country='', $alt_billing_zip='', $alt_billing_first_name='', $alt_billing_last_name='', $address_status='', $checkout_form_result='', $phone='', $mobile='', $key='', $deleted='')
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->address_city = $address_city;
		$this->address_country = $address_country;
		$this->address_state = $address_state;
		$this->address_street = $address_street;
		$this->address_zip = $address_zip;
		$this->payer_business_name = $payer_business_name;
		$this->payer_email = $payer_email;
		$this->payer_id = $payer_id;
		$this->paid = $paid;
		$this->status = $status;
		$this->txn_id = $txn_id;
		$this->dispatched = $dispatched;
		$this->mc_gross = $mc_gross;
		$this->timestamp = $timestamp;
		$this->alt_billing_address1 = $alt_billing_address1;
		$this->alt_billing_address2 = $alt_billing_address2;
		$this->alt_billing_city = $alt_billing_city;
		$this->alt_billing_state = $alt_billing_state;
		$this->alt_billing_country = $alt_billing_country;
		$this->alt_billing_zip = $alt_billing_zip;
		$this->alt_billing_first_name = $alt_billing_first_name;
		$this->alt_billing_last_name = $alt_billing_last_name;
		$this->address_status = $address_status;
		$this->checkout_form_result = $checkout_form_result;
		$this->phone = $phone;
		$this->mobile = $mobile;
		$this->key = $key;
		$this->deleted = $deleted;
	}
	
	
	/**
	* Gets object from database
	* @param integer $buyerId 
	* @return object $buyer
	*/
	function Get($buyerId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `buyer` where `buyerid`='".intval($buyerId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->buyerId = $row['buyerid'];
			$this->first_name = $this->Unescape($row['first_name']);
			$this->last_name = $this->Unescape($row['last_name']);
			$this->address_city = $this->Unescape($row['address_city']);
			$this->address_country = $this->Unescape($row['address_country']);
			$this->address_state = $this->Unescape($row['address_state']);
			$this->address_street = $this->Unescape($row['address_street']);
			$this->address_zip = $this->Unescape($row['address_zip']);
			$this->payer_business_name = $this->Unescape($row['payer_business_name']);
			$this->payer_email = $this->Unescape($row['payer_email']);
			$this->payer_id = $this->Unescape($row['payer_id']);
			$this->paid = $this->Unescape($row['paid']);
			$this->status = $this->Unescape($row['status']);
			$this->txn_id = $this->Unescape($row['txn_id']);
			$this->dispatched = $this->Unescape($row['dispatched']);
			$this->mc_gross = $this->Unescape($row['mc_gross']);
			$this->timestamp = $this->Unescape($row['timestamp']);
			$this->alt_billing_address1 = $this->Unescape($row['alt_billing_address1']);
			$this->alt_billing_address2 = $this->Unescape($row['alt_billing_address2']);
			$this->alt_billing_city = $this->Unescape($row['alt_billing_city']);
			$this->alt_billing_state = $this->Unescape($row['alt_billing_state']);
			$this->alt_billing_country = $this->Unescape($row['alt_billing_country']);
			$this->alt_billing_zip = $this->Unescape($row['alt_billing_zip']);
			$this->alt_billing_first_name = $this->Unescape($row['alt_billing_first_name']);
			$this->alt_billing_last_name = $this->Unescape($row['alt_billing_last_name']);
			$this->address_status = $this->Unescape($row['address_status']);
			$this->checkout_form_result = $this->Unescape($row['checkout_form_result']);
			$this->phone = $this->Unescape($row['phone']);
			$this->mobile = $this->Unescape($row['mobile']);
			$this->key = $this->Unescape($row['key']);
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
	* @return array $buyerList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `buyer` ";
		$buyerList = Array();
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
			$sortBy = "buyerid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$buyer = new $thisObjectName();
			$buyer->buyerId = $row['buyerid'];
			$buyer->first_name = $this->Unescape($row['first_name']);
			$buyer->last_name = $this->Unescape($row['last_name']);
			$buyer->address_city = $this->Unescape($row['address_city']);
			$buyer->address_country = $this->Unescape($row['address_country']);
			$buyer->address_state = $this->Unescape($row['address_state']);
			$buyer->address_street = $this->Unescape($row['address_street']);
			$buyer->address_zip = $this->Unescape($row['address_zip']);
			$buyer->payer_business_name = $this->Unescape($row['payer_business_name']);
			$buyer->payer_email = $this->Unescape($row['payer_email']);
			$buyer->payer_id = $this->Unescape($row['payer_id']);
			$buyer->paid = $this->Unescape($row['paid']);
			$buyer->status = $this->Unescape($row['status']);
			$buyer->txn_id = $this->Unescape($row['txn_id']);
			$buyer->dispatched = $this->Unescape($row['dispatched']);
			$buyer->mc_gross = $this->Unescape($row['mc_gross']);
			$buyer->timestamp = $this->Unescape($row['timestamp']);
			$buyer->alt_billing_address1 = $this->Unescape($row['alt_billing_address1']);
			$buyer->alt_billing_address2 = $this->Unescape($row['alt_billing_address2']);
			$buyer->alt_billing_city = $this->Unescape($row['alt_billing_city']);
			$buyer->alt_billing_state = $this->Unescape($row['alt_billing_state']);
			$buyer->alt_billing_country = $this->Unescape($row['alt_billing_country']);
			$buyer->alt_billing_zip = $this->Unescape($row['alt_billing_zip']);
			$buyer->alt_billing_first_name = $this->Unescape($row['alt_billing_first_name']);
			$buyer->alt_billing_last_name = $this->Unescape($row['alt_billing_last_name']);
			$buyer->address_status = $this->Unescape($row['address_status']);
			$buyer->checkout_form_result = $this->Unescape($row['checkout_form_result']);
			$buyer->phone = $this->Unescape($row['phone']);
			$buyer->mobile = $this->Unescape($row['mobile']);
			$buyer->key = $this->Unescape($row['key']);
			$buyer->deleted = $this->Unescape($row['deleted']);
			$buyerList[] = $buyer;
		}
		return $buyerList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $buyerId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->buyerId!=''){
			$this->pog_query = "select `buyerid` from `buyer` where `buyerid`='".$this->buyerId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `buyer` set 
			`first_name`='".$this->Escape($this->first_name)."', 
			`last_name`='".$this->Escape($this->last_name)."', 
			`address_city`='".$this->Escape($this->address_city)."', 
			`address_country`='".$this->Escape($this->address_country)."', 
			`address_state`='".$this->Escape($this->address_state)."', 
			`address_street`='".$this->Escape($this->address_street)."', 
			`address_zip`='".$this->Escape($this->address_zip)."', 
			`payer_business_name`='".$this->Escape($this->payer_business_name)."', 
			`payer_email`='".$this->Escape($this->payer_email)."', 
			`payer_id`='".$this->Escape($this->payer_id)."', 
			`paid`='".$this->Escape($this->paid)."', 
			`status`='".$this->Escape($this->status)."', 
			`txn_id`='".$this->Escape($this->txn_id)."', 
			`dispatched`='".$this->Escape($this->dispatched)."', 
			`mc_gross`='".$this->Escape($this->mc_gross)."', 
			`timestamp`='".$this->Escape($this->timestamp)."', 
			`alt_billing_address1`='".$this->Escape($this->alt_billing_address1)."', 
			`alt_billing_address2`='".$this->Escape($this->alt_billing_address2)."', 
			`alt_billing_city`='".$this->Escape($this->alt_billing_city)."', 
			`alt_billing_state`='".$this->Escape($this->alt_billing_state)."', 
			`alt_billing_country`='".$this->Escape($this->alt_billing_country)."', 
			`alt_billing_zip`='".$this->Escape($this->alt_billing_zip)."', 
			`alt_billing_first_name`='".$this->Escape($this->alt_billing_first_name)."', 
			`alt_billing_last_name`='".$this->Escape($this->alt_billing_last_name)."', 
			`address_status`='".$this->Escape($this->address_status)."', 
			`checkout_form_result`='".$this->Escape($this->checkout_form_result)."', 
			`phone`='".$this->Escape($this->phone)."', 
			`mobile`='".$this->Escape($this->mobile)."', 
			`key`='".$this->Escape($this->key)."', 
			`deleted`='".$this->Escape($this->deleted)."' where `buyerid`='".$this->buyerId."'";
		}
		else
		{
			$this->pog_query = "insert into `buyer` (`first_name`, `last_name`, `address_city`, `address_country`, `address_state`, `address_street`, `address_zip`, `payer_business_name`, `payer_email`, `payer_id`, `paid`, `status`, `txn_id`, `dispatched`, `mc_gross`, `timestamp`, `alt_billing_address1`, `alt_billing_address2`, `alt_billing_city`, `alt_billing_state`, `alt_billing_country`, `alt_billing_zip`, `alt_billing_first_name`, `alt_billing_last_name`, `address_status`, `checkout_form_result`, `phone`, `mobile`, `key`, `deleted` ) values (
			'".$this->Escape($this->first_name)."', 
			'".$this->Escape($this->last_name)."', 
			'".$this->Escape($this->address_city)."', 
			'".$this->Escape($this->address_country)."', 
			'".$this->Escape($this->address_state)."', 
			'".$this->Escape($this->address_street)."', 
			'".$this->Escape($this->address_zip)."', 
			'".$this->Escape($this->payer_business_name)."', 
			'".$this->Escape($this->payer_email)."', 
			'".$this->Escape($this->payer_id)."', 
			'".$this->Escape($this->paid)."', 
			'".$this->Escape($this->status)."', 
			'".$this->Escape($this->txn_id)."', 
			'".$this->Escape($this->dispatched)."', 
			'".$this->Escape($this->mc_gross)."', 
			'".$this->Escape($this->timestamp)."', 
			'".$this->Escape($this->alt_billing_address1)."', 
			'".$this->Escape($this->alt_billing_address2)."', 
			'".$this->Escape($this->alt_billing_city)."', 
			'".$this->Escape($this->alt_billing_state)."', 
			'".$this->Escape($this->alt_billing_country)."', 
			'".$this->Escape($this->alt_billing_zip)."', 
			'".$this->Escape($this->alt_billing_first_name)."', 
			'".$this->Escape($this->alt_billing_last_name)."', 
			'".$this->Escape($this->address_status)."', 
			'".$this->Escape($this->checkout_form_result)."', 
			'".$this->Escape($this->phone)."', 
			'".$this->Escape($this->mobile)."', 
			'".$this->Escape($this->key)."', 
			'".$this->Escape($this->deleted)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->buyerId == "")
		{
			$this->buyerId = $insertId;
		}
		return $this->buyerId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $buyerId
	*/
	function SaveNew()
	{
		$this->buyerId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `buyer` where `buyerid`='".$this->buyerId."'";
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
			$pog_query = "delete from `buyer` where ";
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