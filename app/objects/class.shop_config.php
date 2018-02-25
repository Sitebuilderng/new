<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `shop_config` (
	`shop_configid` int(11) NOT NULL auto_increment,
	`paypal_email` VARCHAR(255) NOT NULL,
	`no_shipping` TINYINT NOT NULL,
	`return_success` VARCHAR(255) NOT NULL,
	`return_fail` VARCHAR(255) NOT NULL,
	`no_note` VARCHAR(255) NOT NULL,
	`order_received_email` TEXT NOT NULL,
	`order_sent_email` TEXT NOT NULL,
	`currency` VARCHAR(255) NOT NULL,
	`smtp_server` VARCHAR(255) NOT NULL,
	`from_email` VARCHAR(255) NOT NULL,
	`from_name` VARCHAR(255) NOT NULL,
	`username` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	`order_received_email_subject` VARCHAR(255) NOT NULL,
	`order_sent_email_subject` VARCHAR(255) NOT NULL,
	`enable_sales_tax` TINYINT NOT NULL,
	`add_tax` TINYINT NOT NULL,
	`tax_percent` TINYINT NOT NULL,
	`tax_name` VARCHAR(255) NOT NULL,
	`invoice_page_id` INT NOT NULL,
	`merchant_id` VARCHAR(255) NOT NULL,
	`merchant_3` MEDIUMTEXT NOT NULL,
	`gateway` VARCHAR(255) NOT NULL,
	`merchant2_1` MEDIUMTEXT NOT NULL,
	`merchant2_2` MEDIUMTEXT NOT NULL,
	`merchant2_3` MEDIUMTEXT NOT NULL,
	`merchant3_1` MEDIUMTEXT NOT NULL,
	`merchant3_2` MEDIUMTEXT NOT NULL,
	`merchant3_3` MEDIUMTEXT NOT NULL,
	`merchant1_enabled` INT NOT NULL,
	`merchant2_enabled` INT NOT NULL,
	`merchant3_enabled` INT NOT NULL,
	`merchant1_1` MEDIUMTEXT NOT NULL,
	`merchant1_2` MEDIUMTEXT NOT NULL,
	`merchant1_3` MEDIUMTEXT NOT NULL,
	`indicate_net` INT NOT NULL,
	`show_tax_in_mini` INT NOT NULL,
	`tax_on_shipping` INT NOT NULL, PRIMARY KEY  (`shop_configid`)) ENGINE=MyISAM;
*/

/**
* <b>shop_config</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=shop_config&attributeList=array+%28%0A++0+%3D%3E+%27paypal_email%27%2C%0A++1+%3D%3E+%27no_shipping%27%2C%0A++2+%3D%3E+%27return_success%27%2C%0A++3+%3D%3E+%27return_fail%27%2C%0A++4+%3D%3E+%27no_note%27%2C%0A++5+%3D%3E+%27order_received_email%27%2C%0A++6+%3D%3E+%27order_sent_email%27%2C%0A++7+%3D%3E+%27currency%27%2C%0A++8+%3D%3E+%27smtp_server%27%2C%0A++9+%3D%3E+%27from_email%27%2C%0A++10+%3D%3E+%27from_name%27%2C%0A++11+%3D%3E+%27username%27%2C%0A++12+%3D%3E+%27password%27%2C%0A++13+%3D%3E+%27order_received_email_subject%27%2C%0A++14+%3D%3E+%27order_sent_email_subject%27%2C%0A++15+%3D%3E+%27enable_sales_tax%27%2C%0A++16+%3D%3E+%27add_tax%27%2C%0A++17+%3D%3E+%27tax_percent%27%2C%0A++18+%3D%3E+%27tax_name%27%2C%0A++19+%3D%3E+%27invoice_page_id%27%2C%0A++20+%3D%3E+%27merchant_id%27%2C%0A++21+%3D%3E+%27merchant_3%27%2C%0A++22+%3D%3E+%27gateway%27%2C%0A++23+%3D%3E+%27merchant2_1%27%2C%0A++24+%3D%3E+%27merchant2_2%27%2C%0A++25+%3D%3E+%27merchant2_3%27%2C%0A++26+%3D%3E+%27merchant3_1%27%2C%0A++27+%3D%3E+%27merchant3_2%27%2C%0A++28+%3D%3E+%27merchant3_3%27%2C%0A++29+%3D%3E+%27merchant1_enabled%27%2C%0A++30+%3D%3E+%27merchant2_enabled%27%2C%0A++31+%3D%3E+%27merchant3_enabled%27%2C%0A++32+%3D%3E+%27merchant1_1%27%2C%0A++33+%3D%3E+%27merchant1_2%27%2C%0A++34+%3D%3E+%27merchant1_3%27%2C%0A++35+%3D%3E+%27indicate_net%27%2C%0A++36+%3D%3E+%27show_tax_in_mini%27%2C%0A++37+%3D%3E+%27tax_on_shipping%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527TINYINT%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B5%2B%253D%253E%2B%2527TEXT%2527%252C%250A%2B%2B6%2B%253D%253E%2B%2527TEXT%2527%252C%250A%2B%2B7%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B8%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B9%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B10%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B11%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B12%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B13%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B14%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B15%2B%253D%253E%2B%2527TINYINT%2527%252C%250A%2B%2B16%2B%253D%253E%2B%2527TINYINT%2527%252C%250A%2B%2B17%2B%253D%253E%2B%2527TINYINT%2527%252C%250A%2B%2B18%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B19%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B20%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B21%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B22%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B23%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B24%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B25%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B26%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B27%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B28%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B29%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B30%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B31%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B32%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B33%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B34%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B35%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B36%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B37%2B%253D%253E%2B%2527INT%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A++2+%3D%3E+%27%27%2C%0A++3+%3D%3E+%27%27%2C%0A++4+%3D%3E+%27%27%2C%0A++5+%3D%3E+%27%27%2C%0A++6+%3D%3E+%27%27%2C%0A++7+%3D%3E+%27%27%2C%0A++8+%3D%3E+%27%27%2C%0A++9+%3D%3E+%27%27%2C%0A++10+%3D%3E+%27%27%2C%0A++11+%3D%3E+%27%27%2C%0A++12+%3D%3E+%27%27%2C%0A++13+%3D%3E+%27%27%2C%0A++14+%3D%3E+%27%27%2C%0A++15+%3D%3E+%27%27%2C%0A++16+%3D%3E+%27%27%2C%0A++17+%3D%3E+%27%27%2C%0A++18+%3D%3E+%27%27%2C%0A++19+%3D%3E+%27%27%2C%0A++20+%3D%3E+%27%27%2C%0A++21+%3D%3E+%27%27%2C%0A++22+%3D%3E+%27%27%2C%0A++23+%3D%3E+%27%27%2C%0A++24+%3D%3E+%27%27%2C%0A++25+%3D%3E+%27%27%2C%0A++26+%3D%3E+%27%27%2C%0A++27+%3D%3E+%27%27%2C%0A++28+%3D%3E+%27%27%2C%0A++29+%3D%3E+%27%27%2C%0A++30+%3D%3E+%27%27%2C%0A++31+%3D%3E+%27%27%2C%0A++32+%3D%3E+%27%27%2C%0A++33+%3D%3E+%27%27%2C%0A++34+%3D%3E+%27%27%2C%0A++35+%3D%3E+%27%27%2C%0A++36+%3D%3E+%27%27%2C%0A++37+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class shop_config extends POG_Base
{
	public $shop_configId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $paypal_email;
	
	/**
	 * @var TINYINT
	 */
	public $no_shipping;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $return_success;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $return_fail;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $no_note;
	
	/**
	 * @var TEXT
	 */
	public $order_received_email;
	
	/**
	 * @var TEXT
	 */
	public $order_sent_email;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $currency;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $smtp_server;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $from_email;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $from_name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $username;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $password;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $order_received_email_subject;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $order_sent_email_subject;
	
	/**
	 * @var TINYINT
	 */
	public $enable_sales_tax;
	
	/**
	 * @var TINYINT
	 */
	public $add_tax;
	
	/**
	 * @var TINYINT
	 */
	public $tax_percent;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $tax_name;
	
	/**
	 * @var INT
	 */
	public $invoice_page_id;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $merchant_id;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $merchant_3;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $gateway;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $merchant2_1;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $merchant2_2;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $merchant2_3;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $merchant3_1;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $merchant3_2;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $merchant3_3;
	
	/**
	 * @var INT
	 */
	public $merchant1_enabled;
	
	/**
	 * @var INT
	 */
	public $merchant2_enabled;
	
	/**
	 * @var INT
	 */
	public $merchant3_enabled;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $merchant1_1;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $merchant1_2;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $merchant1_3;
	
	/**
	 * @var INT
	 */
	public $indicate_net;
	
	/**
	 * @var INT
	 */
	public $show_tax_in_mini;
	
	/**
	 * @var INT
	 */
	public $tax_on_shipping;
	
	public $pog_attribute_type = array(
		"shop_configId" => array('db_attributes' => array("NUMERIC", "INT")),
		"paypal_email" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"no_shipping" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"return_success" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"return_fail" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"no_note" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"order_received_email" => array('db_attributes' => array("TEXT", "TEXT")),
		"order_sent_email" => array('db_attributes' => array("TEXT", "TEXT")),
		"currency" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"smtp_server" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"from_email" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"from_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"username" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"password" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"order_received_email_subject" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"order_sent_email_subject" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"enable_sales_tax" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"add_tax" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"tax_percent" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"tax_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"invoice_page_id" => array('db_attributes' => array("NUMERIC", "INT")),
		"merchant_id" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"merchant_3" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"gateway" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"merchant2_1" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"merchant2_2" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"merchant2_3" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"merchant3_1" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"merchant3_2" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"merchant3_3" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"merchant1_enabled" => array('db_attributes' => array("NUMERIC", "INT")),
		"merchant2_enabled" => array('db_attributes' => array("NUMERIC", "INT")),
		"merchant3_enabled" => array('db_attributes' => array("NUMERIC", "INT")),
		"merchant1_1" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"merchant1_2" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"merchant1_3" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"indicate_net" => array('db_attributes' => array("NUMERIC", "INT")),
		"show_tax_in_mini" => array('db_attributes' => array("NUMERIC", "INT")),
		"tax_on_shipping" => array('db_attributes' => array("NUMERIC", "INT")),
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
	
	function shop_config($paypal_email='', $no_shipping='', $return_success='', $return_fail='', $no_note='', $order_received_email='', $order_sent_email='', $currency='', $smtp_server='', $from_email='', $from_name='', $username='', $password='', $order_received_email_subject='', $order_sent_email_subject='', $enable_sales_tax='', $add_tax='', $tax_percent='', $tax_name='', $invoice_page_id='', $merchant_id='', $merchant_3='', $gateway='', $merchant2_1='', $merchant2_2='', $merchant2_3='', $merchant3_1='', $merchant3_2='', $merchant3_3='', $merchant1_enabled='', $merchant2_enabled='', $merchant3_enabled='', $merchant1_1='', $merchant1_2='', $merchant1_3='', $indicate_net='', $show_tax_in_mini='', $tax_on_shipping='')
	{
		$this->paypal_email = $paypal_email;
		$this->no_shipping = $no_shipping;
		$this->return_success = $return_success;
		$this->return_fail = $return_fail;
		$this->no_note = $no_note;
		$this->order_received_email = $order_received_email;
		$this->order_sent_email = $order_sent_email;
		$this->currency = $currency;
		$this->smtp_server = $smtp_server;
		$this->from_email = $from_email;
		$this->from_name = $from_name;
		$this->username = $username;
		$this->password = $password;
		$this->order_received_email_subject = $order_received_email_subject;
		$this->order_sent_email_subject = $order_sent_email_subject;
		$this->enable_sales_tax = $enable_sales_tax;
		$this->add_tax = $add_tax;
		$this->tax_percent = $tax_percent;
		$this->tax_name = $tax_name;
		$this->invoice_page_id = $invoice_page_id;
		$this->merchant_id = $merchant_id;
		$this->merchant_3 = $merchant_3;
		$this->gateway = $gateway;
		$this->merchant2_1 = $merchant2_1;
		$this->merchant2_2 = $merchant2_2;
		$this->merchant2_3 = $merchant2_3;
		$this->merchant3_1 = $merchant3_1;
		$this->merchant3_2 = $merchant3_2;
		$this->merchant3_3 = $merchant3_3;
		$this->merchant1_enabled = $merchant1_enabled;
		$this->merchant2_enabled = $merchant2_enabled;
		$this->merchant3_enabled = $merchant3_enabled;
		$this->merchant1_1 = $merchant1_1;
		$this->merchant1_2 = $merchant1_2;
		$this->merchant1_3 = $merchant1_3;
		$this->indicate_net = $indicate_net;
		$this->show_tax_in_mini = $show_tax_in_mini;
		$this->tax_on_shipping = $tax_on_shipping;
	}
	
	
	/**
	* Gets object from database
	* @param integer $shop_configId 
	* @return object $shop_config
	*/
	function Get($shop_configId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `shop_config` where `shop_configid`='".intval($shop_configId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->shop_configId = $row['shop_configid'];
			$this->paypal_email = $this->Unescape($row['paypal_email']);
			$this->no_shipping = $this->Unescape($row['no_shipping']);
			$this->return_success = $this->Unescape($row['return_success']);
			$this->return_fail = $this->Unescape($row['return_fail']);
			$this->no_note = $this->Unescape($row['no_note']);
			$this->order_received_email = $this->Unescape($row['order_received_email']);
			$this->order_sent_email = $this->Unescape($row['order_sent_email']);
			$this->currency = $this->Unescape($row['currency']);
			$this->smtp_server = $this->Unescape($row['smtp_server']);
			$this->from_email = $this->Unescape($row['from_email']);
			$this->from_name = $this->Unescape($row['from_name']);
			$this->username = $this->Unescape($row['username']);
			$this->password = $this->Unescape($row['password']);
			$this->order_received_email_subject = $this->Unescape($row['order_received_email_subject']);
			$this->order_sent_email_subject = $this->Unescape($row['order_sent_email_subject']);
			$this->enable_sales_tax = $this->Unescape($row['enable_sales_tax']);
			$this->add_tax = $this->Unescape($row['add_tax']);
			$this->tax_percent = $this->Unescape($row['tax_percent']);
			$this->tax_name = $this->Unescape($row['tax_name']);
			$this->invoice_page_id = $this->Unescape($row['invoice_page_id']);
			$this->merchant_id = $this->Unescape($row['merchant_id']);
			$this->merchant_3 = $this->Unescape($row['merchant_3']);
			$this->gateway = $this->Unescape($row['gateway']);
			$this->merchant2_1 = $this->Unescape($row['merchant2_1']);
			$this->merchant2_2 = $this->Unescape($row['merchant2_2']);
			$this->merchant2_3 = $this->Unescape($row['merchant2_3']);
			$this->merchant3_1 = $this->Unescape($row['merchant3_1']);
			$this->merchant3_2 = $this->Unescape($row['merchant3_2']);
			$this->merchant3_3 = $this->Unescape($row['merchant3_3']);
			$this->merchant1_enabled = $this->Unescape($row['merchant1_enabled']);
			$this->merchant2_enabled = $this->Unescape($row['merchant2_enabled']);
			$this->merchant3_enabled = $this->Unescape($row['merchant3_enabled']);
			$this->merchant1_1 = $this->Unescape($row['merchant1_1']);
			$this->merchant1_2 = $this->Unescape($row['merchant1_2']);
			$this->merchant1_3 = $this->Unescape($row['merchant1_3']);
			$this->indicate_net = $this->Unescape($row['indicate_net']);
			$this->show_tax_in_mini = $this->Unescape($row['show_tax_in_mini']);
			$this->tax_on_shipping = $this->Unescape($row['tax_on_shipping']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $shop_configList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `shop_config` ";
		$shop_configList = Array();
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
			$sortBy = "shop_configid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$shop_config = new $thisObjectName();
			$shop_config->shop_configId = $row['shop_configid'];
			$shop_config->paypal_email = $this->Unescape($row['paypal_email']);
			$shop_config->no_shipping = $this->Unescape($row['no_shipping']);
			$shop_config->return_success = $this->Unescape($row['return_success']);
			$shop_config->return_fail = $this->Unescape($row['return_fail']);
			$shop_config->no_note = $this->Unescape($row['no_note']);
			$shop_config->order_received_email = $this->Unescape($row['order_received_email']);
			$shop_config->order_sent_email = $this->Unescape($row['order_sent_email']);
			$shop_config->currency = $this->Unescape($row['currency']);
			$shop_config->smtp_server = $this->Unescape($row['smtp_server']);
			$shop_config->from_email = $this->Unescape($row['from_email']);
			$shop_config->from_name = $this->Unescape($row['from_name']);
			$shop_config->username = $this->Unescape($row['username']);
			$shop_config->password = $this->Unescape($row['password']);
			$shop_config->order_received_email_subject = $this->Unescape($row['order_received_email_subject']);
			$shop_config->order_sent_email_subject = $this->Unescape($row['order_sent_email_subject']);
			$shop_config->enable_sales_tax = $this->Unescape($row['enable_sales_tax']);
			$shop_config->add_tax = $this->Unescape($row['add_tax']);
			$shop_config->tax_percent = $this->Unescape($row['tax_percent']);
			$shop_config->tax_name = $this->Unescape($row['tax_name']);
			$shop_config->invoice_page_id = $this->Unescape($row['invoice_page_id']);
			$shop_config->merchant_id = $this->Unescape($row['merchant_id']);
			$shop_config->merchant_3 = $this->Unescape($row['merchant_3']);
			$shop_config->gateway = $this->Unescape($row['gateway']);
			$shop_config->merchant2_1 = $this->Unescape($row['merchant2_1']);
			$shop_config->merchant2_2 = $this->Unescape($row['merchant2_2']);
			$shop_config->merchant2_3 = $this->Unescape($row['merchant2_3']);
			$shop_config->merchant3_1 = $this->Unescape($row['merchant3_1']);
			$shop_config->merchant3_2 = $this->Unescape($row['merchant3_2']);
			$shop_config->merchant3_3 = $this->Unescape($row['merchant3_3']);
			$shop_config->merchant1_enabled = $this->Unescape($row['merchant1_enabled']);
			$shop_config->merchant2_enabled = $this->Unescape($row['merchant2_enabled']);
			$shop_config->merchant3_enabled = $this->Unescape($row['merchant3_enabled']);
			$shop_config->merchant1_1 = $this->Unescape($row['merchant1_1']);
			$shop_config->merchant1_2 = $this->Unescape($row['merchant1_2']);
			$shop_config->merchant1_3 = $this->Unescape($row['merchant1_3']);
			$shop_config->indicate_net = $this->Unescape($row['indicate_net']);
			$shop_config->show_tax_in_mini = $this->Unescape($row['show_tax_in_mini']);
			$shop_config->tax_on_shipping = $this->Unescape($row['tax_on_shipping']);
			$shop_configList[] = $shop_config;
		}
		return $shop_configList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $shop_configId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->shop_configId!=''){
			$this->pog_query = "select `shop_configid` from `shop_config` where `shop_configid`='".$this->shop_configId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `shop_config` set 
			`paypal_email`='".$this->Escape($this->paypal_email)."', 
			`no_shipping`='".$this->Escape($this->no_shipping)."', 
			`return_success`='".$this->Escape($this->return_success)."', 
			`return_fail`='".$this->Escape($this->return_fail)."', 
			`no_note`='".$this->Escape($this->no_note)."', 
			`order_received_email`='".$this->Escape($this->order_received_email)."', 
			`order_sent_email`='".$this->Escape($this->order_sent_email)."', 
			`currency`='".$this->Escape($this->currency)."', 
			`smtp_server`='".$this->Escape($this->smtp_server)."', 
			`from_email`='".$this->Escape($this->from_email)."', 
			`from_name`='".$this->Escape($this->from_name)."', 
			`username`='".$this->Escape($this->username)."', 
			`password`='".$this->Escape($this->password)."', 
			`order_received_email_subject`='".$this->Escape($this->order_received_email_subject)."', 
			`order_sent_email_subject`='".$this->Escape($this->order_sent_email_subject)."', 
			`enable_sales_tax`='".$this->Escape($this->enable_sales_tax)."', 
			`add_tax`='".$this->Escape($this->add_tax)."', 
			`tax_percent`='".$this->Escape($this->tax_percent)."', 
			`tax_name`='".$this->Escape($this->tax_name)."', 
			`invoice_page_id`='".$this->Escape($this->invoice_page_id)."', 
			`merchant_id`='".$this->Escape($this->merchant_id)."', 
			`merchant_3`='".$this->Escape($this->merchant_3)."', 
			`gateway`='".$this->Escape($this->gateway)."', 
			`merchant2_1`='".$this->Escape($this->merchant2_1)."', 
			`merchant2_2`='".$this->Escape($this->merchant2_2)."', 
			`merchant2_3`='".$this->Escape($this->merchant2_3)."', 
			`merchant3_1`='".$this->Escape($this->merchant3_1)."', 
			`merchant3_2`='".$this->Escape($this->merchant3_2)."', 
			`merchant3_3`='".$this->Escape($this->merchant3_3)."', 
			`merchant1_enabled`='".$this->Escape($this->merchant1_enabled)."', 
			`merchant2_enabled`='".$this->Escape($this->merchant2_enabled)."', 
			`merchant3_enabled`='".$this->Escape($this->merchant3_enabled)."', 
			`merchant1_1`='".$this->Escape($this->merchant1_1)."', 
			`merchant1_2`='".$this->Escape($this->merchant1_2)."', 
			`merchant1_3`='".$this->Escape($this->merchant1_3)."', 
			`indicate_net`='".$this->Escape($this->indicate_net)."', 
			`show_tax_in_mini`='".$this->Escape($this->show_tax_in_mini)."', 
			`tax_on_shipping`='".$this->Escape($this->tax_on_shipping)."' where `shop_configid`='".$this->shop_configId."'";
		}
		else
		{
			$this->pog_query = "insert into `shop_config` (`paypal_email`, `no_shipping`, `return_success`, `return_fail`, `no_note`, `order_received_email`, `order_sent_email`, `currency`, `smtp_server`, `from_email`, `from_name`, `username`, `password`, `order_received_email_subject`, `order_sent_email_subject`, `enable_sales_tax`, `add_tax`, `tax_percent`, `tax_name`, `invoice_page_id`, `merchant_id`, `merchant_3`, `gateway`, `merchant2_1`, `merchant2_2`, `merchant2_3`, `merchant3_1`, `merchant3_2`, `merchant3_3`, `merchant1_enabled`, `merchant2_enabled`, `merchant3_enabled`, `merchant1_1`, `merchant1_2`, `merchant1_3`, `indicate_net`, `show_tax_in_mini`, `tax_on_shipping` ) values (
			'".$this->Escape($this->paypal_email)."', 
			'".$this->Escape($this->no_shipping)."', 
			'".$this->Escape($this->return_success)."', 
			'".$this->Escape($this->return_fail)."', 
			'".$this->Escape($this->no_note)."', 
			'".$this->Escape($this->order_received_email)."', 
			'".$this->Escape($this->order_sent_email)."', 
			'".$this->Escape($this->currency)."', 
			'".$this->Escape($this->smtp_server)."', 
			'".$this->Escape($this->from_email)."', 
			'".$this->Escape($this->from_name)."', 
			'".$this->Escape($this->username)."', 
			'".$this->Escape($this->password)."', 
			'".$this->Escape($this->order_received_email_subject)."', 
			'".$this->Escape($this->order_sent_email_subject)."', 
			'".$this->Escape($this->enable_sales_tax)."', 
			'".$this->Escape($this->add_tax)."', 
			'".$this->Escape($this->tax_percent)."', 
			'".$this->Escape($this->tax_name)."', 
			'".$this->Escape($this->invoice_page_id)."', 
			'".$this->Escape($this->merchant_id)."', 
			'".$this->Escape($this->merchant_3)."', 
			'".$this->Escape($this->gateway)."', 
			'".$this->Escape($this->merchant2_1)."', 
			'".$this->Escape($this->merchant2_2)."', 
			'".$this->Escape($this->merchant2_3)."', 
			'".$this->Escape($this->merchant3_1)."', 
			'".$this->Escape($this->merchant3_2)."', 
			'".$this->Escape($this->merchant3_3)."', 
			'".$this->Escape($this->merchant1_enabled)."', 
			'".$this->Escape($this->merchant2_enabled)."', 
			'".$this->Escape($this->merchant3_enabled)."', 
			'".$this->Escape($this->merchant1_1)."', 
			'".$this->Escape($this->merchant1_2)."', 
			'".$this->Escape($this->merchant1_3)."', 
			'".$this->Escape($this->indicate_net)."', 
			'".$this->Escape($this->show_tax_in_mini)."', 
			'".$this->Escape($this->tax_on_shipping)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->shop_configId == "")
		{
			$this->shop_configId = $insertId;
		}
		return $this->shop_configId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $shop_configId
	*/
	function SaveNew()
	{
		$this->shop_configId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `shop_config` where `shop_configid`='".$this->shop_configId."'";
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
			$pog_query = "delete from `shop_config` where ";
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