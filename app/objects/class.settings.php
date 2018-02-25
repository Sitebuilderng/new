<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `settings` (
	`settingsid` int(11) NOT NULL auto_increment,
	`tracking_code` TEXT NOT NULL,
	`livechat_status` VARCHAR(255) NOT NULL,
	`livechat_name` VARCHAR(255) NOT NULL,
	`livechat_message` VARCHAR(255) NOT NULL,
	`mini_nav` VARCHAR(255) NOT NULL,
	`page_filter_lang` VARCHAR(255) NOT NULL,
	`page_filter_search` VARCHAR(255) NOT NULL,
	`page_filter_page` SMALLINT NOT NULL,
	`blog_filter_page` SMALLINT NOT NULL,
	`blog_filter_lang` VARCHAR(255) NOT NULL,
	`blog_filter_search` VARCHAR(255) NOT NULL,
	`blog_filter_author` MEDIUMINT NOT NULL,
	`blog_filter_cat` VARCHAR(255) NOT NULL,
	`page_filter_parent` SMALLINT NOT NULL,
	`page_filter_show` SMALLINT NOT NULL,
	`page_filter_type` VARCHAR(255) NOT NULL,
	`newsletter_filter_page` SMALLINT NOT NULL,
	`newsletter_filter_search` VARCHAR(255) NOT NULL,
	`db_version` SMALLINT NOT NULL,
	`newsletter_filter_group` VARCHAR(255) NOT NULL,
	`products_filter_page` SMALLINT NOT NULL,
	`products_filter_search` VARCHAR(255) NOT NULL,
	`products_filter_show` SMALLINT NOT NULL,
	`snippets_filter_page` SMALLINT NOT NULL,
	`snippets_filter_search` VARCHAR(255) NOT NULL,
	`snippets_filter_show` SMALLINT NOT NULL,
	`newsletter_notify_me` INT NOT NULL,
	`form_on_checkout` SMALLINT NOT NULL,
	`theme_vars` MEDIUMTEXT NOT NULL,
	`facebook_token` TEXT NOT NULL,
	`facebook_id` TEXT NOT NULL,
	`facebook_connected` INT NOT NULL,
	`facebook_name` TEXT NOT NULL,
	`facebook_import_tags` TEXT NOT NULL,
	`facebook_import_blog` INT NOT NULL,
	`facebook_pin_tag` TEXT NOT NULL, PRIMARY KEY  (`settingsid`)) ENGINE=MyISAM;
*/

/**
* <b>settings</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=settings&attributeList=array+%28%0A++0+%3D%3E+%27tracking_code%27%2C%0A++1+%3D%3E+%27livechat_status%27%2C%0A++2+%3D%3E+%27livechat_name%27%2C%0A++3+%3D%3E+%27livechat_message%27%2C%0A++4+%3D%3E+%27mini_nav%27%2C%0A++5+%3D%3E+%27page_filter_lang%27%2C%0A++6+%3D%3E+%27page_filter_search%27%2C%0A++7+%3D%3E+%27page_filter_page%27%2C%0A++8+%3D%3E+%27blog_filter_page%27%2C%0A++9+%3D%3E+%27blog_filter_lang%27%2C%0A++10+%3D%3E+%27blog_filter_search%27%2C%0A++11+%3D%3E+%27blog_filter_author%27%2C%0A++12+%3D%3E+%27blog_filter_cat%27%2C%0A++13+%3D%3E+%27page_filter_parent%27%2C%0A++14+%3D%3E+%27page_filter_show%27%2C%0A++15+%3D%3E+%27page_filter_type%27%2C%0A++16+%3D%3E+%27newsletter_filter_page%27%2C%0A++17+%3D%3E+%27newsletter_filter_search%27%2C%0A++18+%3D%3E+%27db_version%27%2C%0A++19+%3D%3E+%27newsletter_filter_group%27%2C%0A++20+%3D%3E+%27products_filter_page%27%2C%0A++21+%3D%3E+%27products_filter_search%27%2C%0A++22+%3D%3E+%27products_filter_show%27%2C%0A++23+%3D%3E+%27snippets_filter_page%27%2C%0A++24+%3D%3E+%27snippets_filter_search%27%2C%0A++25+%3D%3E+%27snippets_filter_show%27%2C%0A++26+%3D%3E+%27newsletter_notify_me%27%2C%0A++27+%3D%3E+%27form_on_checkout%27%2C%0A++28+%3D%3E+%27theme_vars%27%2C%0A++29+%3D%3E+%27facebook_token%27%2C%0A++30+%3D%3E+%27facebook_id%27%2C%0A++31+%3D%3E+%27facebook_connected%27%2C%0A++32+%3D%3E+%27facebook_name%27%2C%0A++33+%3D%3E+%27facebook_import_tags%27%2C%0A++34+%3D%3E+%27facebook_import_blog%27%2C%0A++35+%3D%3E+%27facebook_pin_tag%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527TEXT%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B5%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B6%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B7%2B%253D%253E%2B%2527SMALLINT%2527%252C%250A%2B%2B8%2B%253D%253E%2B%2527SMALLINT%2527%252C%250A%2B%2B9%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B10%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B11%2B%253D%253E%2B%2527MEDIUMINT%2527%252C%250A%2B%2B12%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B13%2B%253D%253E%2B%2527SMALLINT%2527%252C%250A%2B%2B14%2B%253D%253E%2B%2527SMALLINT%2527%252C%250A%2B%2B15%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B16%2B%253D%253E%2B%2527SMALLINT%2527%252C%250A%2B%2B17%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B18%2B%253D%253E%2B%2527SMALLINT%2527%252C%250A%2B%2B19%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B20%2B%253D%253E%2B%2527SMALLINT%2527%252C%250A%2B%2B21%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B22%2B%253D%253E%2B%2527SMALLINT%2527%252C%250A%2B%2B23%2B%253D%253E%2B%2527SMALLINT%2527%252C%250A%2B%2B24%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B25%2B%253D%253E%2B%2527SMALLINT%2527%252C%250A%2B%2B26%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B27%2B%253D%253E%2B%2527SMALLINT%2527%252C%250A%2B%2B28%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B29%2B%253D%253E%2B%2527TEXT%2527%252C%250A%2B%2B30%2B%253D%253E%2B%2527TEXT%2527%252C%250A%2B%2B31%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B32%2B%253D%253E%2B%2527TEXT%2527%252C%250A%2B%2B33%2B%253D%253E%2B%2527TEXT%2527%252C%250A%2B%2B34%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B35%2B%253D%253E%2B%2527TEXT%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A++2+%3D%3E+%27%27%2C%0A++3+%3D%3E+%27%27%2C%0A++4+%3D%3E+%27%27%2C%0A++5+%3D%3E+%27%27%2C%0A++6+%3D%3E+%27%27%2C%0A++7+%3D%3E+%27%27%2C%0A++8+%3D%3E+%27%27%2C%0A++9+%3D%3E+%27%27%2C%0A++10+%3D%3E+%27%27%2C%0A++11+%3D%3E+%27%27%2C%0A++12+%3D%3E+%27%27%2C%0A++13+%3D%3E+%27%27%2C%0A++14+%3D%3E+%27%27%2C%0A++15+%3D%3E+%27%27%2C%0A++16+%3D%3E+%27%27%2C%0A++17+%3D%3E+%27%27%2C%0A++18+%3D%3E+%27%27%2C%0A++19+%3D%3E+%27%27%2C%0A++20+%3D%3E+%27%27%2C%0A++21+%3D%3E+%27%27%2C%0A++22+%3D%3E+%27%27%2C%0A++23+%3D%3E+%27%27%2C%0A++24+%3D%3E+%27%27%2C%0A++25+%3D%3E+%27%27%2C%0A++26+%3D%3E+%27%27%2C%0A++27+%3D%3E+%27%27%2C%0A++28+%3D%3E+%27%27%2C%0A++29+%3D%3E+%27%27%2C%0A++30+%3D%3E+%27%27%2C%0A++31+%3D%3E+%27%27%2C%0A++32+%3D%3E+%27%27%2C%0A++33+%3D%3E+%27%27%2C%0A++34+%3D%3E+%27%27%2C%0A++35+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class settings extends POG_Base
{
	public $settingsId = '';

	/**
	 * @var TEXT
	 */
	public $tracking_code;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $livechat_status;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $livechat_name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $livechat_message;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $mini_nav;
	
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
	 * @var MEDIUMINT
	 */
	public $blog_filter_author;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $blog_filter_cat;
	
	/**
	 * @var SMALLINT
	 */
	public $page_filter_parent;
	
	/**
	 * @var SMALLINT
	 */
	public $page_filter_show;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $page_filter_type;
	
	/**
	 * @var SMALLINT
	 */
	public $newsletter_filter_page;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $newsletter_filter_search;
	
	/**
	 * @var SMALLINT
	 */
	public $db_version;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $newsletter_filter_group;
	
	/**
	 * @var SMALLINT
	 */
	public $products_filter_page;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $products_filter_search;
	
	/**
	 * @var SMALLINT
	 */
	public $products_filter_show;
	
	/**
	 * @var SMALLINT
	 */
	public $snippets_filter_page;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $snippets_filter_search;
	
	/**
	 * @var SMALLINT
	 */
	public $snippets_filter_show;
	
	/**
	 * @var INT
	 */
	public $newsletter_notify_me;
	
	/**
	 * @var SMALLINT
	 */
	public $form_on_checkout;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $theme_vars;
	
	/**
	 * @var TEXT
	 */
	public $facebook_token;
	
	/**
	 * @var TEXT
	 */
	public $facebook_id;
	
	/**
	 * @var INT
	 */
	public $facebook_connected;
	
	/**
	 * @var TEXT
	 */
	public $facebook_name;
	
	/**
	 * @var TEXT
	 */
	public $facebook_import_tags;
	
	/**
	 * @var INT
	 */
	public $facebook_import_blog;
	
	/**
	 * @var TEXT
	 */
	public $facebook_pin_tag;
	
	public $pog_attribute_type = array(
		"settingsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"tracking_code" => array('db_attributes' => array("TEXT", "TEXT")),
		"livechat_status" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"livechat_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"livechat_message" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"mini_nav" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"page_filter_lang" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"page_filter_search" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"page_filter_page" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"blog_filter_page" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"blog_filter_lang" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"blog_filter_search" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"blog_filter_author" => array('db_attributes' => array("NUMERIC", "MEDIUMINT")),
		"blog_filter_cat" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"page_filter_parent" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"page_filter_show" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"page_filter_type" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"newsletter_filter_page" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"newsletter_filter_search" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"db_version" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"newsletter_filter_group" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"products_filter_page" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"products_filter_search" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"products_filter_show" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"snippets_filter_page" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"snippets_filter_search" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"snippets_filter_show" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"newsletter_notify_me" => array('db_attributes' => array("NUMERIC", "INT")),
		"form_on_checkout" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"theme_vars" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"facebook_token" => array('db_attributes' => array("TEXT", "TEXT")),
		"facebook_id" => array('db_attributes' => array("TEXT", "TEXT")),
		"facebook_connected" => array('db_attributes' => array("NUMERIC", "INT")),
		"facebook_name" => array('db_attributes' => array("TEXT", "TEXT")),
		"facebook_import_tags" => array('db_attributes' => array("TEXT", "TEXT")),
		"facebook_import_blog" => array('db_attributes' => array("NUMERIC", "INT")),
		"facebook_pin_tag" => array('db_attributes' => array("TEXT", "TEXT")),
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
	
	function settings($tracking_code='', $livechat_status='', $livechat_name='', $livechat_message='', $mini_nav='', $page_filter_lang='', $page_filter_search='', $page_filter_page='', $blog_filter_page='', $blog_filter_lang='', $blog_filter_search='', $blog_filter_author='', $blog_filter_cat='', $page_filter_parent='', $page_filter_show='', $page_filter_type='', $newsletter_filter_page='', $newsletter_filter_search='', $db_version='', $newsletter_filter_group='', $products_filter_page='', $products_filter_search='', $products_filter_show='', $snippets_filter_page='', $snippets_filter_search='', $snippets_filter_show='', $newsletter_notify_me='', $form_on_checkout='', $theme_vars='', $facebook_token='', $facebook_id='', $facebook_connected='', $facebook_name='', $facebook_import_tags='', $facebook_import_blog='', $facebook_pin_tag='')
	{
		$this->tracking_code = $tracking_code;
		$this->livechat_status = $livechat_status;
		$this->livechat_name = $livechat_name;
		$this->livechat_message = $livechat_message;
		$this->mini_nav = $mini_nav;
		$this->page_filter_lang = $page_filter_lang;
		$this->page_filter_search = $page_filter_search;
		$this->page_filter_page = $page_filter_page;
		$this->blog_filter_page = $blog_filter_page;
		$this->blog_filter_lang = $blog_filter_lang;
		$this->blog_filter_search = $blog_filter_search;
		$this->blog_filter_author = $blog_filter_author;
		$this->blog_filter_cat = $blog_filter_cat;
		$this->page_filter_parent = $page_filter_parent;
		$this->page_filter_show = $page_filter_show;
		$this->page_filter_type = $page_filter_type;
		$this->newsletter_filter_page = $newsletter_filter_page;
		$this->newsletter_filter_search = $newsletter_filter_search;
		$this->db_version = $db_version;
		$this->newsletter_filter_group = $newsletter_filter_group;
		$this->products_filter_page = $products_filter_page;
		$this->products_filter_search = $products_filter_search;
		$this->products_filter_show = $products_filter_show;
		$this->snippets_filter_page = $snippets_filter_page;
		$this->snippets_filter_search = $snippets_filter_search;
		$this->snippets_filter_show = $snippets_filter_show;
		$this->newsletter_notify_me = $newsletter_notify_me;
		$this->form_on_checkout = $form_on_checkout;
		$this->theme_vars = $theme_vars;
		$this->facebook_token = $facebook_token;
		$this->facebook_id = $facebook_id;
		$this->facebook_connected = $facebook_connected;
		$this->facebook_name = $facebook_name;
		$this->facebook_import_tags = $facebook_import_tags;
		$this->facebook_import_blog = $facebook_import_blog;
		$this->facebook_pin_tag = $facebook_pin_tag;
	}
	
	
	/**
	* Gets object from database
	* @param integer $settingsId 
	* @return object $settings
	*/
	function Get($settingsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `settings` where `settingsid`='".intval($settingsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->settingsId = $row['settingsid'];
			$this->tracking_code = $this->Unescape($row['tracking_code']);
			$this->livechat_status = $this->Unescape($row['livechat_status']);
			$this->livechat_name = $this->Unescape($row['livechat_name']);
			$this->livechat_message = $this->Unescape($row['livechat_message']);
			$this->mini_nav = $this->Unescape($row['mini_nav']);
			$this->page_filter_lang = $this->Unescape($row['page_filter_lang']);
			$this->page_filter_search = $this->Unescape($row['page_filter_search']);
			$this->page_filter_page = $this->Unescape($row['page_filter_page']);
			$this->blog_filter_page = $this->Unescape($row['blog_filter_page']);
			$this->blog_filter_lang = $this->Unescape($row['blog_filter_lang']);
			$this->blog_filter_search = $this->Unescape($row['blog_filter_search']);
			$this->blog_filter_author = $this->Unescape($row['blog_filter_author']);
			$this->blog_filter_cat = $this->Unescape($row['blog_filter_cat']);
			$this->page_filter_parent = $this->Unescape($row['page_filter_parent']);
			$this->page_filter_show = $this->Unescape($row['page_filter_show']);
			$this->page_filter_type = $this->Unescape($row['page_filter_type']);
			$this->newsletter_filter_page = $this->Unescape($row['newsletter_filter_page']);
			$this->newsletter_filter_search = $this->Unescape($row['newsletter_filter_search']);
			$this->db_version = $this->Unescape($row['db_version']);
			$this->newsletter_filter_group = $this->Unescape($row['newsletter_filter_group']);
			$this->products_filter_page = $this->Unescape($row['products_filter_page']);
			$this->products_filter_search = $this->Unescape($row['products_filter_search']);
			$this->products_filter_show = $this->Unescape($row['products_filter_show']);
			$this->snippets_filter_page = $this->Unescape($row['snippets_filter_page']);
			$this->snippets_filter_search = $this->Unescape($row['snippets_filter_search']);
			$this->snippets_filter_show = $this->Unescape($row['snippets_filter_show']);
			$this->newsletter_notify_me = $this->Unescape($row['newsletter_notify_me']);
			$this->form_on_checkout = $this->Unescape($row['form_on_checkout']);
			$this->theme_vars = $this->Unescape($row['theme_vars']);
			$this->facebook_token = $this->Unescape($row['facebook_token']);
			$this->facebook_id = $this->Unescape($row['facebook_id']);
			$this->facebook_connected = $this->Unescape($row['facebook_connected']);
			$this->facebook_name = $this->Unescape($row['facebook_name']);
			$this->facebook_import_tags = $this->Unescape($row['facebook_import_tags']);
			$this->facebook_import_blog = $this->Unescape($row['facebook_import_blog']);
			$this->facebook_pin_tag = $this->Unescape($row['facebook_pin_tag']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $settingsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `settings` ";
		$settingsList = Array();
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
			$sortBy = "settingsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$settings = new $thisObjectName();
			$settings->settingsId = $row['settingsid'];
			$settings->tracking_code = $this->Unescape($row['tracking_code']);
			$settings->livechat_status = $this->Unescape($row['livechat_status']);
			$settings->livechat_name = $this->Unescape($row['livechat_name']);
			$settings->livechat_message = $this->Unescape($row['livechat_message']);
			$settings->mini_nav = $this->Unescape($row['mini_nav']);
			$settings->page_filter_lang = $this->Unescape($row['page_filter_lang']);
			$settings->page_filter_search = $this->Unescape($row['page_filter_search']);
			$settings->page_filter_page = $this->Unescape($row['page_filter_page']);
			$settings->blog_filter_page = $this->Unescape($row['blog_filter_page']);
			$settings->blog_filter_lang = $this->Unescape($row['blog_filter_lang']);
			$settings->blog_filter_search = $this->Unescape($row['blog_filter_search']);
			$settings->blog_filter_author = $this->Unescape($row['blog_filter_author']);
			$settings->blog_filter_cat = $this->Unescape($row['blog_filter_cat']);
			$settings->page_filter_parent = $this->Unescape($row['page_filter_parent']);
			$settings->page_filter_show = $this->Unescape($row['page_filter_show']);
			$settings->page_filter_type = $this->Unescape($row['page_filter_type']);
			$settings->newsletter_filter_page = $this->Unescape($row['newsletter_filter_page']);
			$settings->newsletter_filter_search = $this->Unescape($row['newsletter_filter_search']);
			$settings->db_version = $this->Unescape($row['db_version']);
			$settings->newsletter_filter_group = $this->Unescape($row['newsletter_filter_group']);
			$settings->products_filter_page = $this->Unescape($row['products_filter_page']);
			$settings->products_filter_search = $this->Unescape($row['products_filter_search']);
			$settings->products_filter_show = $this->Unescape($row['products_filter_show']);
			$settings->snippets_filter_page = $this->Unescape($row['snippets_filter_page']);
			$settings->snippets_filter_search = $this->Unescape($row['snippets_filter_search']);
			$settings->snippets_filter_show = $this->Unescape($row['snippets_filter_show']);
			$settings->newsletter_notify_me = $this->Unescape($row['newsletter_notify_me']);
			$settings->form_on_checkout = $this->Unescape($row['form_on_checkout']);
			$settings->theme_vars = $this->Unescape($row['theme_vars']);
			$settings->facebook_token = $this->Unescape($row['facebook_token']);
			$settings->facebook_id = $this->Unescape($row['facebook_id']);
			$settings->facebook_connected = $this->Unescape($row['facebook_connected']);
			$settings->facebook_name = $this->Unescape($row['facebook_name']);
			$settings->facebook_import_tags = $this->Unescape($row['facebook_import_tags']);
			$settings->facebook_import_blog = $this->Unescape($row['facebook_import_blog']);
			$settings->facebook_pin_tag = $this->Unescape($row['facebook_pin_tag']);
			$settingsList[] = $settings;
		}
		return $settingsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $settingsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->settingsId!=''){
			$this->pog_query = "select `settingsid` from `settings` where `settingsid`='".$this->settingsId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `settings` set 
			`tracking_code`='".$this->Escape($this->tracking_code)."', 
			`livechat_status`='".$this->Escape($this->livechat_status)."', 
			`livechat_name`='".$this->Escape($this->livechat_name)."', 
			`livechat_message`='".$this->Escape($this->livechat_message)."', 
			`mini_nav`='".$this->Escape($this->mini_nav)."', 
			`page_filter_lang`='".$this->Escape($this->page_filter_lang)."', 
			`page_filter_search`='".$this->Escape($this->page_filter_search)."', 
			`page_filter_page`='".$this->Escape($this->page_filter_page)."', 
			`blog_filter_page`='".$this->Escape($this->blog_filter_page)."', 
			`blog_filter_lang`='".$this->Escape($this->blog_filter_lang)."', 
			`blog_filter_search`='".$this->Escape($this->blog_filter_search)."', 
			`blog_filter_author`='".$this->Escape($this->blog_filter_author)."', 
			`blog_filter_cat`='".$this->Escape($this->blog_filter_cat)."', 
			`page_filter_parent`='".$this->Escape($this->page_filter_parent)."', 
			`page_filter_show`='".$this->Escape($this->page_filter_show)."', 
			`page_filter_type`='".$this->Escape($this->page_filter_type)."', 
			`newsletter_filter_page`='".$this->Escape($this->newsletter_filter_page)."', 
			`newsletter_filter_search`='".$this->Escape($this->newsletter_filter_search)."', 
			`db_version`='".$this->Escape($this->db_version)."', 
			`newsletter_filter_group`='".$this->Escape($this->newsletter_filter_group)."', 
			`products_filter_page`='".$this->Escape($this->products_filter_page)."', 
			`products_filter_search`='".$this->Escape($this->products_filter_search)."', 
			`products_filter_show`='".$this->Escape($this->products_filter_show)."', 
			`snippets_filter_page`='".$this->Escape($this->snippets_filter_page)."', 
			`snippets_filter_search`='".$this->Escape($this->snippets_filter_search)."', 
			`snippets_filter_show`='".$this->Escape($this->snippets_filter_show)."', 
			`newsletter_notify_me`='".$this->Escape($this->newsletter_notify_me)."', 
			`form_on_checkout`='".$this->Escape($this->form_on_checkout)."', 
			`theme_vars`='".$this->Escape($this->theme_vars)."', 
			`facebook_token`='".$this->Escape($this->facebook_token)."', 
			`facebook_id`='".$this->Escape($this->facebook_id)."', 
			`facebook_connected`='".$this->Escape($this->facebook_connected)."', 
			`facebook_name`='".$this->Escape($this->facebook_name)."', 
			`facebook_import_tags`='".$this->Escape($this->facebook_import_tags)."', 
			`facebook_import_blog`='".$this->Escape($this->facebook_import_blog)."', 
			`facebook_pin_tag`='".$this->Escape($this->facebook_pin_tag)."' where `settingsid`='".$this->settingsId."'";
		}
		else
		{
			$this->pog_query = "insert into `settings` (`tracking_code`, `livechat_status`, `livechat_name`, `livechat_message`, `mini_nav`, `page_filter_lang`, `page_filter_search`, `page_filter_page`, `blog_filter_page`, `blog_filter_lang`, `blog_filter_search`, `blog_filter_author`, `blog_filter_cat`, `page_filter_parent`, `page_filter_show`, `page_filter_type`, `newsletter_filter_page`, `newsletter_filter_search`, `db_version`, `newsletter_filter_group`, `products_filter_page`, `products_filter_search`, `products_filter_show`, `snippets_filter_page`, `snippets_filter_search`, `snippets_filter_show`, `newsletter_notify_me`, `form_on_checkout`, `theme_vars`, `facebook_token`, `facebook_id`, `facebook_connected`, `facebook_name`, `facebook_import_tags`, `facebook_import_blog`, `facebook_pin_tag` ) values (
			'".$this->Escape($this->tracking_code)."', 
			'".$this->Escape($this->livechat_status)."', 
			'".$this->Escape($this->livechat_name)."', 
			'".$this->Escape($this->livechat_message)."', 
			'".$this->Escape($this->mini_nav)."', 
			'".$this->Escape($this->page_filter_lang)."', 
			'".$this->Escape($this->page_filter_search)."', 
			'".$this->Escape($this->page_filter_page)."', 
			'".$this->Escape($this->blog_filter_page)."', 
			'".$this->Escape($this->blog_filter_lang)."', 
			'".$this->Escape($this->blog_filter_search)."', 
			'".$this->Escape($this->blog_filter_author)."', 
			'".$this->Escape($this->blog_filter_cat)."', 
			'".$this->Escape($this->page_filter_parent)."', 
			'".$this->Escape($this->page_filter_show)."', 
			'".$this->Escape($this->page_filter_type)."', 
			'".$this->Escape($this->newsletter_filter_page)."', 
			'".$this->Escape($this->newsletter_filter_search)."', 
			'".$this->Escape($this->db_version)."', 
			'".$this->Escape($this->newsletter_filter_group)."', 
			'".$this->Escape($this->products_filter_page)."', 
			'".$this->Escape($this->products_filter_search)."', 
			'".$this->Escape($this->products_filter_show)."', 
			'".$this->Escape($this->snippets_filter_page)."', 
			'".$this->Escape($this->snippets_filter_search)."', 
			'".$this->Escape($this->snippets_filter_show)."', 
			'".$this->Escape($this->newsletter_notify_me)."', 
			'".$this->Escape($this->form_on_checkout)."', 
			'".$this->Escape($this->theme_vars)."', 
			'".$this->Escape($this->facebook_token)."', 
			'".$this->Escape($this->facebook_id)."', 
			'".$this->Escape($this->facebook_connected)."', 
			'".$this->Escape($this->facebook_name)."', 
			'".$this->Escape($this->facebook_import_tags)."', 
			'".$this->Escape($this->facebook_import_blog)."', 
			'".$this->Escape($this->facebook_pin_tag)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->settingsId == "")
		{
			$this->settingsId = $insertId;
		}
		return $this->settingsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $settingsId
	*/
	function SaveNew()
	{
		$this->settingsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `settings` where `settingsid`='".$this->settingsId."'";
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
			$pog_query = "delete from `settings` where ";
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