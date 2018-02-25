<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `admin_users` (
	`admin_usersid` int(11) NOT NULL auto_increment,
	`username` VARCHAR(255) NOT NULL,
	`password` CHAR(40) NOT NULL,
	`salt` VARCHAR(255) NOT NULL,
	`privalleges` VARCHAR(255) NOT NULL,
	`logged_in_key` VARCHAR(255) NOT NULL,
	`age` VARCHAR(255) NOT NULL,
	`uaip` VARCHAR(255) NOT NULL,
	`account_version` TINYINT NOT NULL,
	`reset_key` VARCHAR(255) NOT NULL,
	`hide_tips` TINYINT NOT NULL,
	`system_menu` TINYINT NOT NULL,
	`hidden_tips` TEXT NOT NULL,
	`page_filter_lang` VARCHAR(255) NOT NULL,
	`page_filter_search` VARCHAR(255) NOT NULL,
	`page_filter_page` SMALLINT NOT NULL,
	`page_filter_parent` SMALLINT NOT NULL,
	`page_filter_type` VARCHAR(255) NOT NULL,
	`blog_filter_page` SMALLINT NOT NULL,
	`blog_filter_lang` VARCHAR(255) NOT NULL,
	`blog_filter_search` VARCHAR(255) NOT NULL,
	`newsletter_filter_search` VARCHAR(255) NOT NULL,
	`newsletter_filter_group` VARCHAR(255) NOT NULL,
	`products_filter_search` VARCHAR(255) NOT NULL,
	`snippets_filter_search` VARCHAR(255) NOT NULL,
	`product_sort_by` VARCHAR(255) NOT NULL,
	`product_sort_reverse` SMALLINT NOT NULL,
	`receive_stock_alerts` TINYINT NOT NULL, PRIMARY KEY  (`admin_usersid`)) ENGINE=MyISAM;
*/

/**
* <b>admin_users</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=admin_users&attributeList=array+%28%0A++0+%3D%3E+%27username%27%2C%0A++1+%3D%3E+%27password%27%2C%0A++2+%3D%3E+%27salt%27%2C%0A++3+%3D%3E+%27privalleges%27%2C%0A++4+%3D%3E+%27logged_in_key%27%2C%0A++5+%3D%3E+%27age%27%2C%0A++6+%3D%3E+%27uaip%27%2C%0A++7+%3D%3E+%27account_version%27%2C%0A++8+%3D%3E+%27reset_key%27%2C%0A++9+%3D%3E+%27hide_tips%27%2C%0A++10+%3D%3E+%27system_menu%27%2C%0A++11+%3D%3E+%27hidden_tips%27%2C%0A++12+%3D%3E+%27page_filter_lang%27%2C%0A++13+%3D%3E+%27page_filter_search%27%2C%0A++14+%3D%3E+%27page_filter_page%27%2C%0A++15+%3D%3E+%27page_filter_parent%27%2C%0A++16+%3D%3E+%27page_filter_type%27%2C%0A++17+%3D%3E+%27blog_filter_page%27%2C%0A++18+%3D%3E+%27blog_filter_lang%27%2C%0A++19+%3D%3E+%27blog_filter_search%27%2C%0A++20+%3D%3E+%27newsletter_filter_search%27%2C%0A++21+%3D%3E+%27newsletter_filter_group%27%2C%0A++22+%3D%3E+%27products_filter_search%27%2C%0A++23+%3D%3E+%27snippets_filter_search%27%2C%0A++24+%3D%3E+%27product_sort_by%27%2C%0A++25+%3D%3E+%27product_sort_reverse%27%2C%0A++26+%3D%3E+%27receive_stock_alerts%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++1+%3D%3E+%27CHAR%2840%29%27%2C%0A++2+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++3+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++4+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++5+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++6+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++7+%3D%3E+%27TINYINT%27%2C%0A++8+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++9+%3D%3E+%27TINYINT%27%2C%0A++10+%3D%3E+%27TINYINT%27%2C%0A++11+%3D%3E+%27TEXT%27%2C%0A++12+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++13+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++14+%3D%3E+%27SMALLINT%27%2C%0A++15+%3D%3E+%27SMALLINT%27%2C%0A++16+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++17+%3D%3E+%27SMALLINT%27%2C%0A++18+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++19+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++20+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++21+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++22+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++23+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++24+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++25+%3D%3E+%27SMALLINT%27%2C%0A++26+%3D%3E+%27TINYINT%27%2C%0A%29
*/
include_once('class.pog_base.php');
class admin_users extends POG_Base
{
	public $admin_usersId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $username;
	
	/**
	 * @var CHAR(40)
	 */
	public $password;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $salt;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $privalleges;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $logged_in_key;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $age;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $uaip;
	
	/**
	 * @var TINYINT
	 */
	public $account_version;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $reset_key;
	
	/**
	 * @var TINYINT
	 */
	public $hide_tips;
	
	/**
	 * @var TINYINT
	 */
	public $system_menu;
	
	/**
	 * @var TEXT
	 */
	public $hidden_tips;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $page_filter_lang;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $page_filter_search;
	
	/**
	 * @var SMALLINT
	 */
	public $page_filter_page;
	
	/**
	 * @var SMALLINT
	 */
	public $page_filter_parent;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $page_filter_type;
	
	/**
	 * @var SMALLINT
	 */
	public $blog_filter_page;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $blog_filter_lang;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $blog_filter_search;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $newsletter_filter_search;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $newsletter_filter_group;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $products_filter_search;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $snippets_filter_search;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $product_sort_by;
	
	/**
	 * @var SMALLINT
	 */
	public $product_sort_reverse;
	
	/**
	 * @var TINYINT
	 */
	public $receive_stock_alerts;
	
	public $pog_attribute_type = array(
		"admin_usersId" => array('db_attributes' => array("NUMERIC", "INT")),
		"username" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"password" => array('db_attributes' => array("TEXT", "CHAR", "40")),
		"salt" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"privalleges" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"logged_in_key" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"age" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"uaip" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"account_version" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"reset_key" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"hide_tips" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"system_menu" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"hidden_tips" => array('db_attributes' => array("TEXT", "TEXT")),
		"page_filter_lang" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"page_filter_search" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"page_filter_page" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"page_filter_parent" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"page_filter_type" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"blog_filter_page" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"blog_filter_lang" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"blog_filter_search" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"newsletter_filter_search" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"newsletter_filter_group" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"products_filter_search" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"snippets_filter_search" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"product_sort_by" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"product_sort_reverse" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"receive_stock_alerts" => array('db_attributes' => array("NUMERIC", "TINYINT")),
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
	
	function admin_users($username='', $password='', $salt='', $privalleges='', $logged_in_key='', $age='', $uaip='', $account_version='', $reset_key='', $hide_tips='', $system_menu='', $hidden_tips='', $page_filter_lang='', $page_filter_search='', $page_filter_page='', $page_filter_parent='', $page_filter_type='', $blog_filter_page='', $blog_filter_lang='', $blog_filter_search='', $newsletter_filter_search='', $newsletter_filter_group='', $products_filter_search='', $snippets_filter_search='', $product_sort_by='', $product_sort_reverse='', $receive_stock_alerts='')
	{
		$this->username = $username;
		$this->password = $password;
		$this->salt = $salt;
		$this->privalleges = $privalleges;
		$this->logged_in_key = $logged_in_key;
		$this->age = $age;
		$this->uaip = $uaip;
		$this->account_version = $account_version;
		$this->reset_key = $reset_key;
		$this->hide_tips = $hide_tips;
		$this->system_menu = $system_menu;
		$this->hidden_tips = $hidden_tips;
		$this->page_filter_lang = $page_filter_lang;
		$this->page_filter_search = $page_filter_search;
		$this->page_filter_page = $page_filter_page;
		$this->page_filter_parent = $page_filter_parent;
		$this->page_filter_type = $page_filter_type;
		$this->blog_filter_page = $blog_filter_page;
		$this->blog_filter_lang = $blog_filter_lang;
		$this->blog_filter_search = $blog_filter_search;
		$this->newsletter_filter_search = $newsletter_filter_search;
		$this->newsletter_filter_group = $newsletter_filter_group;
		$this->products_filter_search = $products_filter_search;
		$this->snippets_filter_search = $snippets_filter_search;
		$this->product_sort_by = $product_sort_by;
		$this->product_sort_reverse = $product_sort_reverse;
		$this->receive_stock_alerts = $receive_stock_alerts;
	}
	
	
	/**
	* Gets object from database
	* @param integer $admin_usersId 
	* @return object $admin_users
	*/
	function Get($admin_usersId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `admin_users` where `admin_usersid`='".intval($admin_usersId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->admin_usersId = $row['admin_usersid'];
			$this->username = $this->Unescape($row['username']);
			$this->password = $this->Unescape($row['password']);
			$this->salt = $this->Unescape($row['salt']);
			$this->privalleges = $this->Unescape($row['privalleges']);
			$this->logged_in_key = $this->Unescape($row['logged_in_key']);
			$this->age = $this->Unescape($row['age']);
			$this->uaip = $this->Unescape($row['uaip']);
			$this->account_version = $this->Unescape($row['account_version']);
			$this->reset_key = $this->Unescape($row['reset_key']);
			$this->hide_tips = $this->Unescape($row['hide_tips']);
			$this->system_menu = $this->Unescape($row['system_menu']);
			$this->hidden_tips = $this->Unescape($row['hidden_tips']);
			$this->page_filter_lang = $this->Unescape($row['page_filter_lang']);
			$this->page_filter_search = $this->Unescape($row['page_filter_search']);
			$this->page_filter_page = $this->Unescape($row['page_filter_page']);
			$this->page_filter_parent = $this->Unescape($row['page_filter_parent']);
			$this->page_filter_type = $this->Unescape($row['page_filter_type']);
			$this->blog_filter_page = $this->Unescape($row['blog_filter_page']);
			$this->blog_filter_lang = $this->Unescape($row['blog_filter_lang']);
			$this->blog_filter_search = $this->Unescape($row['blog_filter_search']);
			$this->newsletter_filter_search = $this->Unescape($row['newsletter_filter_search']);
			$this->newsletter_filter_group = $this->Unescape($row['newsletter_filter_group']);
			$this->products_filter_search = $this->Unescape($row['products_filter_search']);
			$this->snippets_filter_search = $this->Unescape($row['snippets_filter_search']);
			$this->product_sort_by = $this->Unescape($row['product_sort_by']);
			$this->product_sort_reverse = $this->Unescape($row['product_sort_reverse']);
			$this->receive_stock_alerts = $this->Unescape($row['receive_stock_alerts']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $admin_usersList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `admin_users` ";
		$admin_usersList = Array();
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
			$sortBy = "admin_usersid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$admin_users = new $thisObjectName();
			$admin_users->admin_usersId = $row['admin_usersid'];
			$admin_users->username = $this->Unescape($row['username']);
			$admin_users->password = $this->Unescape($row['password']);
			$admin_users->salt = $this->Unescape($row['salt']);
			$admin_users->privalleges = $this->Unescape($row['privalleges']);
			$admin_users->logged_in_key = $this->Unescape($row['logged_in_key']);
			$admin_users->age = $this->Unescape($row['age']);
			$admin_users->uaip = $this->Unescape($row['uaip']);
			$admin_users->account_version = $this->Unescape($row['account_version']);
			$admin_users->reset_key = $this->Unescape($row['reset_key']);
			$admin_users->hide_tips = $this->Unescape($row['hide_tips']);
			$admin_users->system_menu = $this->Unescape($row['system_menu']);
			$admin_users->hidden_tips = $this->Unescape($row['hidden_tips']);
			$admin_users->page_filter_lang = $this->Unescape($row['page_filter_lang']);
			$admin_users->page_filter_search = $this->Unescape($row['page_filter_search']);
			$admin_users->page_filter_page = $this->Unescape($row['page_filter_page']);
			$admin_users->page_filter_parent = $this->Unescape($row['page_filter_parent']);
			$admin_users->page_filter_type = $this->Unescape($row['page_filter_type']);
			$admin_users->blog_filter_page = $this->Unescape($row['blog_filter_page']);
			$admin_users->blog_filter_lang = $this->Unescape($row['blog_filter_lang']);
			$admin_users->blog_filter_search = $this->Unescape($row['blog_filter_search']);
			$admin_users->newsletter_filter_search = $this->Unescape($row['newsletter_filter_search']);
			$admin_users->newsletter_filter_group = $this->Unescape($row['newsletter_filter_group']);
			$admin_users->products_filter_search = $this->Unescape($row['products_filter_search']);
			$admin_users->snippets_filter_search = $this->Unescape($row['snippets_filter_search']);
			$admin_users->product_sort_by = $this->Unescape($row['product_sort_by']);
			$admin_users->product_sort_reverse = $this->Unescape($row['product_sort_reverse']);
			$admin_users->receive_stock_alerts = $this->Unescape($row['receive_stock_alerts']);
			$admin_usersList[] = $admin_users;
		}
		return $admin_usersList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $admin_usersId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->admin_usersId!=''){
			$this->pog_query = "select `admin_usersid` from `admin_users` where `admin_usersid`='".$this->admin_usersId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `admin_users` set 
			`username`='".$this->Escape($this->username)."', 
			`password`='".$this->Escape($this->password)."', 
			`salt`='".$this->Escape($this->salt)."', 
			`privalleges`='".$this->Escape($this->privalleges)."', 
			`logged_in_key`='".$this->Escape($this->logged_in_key)."', 
			`age`='".$this->Escape($this->age)."', 
			`uaip`='".$this->Escape($this->uaip)."', 
			`account_version`='".$this->Escape($this->account_version)."', 
			`reset_key`='".$this->Escape($this->reset_key)."', 
			`hide_tips`='".$this->Escape($this->hide_tips)."', 
			`system_menu`='".$this->Escape($this->system_menu)."', 
			`hidden_tips`='".$this->Escape($this->hidden_tips)."', 
			`page_filter_lang`='".$this->Escape($this->page_filter_lang)."', 
			`page_filter_search`='".$this->Escape($this->page_filter_search)."', 
			`page_filter_page`='".$this->Escape($this->page_filter_page)."', 
			`page_filter_parent`='".$this->Escape($this->page_filter_parent)."', 
			`page_filter_type`='".$this->Escape($this->page_filter_type)."', 
			`blog_filter_page`='".$this->Escape($this->blog_filter_page)."', 
			`blog_filter_lang`='".$this->Escape($this->blog_filter_lang)."', 
			`blog_filter_search`='".$this->Escape($this->blog_filter_search)."', 
			`newsletter_filter_search`='".$this->Escape($this->newsletter_filter_search)."', 
			`newsletter_filter_group`='".$this->Escape($this->newsletter_filter_group)."', 
			`products_filter_search`='".$this->Escape($this->products_filter_search)."', 
			`snippets_filter_search`='".$this->Escape($this->snippets_filter_search)."', 
			`product_sort_by`='".$this->Escape($this->product_sort_by)."', 
			`product_sort_reverse`='".$this->Escape($this->product_sort_reverse)."', 
			`receive_stock_alerts`='".$this->Escape($this->receive_stock_alerts)."' where `admin_usersid`='".$this->admin_usersId."'";
		}
		else
		{
			$this->pog_query = "insert into `admin_users` (`username`, `password`, `salt`, `privalleges`, `logged_in_key`, `age`, `uaip`, `account_version`, `reset_key`, `hide_tips`, `system_menu`, `hidden_tips`, `page_filter_lang`, `page_filter_search`, `page_filter_page`, `page_filter_parent`, `page_filter_type`, `blog_filter_page`, `blog_filter_lang`, `blog_filter_search`, `newsletter_filter_search`, `newsletter_filter_group`, `products_filter_search`, `snippets_filter_search`, `product_sort_by`, `product_sort_reverse`, `receive_stock_alerts` ) values (
			'".$this->Escape($this->username)."', 
			'".$this->Escape($this->password)."', 
			'".$this->Escape($this->salt)."', 
			'".$this->Escape($this->privalleges)."', 
			'".$this->Escape($this->logged_in_key)."', 
			'".$this->Escape($this->age)."', 
			'".$this->Escape($this->uaip)."', 
			'".$this->Escape($this->account_version)."', 
			'".$this->Escape($this->reset_key)."', 
			'".$this->Escape($this->hide_tips)."', 
			'".$this->Escape($this->system_menu)."', 
			'".$this->Escape($this->hidden_tips)."', 
			'".$this->Escape($this->page_filter_lang)."', 
			'".$this->Escape($this->page_filter_search)."', 
			'".$this->Escape($this->page_filter_page)."', 
			'".$this->Escape($this->page_filter_parent)."', 
			'".$this->Escape($this->page_filter_type)."', 
			'".$this->Escape($this->blog_filter_page)."', 
			'".$this->Escape($this->blog_filter_lang)."', 
			'".$this->Escape($this->blog_filter_search)."', 
			'".$this->Escape($this->newsletter_filter_search)."', 
			'".$this->Escape($this->newsletter_filter_group)."', 
			'".$this->Escape($this->products_filter_search)."', 
			'".$this->Escape($this->snippets_filter_search)."', 
			'".$this->Escape($this->product_sort_by)."', 
			'".$this->Escape($this->product_sort_reverse)."', 
			'".$this->Escape($this->receive_stock_alerts)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->admin_usersId == "")
		{
			$this->admin_usersId = $insertId;
		}
		return $this->admin_usersId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $admin_usersId
	*/
	function SaveNew()
	{
		$this->admin_usersId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `admin_users` where `admin_usersid`='".$this->admin_usersId."'";
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
			$pog_query = "delete from `admin_users` where ";
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