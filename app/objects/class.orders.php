<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `orders` (
	`ordersid` int(11) NOT NULL auto_increment,
	`name` VARCHAR(255) NOT NULL,
	`price` DECIMAL(16,2) NOT NULL,
	`quantity` VARCHAR(255) NOT NULL,
	`product_code` VARCHAR(255) NOT NULL,
	`postage` DECIMAL(16,2) NOT NULL,
	`only_one` VARCHAR(255) NOT NULL,
	`belongs_to_buyer` INT NOT NULL,
	`weight` DECIMAL(16,2) NOT NULL,
	`variant` MEDIUMTEXT NOT NULL,
	`pic_url` VARCHAR(255) NOT NULL,
	`url_str` VARCHAR(255) NOT NULL,
	`product_id` INT NOT NULL,
	`variant_price` MEDIUMTEXT NOT NULL,
	`quantity_discount_1_price` DECIMAL(16,2) NOT NULL,
	`quantity_discount_1_threshold` INT NOT NULL,
	`quantity_discount_2_price` DECIMAL(16,2) NOT NULL,
	`quantity_discount_2_threshold` INT NOT NULL,
	`booking_productsid` TINYINT NOT NULL,
	`download_code` VARCHAR(255) NOT NULL,
	`download_count` INT NOT NULL,
	`first_download` DATE NOT NULL,
	`shipping` DECIMAL(16,2) NOT NULL,
	`shipping_discount_1_price` DECIMAL(16,2) NOT NULL,
	`shipping_discount_1_threshold` INT NOT NULL,
	`shipping_discount_2_price` DECIMAL(16,2) NOT NULL,
	`shipping_discount_2_threshold` INT NOT NULL, PRIMARY KEY  (`ordersid`)) ENGINE=MyISAM;
*/

/**
* <b>orders</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=orders&attributeList=array+%28%0A++0+%3D%3E+%27name%27%2C%0A++1+%3D%3E+%27price%27%2C%0A++2+%3D%3E+%27quantity%27%2C%0A++3+%3D%3E+%27product_code%27%2C%0A++4+%3D%3E+%27postage%27%2C%0A++5+%3D%3E+%27only_one%27%2C%0A++6+%3D%3E+%27belongs_to_buyer%27%2C%0A++7+%3D%3E+%27weight%27%2C%0A++8+%3D%3E+%27variant%27%2C%0A++9+%3D%3E+%27pic_url%27%2C%0A++10+%3D%3E+%27url_str%27%2C%0A++11+%3D%3E+%27product_id%27%2C%0A++12+%3D%3E+%27variant_price%27%2C%0A++13+%3D%3E+%27quantity_discount_1_price%27%2C%0A++14+%3D%3E+%27quantity_discount_1_threshold%27%2C%0A++15+%3D%3E+%27quantity_discount_2_price%27%2C%0A++16+%3D%3E+%27quantity_discount_2_threshold%27%2C%0A++17+%3D%3E+%27booking_productsid%27%2C%0A++18+%3D%3E+%27download_code%27%2C%0A++19+%3D%3E+%27download_count%27%2C%0A++20+%3D%3E+%27first_download%27%2C%0A++21+%3D%3E+%27shipping%27%2C%0A++22+%3D%3E+%27shipping_discount_1_price%27%2C%0A++23+%3D%3E+%27shipping_discount_1_threshold%27%2C%0A++24+%3D%3E+%27shipping_discount_2_price%27%2C%0A++25+%3D%3E+%27shipping_discount_2_threshold%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527DECIMAL%252816%252C2%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527DECIMAL%252816%252C2%2529%2527%252C%250A%2B%2B5%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B6%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B7%2B%253D%253E%2B%2527DECIMAL%252816%252C2%2529%2527%252C%250A%2B%2B8%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B9%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B10%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B11%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B12%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B13%2B%253D%253E%2B%2527DECIMAL%252816%252C2%2529%2527%252C%250A%2B%2B14%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B15%2B%253D%253E%2B%2527DECIMAL%252816%252C2%2529%2527%252C%250A%2B%2B16%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B17%2B%253D%253E%2B%2527TINYINT%2527%252C%250A%2B%2B18%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B19%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B20%2B%253D%253E%2B%2527DATE%2527%252C%250A%2B%2B21%2B%253D%253E%2B%2527DECIMAL%252816%252C2%2529%2527%252C%250A%2B%2B22%2B%253D%253E%2B%2527DECIMAL%252816%252C2%2529%2527%252C%250A%2B%2B23%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B24%2B%253D%253E%2B%2527DECIMAL%252816%252C2%2529%2527%252C%250A%2B%2B25%2B%253D%253E%2B%2527INT%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A++2+%3D%3E+%27%27%2C%0A++3+%3D%3E+%27%27%2C%0A++4+%3D%3E+%27%27%2C%0A++5+%3D%3E+%27%27%2C%0A++6+%3D%3E+%27%27%2C%0A++7+%3D%3E+%27%27%2C%0A++8+%3D%3E+%27%27%2C%0A++9+%3D%3E+%27%27%2C%0A++10+%3D%3E+%27%27%2C%0A++11+%3D%3E+%27%27%2C%0A++12+%3D%3E+%27%27%2C%0A++13+%3D%3E+%27%27%2C%0A++14+%3D%3E+%27%27%2C%0A++15+%3D%3E+%27%27%2C%0A++16+%3D%3E+%27%27%2C%0A++17+%3D%3E+%27%27%2C%0A++18+%3D%3E+%27%27%2C%0A++19+%3D%3E+%27%27%2C%0A++20+%3D%3E+%27%27%2C%0A++21+%3D%3E+%27%27%2C%0A++22+%3D%3E+%27%27%2C%0A++23+%3D%3E+%27%27%2C%0A++24+%3D%3E+%27%27%2C%0A++25+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class orders extends POG_Base
{
	public $ordersId = '';

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
	public $quantity;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $product_code;
	
	/**
	 * @var DECIMAL(16,2)
	 */
	public $postage;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $only_one;
	
	/**
	 * @var INT
	 */
	public $belongs_to_buyer;
	
	/**
	 * @var DECIMAL(16,2)
	 */
	public $weight;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $variant;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $pic_url;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $url_str;
	
	/**
	 * @var INT
	 */
	public $product_id;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $variant_price;
	
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
	 * @var TINYINT
	 */
	public $booking_productsid;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $download_code;
	
	/**
	 * @var INT
	 */
	public $download_count;
	
	/**
	 * @var DATE
	 */
	public $first_download;
	
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
	
	public $pog_attribute_type = array(
		"ordersId" => array('db_attributes' => array("NUMERIC", "INT")),
		"name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"price" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"quantity" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"product_code" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"postage" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"only_one" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"belongs_to_buyer" => array('db_attributes' => array("NUMERIC", "INT")),
		"weight" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"variant" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"pic_url" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"url_str" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"product_id" => array('db_attributes' => array("NUMERIC", "INT")),
		"variant_price" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"quantity_discount_1_price" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"quantity_discount_1_threshold" => array('db_attributes' => array("NUMERIC", "INT")),
		"quantity_discount_2_price" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"quantity_discount_2_threshold" => array('db_attributes' => array("NUMERIC", "INT")),
		"booking_productsid" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"download_code" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"download_count" => array('db_attributes' => array("NUMERIC", "INT")),
		"first_download" => array('db_attributes' => array("NUMERIC", "DATE")),
		"shipping" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"shipping_discount_1_price" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"shipping_discount_1_threshold" => array('db_attributes' => array("NUMERIC", "INT")),
		"shipping_discount_2_price" => array('db_attributes' => array("NUMERIC", "DECIMAL", "16,2")),
		"shipping_discount_2_threshold" => array('db_attributes' => array("NUMERIC", "INT")),
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
	
	function orders($name='', $price='', $quantity='', $product_code='', $postage='', $only_one='', $belongs_to_buyer='', $weight='', $variant='', $pic_url='', $url_str='', $product_id='', $variant_price='', $quantity_discount_1_price='', $quantity_discount_1_threshold='', $quantity_discount_2_price='', $quantity_discount_2_threshold='', $booking_productsid='', $download_code='', $download_count='', $first_download='', $shipping='', $shipping_discount_1_price='', $shipping_discount_1_threshold='', $shipping_discount_2_price='', $shipping_discount_2_threshold='')
	{
		$this->name = $name;
		$this->price = $price;
		$this->quantity = $quantity;
		$this->product_code = $product_code;
		$this->postage = $postage;
		$this->only_one = $only_one;
		$this->belongs_to_buyer = $belongs_to_buyer;
		$this->weight = $weight;
		$this->variant = $variant;
		$this->pic_url = $pic_url;
		$this->url_str = $url_str;
		$this->product_id = $product_id;
		$this->variant_price = $variant_price;
		$this->quantity_discount_1_price = $quantity_discount_1_price;
		$this->quantity_discount_1_threshold = $quantity_discount_1_threshold;
		$this->quantity_discount_2_price = $quantity_discount_2_price;
		$this->quantity_discount_2_threshold = $quantity_discount_2_threshold;
		$this->booking_productsid = $booking_productsid;
		$this->download_code = $download_code;
		$this->download_count = $download_count;
		$this->first_download = $first_download;
		$this->shipping = $shipping;
		$this->shipping_discount_1_price = $shipping_discount_1_price;
		$this->shipping_discount_1_threshold = $shipping_discount_1_threshold;
		$this->shipping_discount_2_price = $shipping_discount_2_price;
		$this->shipping_discount_2_threshold = $shipping_discount_2_threshold;
	}
	
	
	/**
	* Gets object from database
	* @param integer $ordersId 
	* @return object $orders
	*/
	function Get($ordersId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `orders` where `ordersid`='".intval($ordersId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->ordersId = $row['ordersid'];
			$this->name = $this->Unescape($row['name']);
			$this->price = $this->Unescape($row['price']);
			$this->quantity = $this->Unescape($row['quantity']);
			$this->product_code = $this->Unescape($row['product_code']);
			$this->postage = $this->Unescape($row['postage']);
			$this->only_one = $this->Unescape($row['only_one']);
			$this->belongs_to_buyer = $this->Unescape($row['belongs_to_buyer']);
			$this->weight = $this->Unescape($row['weight']);
			$this->variant = $this->Unescape($row['variant']);
			$this->pic_url = $this->Unescape($row['pic_url']);
			$this->url_str = $this->Unescape($row['url_str']);
			$this->product_id = $this->Unescape($row['product_id']);
			$this->variant_price = $this->Unescape($row['variant_price']);
			$this->quantity_discount_1_price = $this->Unescape($row['quantity_discount_1_price']);
			$this->quantity_discount_1_threshold = $this->Unescape($row['quantity_discount_1_threshold']);
			$this->quantity_discount_2_price = $this->Unescape($row['quantity_discount_2_price']);
			$this->quantity_discount_2_threshold = $this->Unescape($row['quantity_discount_2_threshold']);
			$this->booking_productsid = $this->Unescape($row['booking_productsid']);
			$this->download_code = $this->Unescape($row['download_code']);
			$this->download_count = $this->Unescape($row['download_count']);
			$this->first_download = $row['first_download'];
			$this->shipping = $this->Unescape($row['shipping']);
			$this->shipping_discount_1_price = $this->Unescape($row['shipping_discount_1_price']);
			$this->shipping_discount_1_threshold = $this->Unescape($row['shipping_discount_1_threshold']);
			$this->shipping_discount_2_price = $this->Unescape($row['shipping_discount_2_price']);
			$this->shipping_discount_2_threshold = $this->Unescape($row['shipping_discount_2_threshold']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $ordersList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `orders` ";
		$ordersList = Array();
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
			$sortBy = "ordersid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$orders = new $thisObjectName();
			$orders->ordersId = $row['ordersid'];
			$orders->name = $this->Unescape($row['name']);
			$orders->price = $this->Unescape($row['price']);
			$orders->quantity = $this->Unescape($row['quantity']);
			$orders->product_code = $this->Unescape($row['product_code']);
			$orders->postage = $this->Unescape($row['postage']);
			$orders->only_one = $this->Unescape($row['only_one']);
			$orders->belongs_to_buyer = $this->Unescape($row['belongs_to_buyer']);
			$orders->weight = $this->Unescape($row['weight']);
			$orders->variant = $this->Unescape($row['variant']);
			$orders->pic_url = $this->Unescape($row['pic_url']);
			$orders->url_str = $this->Unescape($row['url_str']);
			$orders->product_id = $this->Unescape($row['product_id']);
			$orders->variant_price = $this->Unescape($row['variant_price']);
			$orders->quantity_discount_1_price = $this->Unescape($row['quantity_discount_1_price']);
			$orders->quantity_discount_1_threshold = $this->Unescape($row['quantity_discount_1_threshold']);
			$orders->quantity_discount_2_price = $this->Unescape($row['quantity_discount_2_price']);
			$orders->quantity_discount_2_threshold = $this->Unescape($row['quantity_discount_2_threshold']);
			$orders->booking_productsid = $this->Unescape($row['booking_productsid']);
			$orders->download_code = $this->Unescape($row['download_code']);
			$orders->download_count = $this->Unescape($row['download_count']);
			$orders->first_download = $row['first_download'];
			$orders->shipping = $this->Unescape($row['shipping']);
			$orders->shipping_discount_1_price = $this->Unescape($row['shipping_discount_1_price']);
			$orders->shipping_discount_1_threshold = $this->Unescape($row['shipping_discount_1_threshold']);
			$orders->shipping_discount_2_price = $this->Unescape($row['shipping_discount_2_price']);
			$orders->shipping_discount_2_threshold = $this->Unescape($row['shipping_discount_2_threshold']);
			$ordersList[] = $orders;
		}
		return $ordersList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $ordersId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->ordersId!=''){
			$this->pog_query = "select `ordersid` from `orders` where `ordersid`='".$this->ordersId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `orders` set 
			`name`='".$this->Escape($this->name)."', 
			`price`='".$this->Escape($this->price)."', 
			`quantity`='".$this->Escape($this->quantity)."', 
			`product_code`='".$this->Escape($this->product_code)."', 
			`postage`='".$this->Escape($this->postage)."', 
			`only_one`='".$this->Escape($this->only_one)."', 
			`belongs_to_buyer`='".$this->Escape($this->belongs_to_buyer)."', 
			`weight`='".$this->Escape($this->weight)."', 
			`variant`='".$this->Escape($this->variant)."', 
			`pic_url`='".$this->Escape($this->pic_url)."', 
			`url_str`='".$this->Escape($this->url_str)."', 
			`product_id`='".$this->Escape($this->product_id)."', 
			`variant_price`='".$this->Escape($this->variant_price)."', 
			`quantity_discount_1_price`='".$this->Escape($this->quantity_discount_1_price)."', 
			`quantity_discount_1_threshold`='".$this->Escape($this->quantity_discount_1_threshold)."', 
			`quantity_discount_2_price`='".$this->Escape($this->quantity_discount_2_price)."', 
			`quantity_discount_2_threshold`='".$this->Escape($this->quantity_discount_2_threshold)."', 
			`booking_productsid`='".$this->Escape($this->booking_productsid)."', 
			`download_code`='".$this->Escape($this->download_code)."', 
			`download_count`='".$this->Escape($this->download_count)."', 
			`first_download`='".$this->first_download."', 
			`shipping`='".$this->Escape($this->shipping)."', 
			`shipping_discount_1_price`='".$this->Escape($this->shipping_discount_1_price)."', 
			`shipping_discount_1_threshold`='".$this->Escape($this->shipping_discount_1_threshold)."', 
			`shipping_discount_2_price`='".$this->Escape($this->shipping_discount_2_price)."', 
			`shipping_discount_2_threshold`='".$this->Escape($this->shipping_discount_2_threshold)."' where `ordersid`='".$this->ordersId."'";
		}
		else
		{
			$this->pog_query = "insert into `orders` (`name`, `price`, `quantity`, `product_code`, `postage`, `only_one`, `belongs_to_buyer`, `weight`, `variant`, `pic_url`, `url_str`, `product_id`, `variant_price`, `quantity_discount_1_price`, `quantity_discount_1_threshold`, `quantity_discount_2_price`, `quantity_discount_2_threshold`, `booking_productsid`, `download_code`, `download_count`, `first_download`, `shipping`, `shipping_discount_1_price`, `shipping_discount_1_threshold`, `shipping_discount_2_price`, `shipping_discount_2_threshold` ) values (
			'".$this->Escape($this->name)."', 
			'".$this->Escape($this->price)."', 
			'".$this->Escape($this->quantity)."', 
			'".$this->Escape($this->product_code)."', 
			'".$this->Escape($this->postage)."', 
			'".$this->Escape($this->only_one)."', 
			'".$this->Escape($this->belongs_to_buyer)."', 
			'".$this->Escape($this->weight)."', 
			'".$this->Escape($this->variant)."', 
			'".$this->Escape($this->pic_url)."', 
			'".$this->Escape($this->url_str)."', 
			'".$this->Escape($this->product_id)."', 
			'".$this->Escape($this->variant_price)."', 
			'".$this->Escape($this->quantity_discount_1_price)."', 
			'".$this->Escape($this->quantity_discount_1_threshold)."', 
			'".$this->Escape($this->quantity_discount_2_price)."', 
			'".$this->Escape($this->quantity_discount_2_threshold)."', 
			'".$this->Escape($this->booking_productsid)."', 
			'".$this->Escape($this->download_code)."', 
			'".$this->Escape($this->download_count)."', 
			'".$this->first_download."', 
			'".$this->Escape($this->shipping)."', 
			'".$this->Escape($this->shipping_discount_1_price)."', 
			'".$this->Escape($this->shipping_discount_1_threshold)."', 
			'".$this->Escape($this->shipping_discount_2_price)."', 
			'".$this->Escape($this->shipping_discount_2_threshold)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->ordersId == "")
		{
			$this->ordersId = $insertId;
		}
		return $this->ordersId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $ordersId
	*/
	function SaveNew()
	{
		$this->ordersId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `orders` where `ordersid`='".$this->ordersId."'";
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
			$pog_query = "delete from `orders` where ";
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