<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `products` (
	`productsid` int(11) NOT NULL auto_increment,
	`name` VARCHAR(255) NOT NULL,
	`price` DECIMAL(16,2) NOT NULL,
	`only_one` VARCHAR(255) NOT NULL,
	`weight` VARCHAR(255) NOT NULL,
	`code` VARCHAR(255) NOT NULL,
	`variants` MEDIUMTEXT NOT NULL,
	`type` VARCHAR(255) NOT NULL,
	`gal_id` INT NOT NULL,
	`form_id` INT NOT NULL,
	`in_stock` INT NOT NULL,
	`stock_limits_basket_quantity` INT NOT NULL,
	`separate_stock_for_options` SMALLINT NOT NULL,
	`quantity_discount_1_price` DECIMAL(16,2) NOT NULL,
	`quantity_discount_1_threshold` INT NOT NULL,
	`quantity_discount_2_price` DECIMAL(16,2) NOT NULL,
	`quantity_discount_2_threshold` INT NOT NULL,
	`digital_file` VARCHAR(255) NOT NULL,
	`alert_admin` INT NOT NULL,
	`alert_admin_threshold` INT NOT NULL,
	`tax_exempt` INT NOT NULL,
	`shipping` DECIMAL(16,2) NOT NULL,
	`shipping_discount_1_price` DECIMAL(16,2) NOT NULL,
	`shipping_discount_1_threshold` INT NOT NULL,
	`shipping_discount_2_price` DECIMAL(16,2) NOT NULL,
	`shipping_discount_2_threshold` INT NOT NULL,
	`sku` VARCHAR(255) NOT NULL, PRIMARY KEY  (`productsid`)) ENGINE=MyISAM;
*/

/**
* <b>products</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=products&attributeList=array+%28%0A++0+%3D%3E+%27name%27%2C%0A++1+%3D%3E+%27price%27%2C%0A++2+%3D%3E+%27only_one%27%2C%0A++3+%3D%3E+%27weight%27%2C%0A++4+%3D%3E+%27code%27%2C%0A++5+%3D%3E+%27variants%27%2C%0A++6+%3D%3E+%27type%27%2C%0A++7+%3D%3E+%27gal_id%27%2C%0A++8+%3D%3E+%27form_id%27%2C%0A++9+%3D%3E+%27in_stock%27%2C%0A++10+%3D%3E+%27stock_limits_basket_quantity%27%2C%0A++11+%3D%3E+%27separate_stock_for_options%27%2C%0A++12+%3D%3E+%27quantity_discount_1_price%27%2C%0A++13+%3D%3E+%27quantity_discount_1_threshold%27%2C%0A++14+%3D%3E+%27quantity_discount_2_price%27%2C%0A++15+%3D%3E+%27quantity_discount_2_threshold%27%2C%0A++16+%3D%3E+%27digital_file%27%2C%0A++17+%3D%3E+%27alert_admin%27%2C%0A++18+%3D%3E+%27alert_admin_threshold%27%2C%0A++19+%3D%3E+%27tax_exempt%27%2C%0A++20+%3D%3E+%27shipping%27%2C%0A++21+%3D%3E+%27shipping_discount_1_price%27%2C%0A++22+%3D%3E+%27shipping_discount_1_threshold%27%2C%0A++23+%3D%3E+%27shipping_discount_2_price%27%2C%0A++24+%3D%3E+%27shipping_discount_2_threshold%27%2C%0A++25+%3D%3E+%27sku%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527DECIMAL%252816%252C2%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B5%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B6%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B7%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B8%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B9%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B10%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B11%2B%253D%253E%2B%2527SMALLINT%2527%252C%250A%2B%2B12%2B%253D%253E%2B%2527DECIMAL%252816%252C2%2529%2527%252C%250A%2B%2B13%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B14%2B%253D%253E%2B%2527DECIMAL%252816%252C2%2529%2527%252C%250A%2B%2B15%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B16%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B17%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B18%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B19%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B20%2B%253D%253E%2B%2527DECIMAL%252816%252C2%2529%2527%252C%250A%2B%2B21%2B%253D%253E%2B%2527DECIMAL%252816%252C2%2529%2527%252C%250A%2B%2B22%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B23%2B%253D%253E%2B%2527DECIMAL%252816%252C2%2529%2527%252C%250A%2B%2B24%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B25%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A++2+%3D%3E+%27%27%2C%0A++3+%3D%3E+%27%27%2C%0A++4+%3D%3E+%27%27%2C%0A++5+%3D%3E+%27%27%2C%0A++6+%3D%3E+%27%27%2C%0A++7+%3D%3E+%27%27%2C%0A++8+%3D%3E+%27%27%2C%0A++9+%3D%3E+%27%27%2C%0A++10+%3D%3E+%27%27%2C%0A++11+%3D%3E+%27%27%2C%0A++12+%3D%3E+%27%27%2C%0A++13+%3D%3E+%27%27%2C%0A++14+%3D%3E+%27%27%2C%0A++15+%3D%3E+%27%27%2C%0A++16+%3D%3E+%27%27%2C%0A++17+%3D%3E+%27%27%2C%0A++18+%3D%3E+%27%27%2C%0A++19+%3D%3E+%27%27%2C%0A++20+%3D%3E+%27%27%2C%0A++21+%3D%3E+%27%27%2C%0A++22+%3D%3E+%27%27%2C%0A++23+%3D%3E+%27%27%2C%0A++24+%3D%3E+%27%27%2C%0A++25+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class products extends POG_Base
{
	public $productsId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $name;
	
	/**
	 * @var DECIMAL(16,2)
	 */
	public $price;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $only_one;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $weight;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $code;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $variants;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $type;
	
	/**
	 * @var INT
	 */
	public $gal_id;
	
	/**
	 * @var INT
	 */
	public $form_id;
	
	/**
	 * @var INT
	 */
	public $in_stock;
	
	/**
	 * @var INT
	 */
	public $stock_limits_basket_quantity;
	
	/**
	 * @var SMALLINT
	 */
	public $separate_stock_for_options;
	
	/**
	 * @var DECIMAL(16,2)
	 */
	public $quantity_discount_1_price;
	
	/**
	 * @var INT
	 */
	public $quantity_discount_1_threshold;
	
	/**
	 * @var DECIMAL(16,2)
	 */
	public $quantity_discount_2_price;
	
	/**
	 * @var INT
	 */
	public $quantity_discount_2_threshold;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $digital_file;
	
	/**
	 * @var INT
	 */
	public $alert_admin;
	
	/**
	 * @var INT
	 */
	public $alert_admin_threshold;
	
	/**
	 * @var INT
	 */
	public $tax_exempt;
	
	/**
	 * @var DECIMAL(16,2)
	 */
	public $shipping;
	
	/**
	 * @var DECIMAL(16,2)
	 */
	public $shipping_discount_1_price;
	
	/**
	 * @var INT
	 */
	public $shipping_discount_1_threshold;
	
	/**
	 * @var DECIMAL(16,2)
	 */
	public $shipping_discount_2_price;
	
	/**
	 * @var INT
	 */
	public $shipping_discount_2_threshold;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $sku;
	
	public $pog_attribute_type = array(
		"productsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"price" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"only_one" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"weight" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"code" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"variants" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"type" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"gal_id" => array('db_attributes' => array("NUMERIC", "INT")),
		"form_id" => array('db_attributes' => array("NUMERIC", "INT")),
		"in_stock" => array('db_attributes' => array("NUMERIC", "INT")),
		"stock_limits_basket_quantity" => array('db_attributes' => array("NUMERIC", "INT")),
		"separate_stock_for_options" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"quantity_discount_1_price" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"quantity_discount_1_threshold" => array('db_attributes' => array("NUMERIC", "INT")),
		"quantity_discount_2_price" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"quantity_discount_2_threshold" => array('db_attributes' => array("NUMERIC", "INT")),
		"digital_file" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"alert_admin" => array('db_attributes' => array("NUMERIC", "INT")),
		"alert_admin_threshold" => array('db_attributes' => array("NUMERIC", "INT")),
		"tax_exempt" => array('db_attributes' => array("NUMERIC", "INT")),
		"shipping" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"shipping_discount_1_price" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"shipping_discount_1_threshold" => array('db_attributes' => array("NUMERIC", "INT")),
		"shipping_discount_2_price" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"shipping_discount_2_threshold" => array('db_attributes' => array("NUMERIC", "INT")),
		"sku" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
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
	
	function products($name='', $price='', $only_one='', $weight='', $code='', $variants='', $type='', $gal_id='', $form_id='', $in_stock='', $stock_limits_basket_quantity='', $separate_stock_for_options='', $quantity_discount_1_price='', $quantity_discount_1_threshold='', $quantity_discount_2_price='', $quantity_discount_2_threshold='', $digital_file='', $alert_admin='', $alert_admin_threshold='', $tax_exempt='', $shipping='', $shipping_discount_1_price='', $shipping_discount_1_threshold='', $shipping_discount_2_price='', $shipping_discount_2_threshold='', $sku='')
	{
		$this->name = $name;
		$this->price = $price;
		$this->only_one = $only_one;
		$this->weight = $weight;
		$this->code = $code;
		$this->variants = $variants;
		$this->type = $type;
		$this->gal_id = $gal_id;
		$this->form_id = $form_id;
		$this->in_stock = $in_stock;
		$this->stock_limits_basket_quantity = $stock_limits_basket_quantity;
		$this->separate_stock_for_options = $separate_stock_for_options;
		$this->quantity_discount_1_price = $quantity_discount_1_price;
		$this->quantity_discount_1_threshold = $quantity_discount_1_threshold;
		$this->quantity_discount_2_price = $quantity_discount_2_price;
		$this->quantity_discount_2_threshold = $quantity_discount_2_threshold;
		$this->digital_file = $digital_file;
		$this->alert_admin = $alert_admin;
		$this->alert_admin_threshold = $alert_admin_threshold;
		$this->tax_exempt = $tax_exempt;
		$this->shipping = $shipping;
		$this->shipping_discount_1_price = $shipping_discount_1_price;
		$this->shipping_discount_1_threshold = $shipping_discount_1_threshold;
		$this->shipping_discount_2_price = $shipping_discount_2_price;
		$this->shipping_discount_2_threshold = $shipping_discount_2_threshold;
		$this->sku = $sku;
	}
	
	
	/**
	* Gets object from database
	* @param integer $productsId 
	* @return object $products
	*/
	function Get($productsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `products` where `productsid`='".intval($productsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->productsId = $row['productsid'];
			$this->name = $this->Unescape($row['name']);
			$this->price = $this->Unescape($row['price']);
			$this->only_one = $this->Unescape($row['only_one']);
			$this->weight = $this->Unescape($row['weight']);
			$this->code = $this->Unescape($row['code']);
			$this->variants = $this->Unescape($row['variants']);
			$this->type = $this->Unescape($row['type']);
			$this->gal_id = $this->Unescape($row['gal_id']);
			$this->form_id = $this->Unescape($row['form_id']);
			$this->in_stock = $this->Unescape($row['in_stock']);
			$this->stock_limits_basket_quantity = $this->Unescape($row['stock_limits_basket_quantity']);
			$this->separate_stock_for_options = $this->Unescape($row['separate_stock_for_options']);
			$this->quantity_discount_1_price = $this->Unescape($row['quantity_discount_1_price']);
			$this->quantity_discount_1_threshold = $this->Unescape($row['quantity_discount_1_threshold']);
			$this->quantity_discount_2_price = $this->Unescape($row['quantity_discount_2_price']);
			$this->quantity_discount_2_threshold = $this->Unescape($row['quantity_discount_2_threshold']);
			$this->digital_file = $this->Unescape($row['digital_file']);
			$this->alert_admin = $this->Unescape($row['alert_admin']);
			$this->alert_admin_threshold = $this->Unescape($row['alert_admin_threshold']);
			$this->tax_exempt = $this->Unescape($row['tax_exempt']);
			$this->shipping = $this->Unescape($row['shipping']);
			$this->shipping_discount_1_price = $this->Unescape($row['shipping_discount_1_price']);
			$this->shipping_discount_1_threshold = $this->Unescape($row['shipping_discount_1_threshold']);
			$this->shipping_discount_2_price = $this->Unescape($row['shipping_discount_2_price']);
			$this->shipping_discount_2_threshold = $this->Unescape($row['shipping_discount_2_threshold']);
			$this->sku = $this->Unescape($row['sku']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $productsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `products` ";
		$productsList = Array();
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
			$sortBy = "productsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$products = new $thisObjectName();
			$products->productsId = $row['productsid'];
			$products->name = $this->Unescape($row['name']);
			$products->price = $this->Unescape($row['price']);
			$products->only_one = $this->Unescape($row['only_one']);
			$products->weight = $this->Unescape($row['weight']);
			$products->code = $this->Unescape($row['code']);
			$products->variants = $this->Unescape($row['variants']);
			$products->type = $this->Unescape($row['type']);
			$products->gal_id = $this->Unescape($row['gal_id']);
			$products->form_id = $this->Unescape($row['form_id']);
			$products->in_stock = $this->Unescape($row['in_stock']);
			$products->stock_limits_basket_quantity = $this->Unescape($row['stock_limits_basket_quantity']);
			$products->separate_stock_for_options = $this->Unescape($row['separate_stock_for_options']);
			$products->quantity_discount_1_price = $this->Unescape($row['quantity_discount_1_price']);
			$products->quantity_discount_1_threshold = $this->Unescape($row['quantity_discount_1_threshold']);
			$products->quantity_discount_2_price = $this->Unescape($row['quantity_discount_2_price']);
			$products->quantity_discount_2_threshold = $this->Unescape($row['quantity_discount_2_threshold']);
			$products->digital_file = $this->Unescape($row['digital_file']);
			$products->alert_admin = $this->Unescape($row['alert_admin']);
			$products->alert_admin_threshold = $this->Unescape($row['alert_admin_threshold']);
			$products->tax_exempt = $this->Unescape($row['tax_exempt']);
			$products->shipping = $this->Unescape($row['shipping']);
			$products->shipping_discount_1_price = $this->Unescape($row['shipping_discount_1_price']);
			$products->shipping_discount_1_threshold = $this->Unescape($row['shipping_discount_1_threshold']);
			$products->shipping_discount_2_price = $this->Unescape($row['shipping_discount_2_price']);
			$products->shipping_discount_2_threshold = $this->Unescape($row['shipping_discount_2_threshold']);
			$products->sku = $this->Unescape($row['sku']);
			$productsList[] = $products;
		}
		return $productsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $productsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->productsId!=''){
			$this->pog_query = "select `productsid` from `products` where `productsid`='".$this->productsId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `products` set 
			`name`='".$this->Escape($this->name)."', 
			`price`='".$this->Escape($this->price)."', 
			`only_one`='".$this->Escape($this->only_one)."', 
			`weight`='".$this->Escape($this->weight)."', 
			`code`='".$this->Escape($this->code)."', 
			`variants`='".$this->Escape($this->variants)."', 
			`type`='".$this->Escape($this->type)."', 
			`gal_id`='".$this->Escape($this->gal_id)."', 
			`form_id`='".$this->Escape($this->form_id)."', 
			`in_stock`='".$this->Escape($this->in_stock)."', 
			`stock_limits_basket_quantity`='".$this->Escape($this->stock_limits_basket_quantity)."', 
			`separate_stock_for_options`='".$this->Escape($this->separate_stock_for_options)."', 
			`quantity_discount_1_price`='".$this->Escape($this->quantity_discount_1_price)."', 
			`quantity_discount_1_threshold`='".$this->Escape($this->quantity_discount_1_threshold)."', 
			`quantity_discount_2_price`='".$this->Escape($this->quantity_discount_2_price)."', 
			`quantity_discount_2_threshold`='".$this->Escape($this->quantity_discount_2_threshold)."', 
			`digital_file`='".$this->Escape($this->digital_file)."', 
			`alert_admin`='".$this->Escape($this->alert_admin)."', 
			`alert_admin_threshold`='".$this->Escape($this->alert_admin_threshold)."', 
			`tax_exempt`='".$this->Escape($this->tax_exempt)."', 
			`shipping`='".$this->Escape($this->shipping)."', 
			`shipping_discount_1_price`='".$this->Escape($this->shipping_discount_1_price)."', 
			`shipping_discount_1_threshold`='".$this->Escape($this->shipping_discount_1_threshold)."', 
			`shipping_discount_2_price`='".$this->Escape($this->shipping_discount_2_price)."', 
			`shipping_discount_2_threshold`='".$this->Escape($this->shipping_discount_2_threshold)."', 
			`sku`='".$this->Escape($this->sku)."' where `productsid`='".$this->productsId."'";
		}
		else
		{
			$this->pog_query = "insert into `products` (`name`, `price`, `only_one`, `weight`, `code`, `variants`, `type`, `gal_id`, `form_id`, `in_stock`, `stock_limits_basket_quantity`, `separate_stock_for_options`, `quantity_discount_1_price`, `quantity_discount_1_threshold`, `quantity_discount_2_price`, `quantity_discount_2_threshold`, `digital_file`, `alert_admin`, `alert_admin_threshold`, `tax_exempt`, `shipping`, `shipping_discount_1_price`, `shipping_discount_1_threshold`, `shipping_discount_2_price`, `shipping_discount_2_threshold`, `sku` ) values (
			'".$this->Escape($this->name)."', 
			'".$this->Escape($this->price)."', 
			'".$this->Escape($this->only_one)."', 
			'".$this->Escape($this->weight)."', 
			'".$this->Escape($this->code)."', 
			'".$this->Escape($this->variants)."', 
			'".$this->Escape($this->type)."', 
			'".$this->Escape($this->gal_id)."', 
			'".$this->Escape($this->form_id)."', 
			'".$this->Escape($this->in_stock)."', 
			'".$this->Escape($this->stock_limits_basket_quantity)."', 
			'".$this->Escape($this->separate_stock_for_options)."', 
			'".$this->Escape($this->quantity_discount_1_price)."', 
			'".$this->Escape($this->quantity_discount_1_threshold)."', 
			'".$this->Escape($this->quantity_discount_2_price)."', 
			'".$this->Escape($this->quantity_discount_2_threshold)."', 
			'".$this->Escape($this->digital_file)."', 
			'".$this->Escape($this->alert_admin)."', 
			'".$this->Escape($this->alert_admin_threshold)."', 
			'".$this->Escape($this->tax_exempt)."', 
			'".$this->Escape($this->shipping)."', 
			'".$this->Escape($this->shipping_discount_1_price)."', 
			'".$this->Escape($this->shipping_discount_1_threshold)."', 
			'".$this->Escape($this->shipping_discount_2_price)."', 
			'".$this->Escape($this->shipping_discount_2_threshold)."', 
			'".$this->Escape($this->sku)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->productsId == "")
		{
			$this->productsId = $insertId;
		}
		return $this->productsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $productsId
	*/
	function SaveNew()
	{
		$this->productsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `products` where `productsid`='".$this->productsId."'";
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
			$pog_query = "delete from `products` where ";
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