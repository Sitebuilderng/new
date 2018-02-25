<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `static_pages` (
	`static_pagesid` int(11) NOT NULL auto_increment,
	`pagetitle` VARCHAR(255) NOT NULL,
	`order` VARCHAR(255) NOT NULL,
	`keywords` MEDIUMTEXT NOT NULL,
	`summary` MEDIUMTEXT NOT NULL,
	`content` MEDIUMTEXT NOT NULL,
	`homepage` VARCHAR(255) NOT NULL,
	`gallery` VARCHAR(255) NOT NULL,
	`longtitle` VARCHAR(255) NOT NULL,
	`form` VARCHAR(255) NOT NULL,
	`parent` VARCHAR(255) NOT NULL,
	`live` VARCHAR(255) NOT NULL,
	`type` VARCHAR(255) NOT NULL,
	`template` VARCHAR(255) NOT NULL,
	`language` VARCHAR(255) NOT NULL,
	`calendar` VARCHAR(255) NOT NULL,
	`blog` VARCHAR(255) NOT NULL,
	`playlist` VARCHAR(255) NOT NULL,
	`content2` TEXT NOT NULL,
	`newsletter` VARCHAR(255) NOT NULL,
	`shop` VARCHAR(255) NOT NULL,
	`deleted` VARCHAR(255) NOT NULL,
	`sitemap` VARCHAR(255) NOT NULL,
	`locked` VARCHAR(255) NOT NULL,
	`security` VARCHAR(255) NOT NULL,
	`last_updated` INT NOT NULL,
	`content_right` MEDIUMTEXT NOT NULL,
	`content_left` MEDIUMTEXT NOT NULL,
	`content2_left` MEDIUMTEXT NOT NULL,
	`content2_right` MEDIUMTEXT NOT NULL,
	`top_parent` VARCHAR(255) NOT NULL,
	`url_str` VARCHAR(255) NOT NULL,
	`pic_url` VARCHAR(255) NOT NULL,
	`clone_source` INT NOT NULL,
	`in_clipboard` TINYINT NOT NULL,
	`disable_caching` TINYINT NOT NULL,
	`exclude_from_menu` INT NOT NULL,
	`redirect_to` MEDIUMTEXT NOT NULL,
	`static_pages_versions_id` INT NOT NULL,
	`content_editor` MEDIUMTEXT NOT NULL,
	`preview_as_email` TINYINT NOT NULL,
	`page_preview` MEDIUMTEXT NOT NULL,
	`redirect_first` TINYINT NOT NULL,
	`new_window` INT NOT NULL,
	`noindex` INT NOT NULL, PRIMARY KEY  (`static_pagesid`)) ENGINE=MyISAM;
*/

/**
* <b>static_pages</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=static_pages&attributeList=array+%28%0A++0+%3D%3E+%27pagetitle%27%2C%0A++1+%3D%3E+%27order%27%2C%0A++2+%3D%3E+%27keywords%27%2C%0A++3+%3D%3E+%27summary%27%2C%0A++4+%3D%3E+%27content%27%2C%0A++5+%3D%3E+%27homepage%27%2C%0A++6+%3D%3E+%27gallery%27%2C%0A++7+%3D%3E+%27longtitle%27%2C%0A++8+%3D%3E+%27form%27%2C%0A++9+%3D%3E+%27parent%27%2C%0A++10+%3D%3E+%27live%27%2C%0A++11+%3D%3E+%27type%27%2C%0A++12+%3D%3E+%27template%27%2C%0A++13+%3D%3E+%27language%27%2C%0A++14+%3D%3E+%27calendar%27%2C%0A++15+%3D%3E+%27blog%27%2C%0A++16+%3D%3E+%27playlist%27%2C%0A++17+%3D%3E+%27content2%27%2C%0A++18+%3D%3E+%27newsletter%27%2C%0A++19+%3D%3E+%27shop%27%2C%0A++20+%3D%3E+%27deleted%27%2C%0A++21+%3D%3E+%27sitemap%27%2C%0A++22+%3D%3E+%27locked%27%2C%0A++23+%3D%3E+%27security%27%2C%0A++24+%3D%3E+%27last_updated%27%2C%0A++25+%3D%3E+%27content_right%27%2C%0A++26+%3D%3E+%27content_left%27%2C%0A++27+%3D%3E+%27content2_left%27%2C%0A++28+%3D%3E+%27content2_right%27%2C%0A++29+%3D%3E+%27top_parent%27%2C%0A++30+%3D%3E+%27url_str%27%2C%0A++31+%3D%3E+%27pic_url%27%2C%0A++32+%3D%3E+%27clone_source%27%2C%0A++33+%3D%3E+%27in_clipboard%27%2C%0A++34+%3D%3E+%27disable_caching%27%2C%0A++35+%3D%3E+%27exclude_from_menu%27%2C%0A++36+%3D%3E+%27redirect_to%27%2C%0A++37+%3D%3E+%27static_pages_versions_id%27%2C%0A++38+%3D%3E+%27content_editor%27%2C%0A++39+%3D%3E+%27preview_as_email%27%2C%0A++40+%3D%3E+%27page_preview%27%2C%0A++41+%3D%3E+%27redirect_first%27%2C%0A++42+%3D%3E+%27new_window%27%2C%0A++43+%3D%3E+%27noindex%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B5%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B6%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B7%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B8%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B9%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B10%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B11%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B12%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B13%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B14%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B15%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B16%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B17%2B%253D%253E%2B%2527TEXT%2527%252C%250A%2B%2B18%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B19%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B20%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B21%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B22%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B23%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B24%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B25%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B26%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B27%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B28%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B29%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B30%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B31%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B32%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B33%2B%253D%253E%2B%2527TINYINT%2527%252C%250A%2B%2B34%2B%253D%253E%2B%2527TINYINT%2527%252C%250A%2B%2B35%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B36%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B37%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B38%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B39%2B%253D%253E%2B%2527TINYINT%2527%252C%250A%2B%2B40%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B41%2B%253D%253E%2B%2527TINYINT%2527%252C%250A%2B%2B42%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B43%2B%253D%253E%2B%2527INT%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A++2+%3D%3E+%27%27%2C%0A++3+%3D%3E+%27%27%2C%0A++4+%3D%3E+%27%27%2C%0A++5+%3D%3E+%27%27%2C%0A++6+%3D%3E+%27%27%2C%0A++7+%3D%3E+%27%27%2C%0A++8+%3D%3E+%27%27%2C%0A++9+%3D%3E+%27%27%2C%0A++10+%3D%3E+%27%27%2C%0A++11+%3D%3E+%27%27%2C%0A++12+%3D%3E+%27%27%2C%0A++13+%3D%3E+%27%27%2C%0A++14+%3D%3E+%27%27%2C%0A++15+%3D%3E+%27%27%2C%0A++16+%3D%3E+%27%27%2C%0A++17+%3D%3E+%27%27%2C%0A++18+%3D%3E+%27%27%2C%0A++19+%3D%3E+%27%27%2C%0A++20+%3D%3E+%27%27%2C%0A++21+%3D%3E+%27%27%2C%0A++22+%3D%3E+%27%27%2C%0A++23+%3D%3E+%27%27%2C%0A++24+%3D%3E+%27%27%2C%0A++25+%3D%3E+%27%27%2C%0A++26+%3D%3E+%27%27%2C%0A++27+%3D%3E+%27%27%2C%0A++28+%3D%3E+%27%27%2C%0A++29+%3D%3E+%27%27%2C%0A++30+%3D%3E+%27%27%2C%0A++31+%3D%3E+%27%27%2C%0A++32+%3D%3E+%27%27%2C%0A++33+%3D%3E+%27%27%2C%0A++34+%3D%3E+%27%27%2C%0A++35+%3D%3E+%27%27%2C%0A++36+%3D%3E+%27%27%2C%0A++37+%3D%3E+%27%27%2C%0A++38+%3D%3E+%27%27%2C%0A++39+%3D%3E+%27%27%2C%0A++40+%3D%3E+%27%27%2C%0A++41+%3D%3E+%27%27%2C%0A++42+%3D%3E+%27%27%2C%0A++43+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class static_pages extends POG_Base
{
	public $static_pagesId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $pagetitle;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $order;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $keywords;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $summary;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $content;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $homepage;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $gallery;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $longtitle;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $form;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $parent;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $live;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $type;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $template;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $language;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $calendar;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $blog;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $playlist;
	
	/**
	 * @var TEXT
	 */
	public $content2;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $newsletter;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $shop;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $deleted;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $sitemap;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $locked;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $security;
	
	/**
	 * @var INT
	 */
	public $last_updated;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $content_right;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $content_left;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $content2_left;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $content2_right;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $top_parent;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $url_str;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $pic_url;
	
	/**
	 * @var INT
	 */
	public $clone_source;
	
	/**
	 * @var TINYINT
	 */
	public $in_clipboard;
	
	/**
	 * @var TINYINT
	 */
	public $disable_caching;
	
	/**
	 * @var INT
	 */
	public $exclude_from_menu;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $redirect_to;
	
	/**
	 * @var INT
	 */
	public $static_pages_versions_id;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $content_editor;
	
	/**
	 * @var TINYINT
	 */
	public $preview_as_email;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $page_preview;
	
	/**
	 * @var TINYINT
	 */
	public $redirect_first;
	
	/**
	 * @var INT
	 */
	public $new_window;
	
	/**
	 * @var INT
	 */
	public $noindex;
	
	public $pog_attribute_type = array(
		"static_pagesId" => array('db_attributes' => array("NUMERIC", "INT")),
		"pagetitle" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"order" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"keywords" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"summary" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"content" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"homepage" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"gallery" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"longtitle" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"form" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"parent" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"live" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"type" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"template" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"language" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"calendar" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"blog" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"playlist" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"content2" => array('db_attributes' => array("TEXT", "TEXT")),
		"newsletter" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"shop" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"deleted" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"sitemap" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"locked" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"security" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"last_updated" => array('db_attributes' => array("NUMERIC", "INT")),
		"content_right" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"content_left" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"content2_left" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"content2_right" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"top_parent" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"url_str" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"pic_url" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"clone_source" => array('db_attributes' => array("NUMERIC", "INT")),
		"in_clipboard" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"disable_caching" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"exclude_from_menu" => array('db_attributes' => array("NUMERIC", "INT")),
		"redirect_to" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"static_pages_versions_id" => array('db_attributes' => array("NUMERIC", "INT")),
		"content_editor" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"preview_as_email" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"page_preview" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"redirect_first" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"new_window" => array('db_attributes' => array("NUMERIC", "INT")),
		"noindex" => array('db_attributes' => array("NUMERIC", "INT")),
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
	
	function static_pages($pagetitle='', $order='', $keywords='', $summary='', $content='', $homepage='', $gallery='', $longtitle='', $form='', $parent='', $live='', $type='', $template='', $language='', $calendar='', $blog='', $playlist='', $content2='', $newsletter='', $shop='', $deleted='', $sitemap='', $locked='', $security='', $last_updated='', $content_right='', $content_left='', $content2_left='', $content2_right='', $top_parent='', $url_str='', $pic_url='', $clone_source='', $in_clipboard='', $disable_caching='', $exclude_from_menu='', $redirect_to='', $static_pages_versions_id='', $content_editor='', $preview_as_email='', $page_preview='', $redirect_first='', $new_window='', $noindex='')
	{
		$this->pagetitle = $pagetitle;
		$this->order = $order;
		$this->keywords = $keywords;
		$this->summary = $summary;
		$this->content = $content;
		$this->homepage = $homepage;
		$this->gallery = $gallery;
		$this->longtitle = $longtitle;
		$this->form = $form;
		$this->parent = $parent;
		$this->live = $live;
		$this->type = $type;
		$this->template = $template;
		$this->language = $language;
		$this->calendar = $calendar;
		$this->blog = $blog;
		$this->playlist = $playlist;
		$this->content2 = $content2;
		$this->newsletter = $newsletter;
		$this->shop = $shop;
		$this->deleted = $deleted;
		$this->sitemap = $sitemap;
		$this->locked = $locked;
		$this->security = $security;
		$this->last_updated = $last_updated;
		$this->content_right = $content_right;
		$this->content_left = $content_left;
		$this->content2_left = $content2_left;
		$this->content2_right = $content2_right;
		$this->top_parent = $top_parent;
		$this->url_str = $url_str;
		$this->pic_url = $pic_url;
		$this->clone_source = $clone_source;
		$this->in_clipboard = $in_clipboard;
		$this->disable_caching = $disable_caching;
		$this->exclude_from_menu = $exclude_from_menu;
		$this->redirect_to = $redirect_to;
		$this->static_pages_versions_id = $static_pages_versions_id;
		$this->content_editor = $content_editor;
		$this->preview_as_email = $preview_as_email;
		$this->page_preview = $page_preview;
		$this->redirect_first = $redirect_first;
		$this->new_window = $new_window;
		$this->noindex = $noindex;
	}
	
	
	/**
	* Gets object from database
	* @param integer $static_pagesId 
	* @return object $static_pages
	*/
	function Get($static_pagesId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `static_pages` where `static_pagesid`='".intval($static_pagesId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->static_pagesId = $row['static_pagesid'];
			$this->pagetitle = $this->Unescape($row['pagetitle']);
			$this->order = $this->Unescape($row['order']);
			$this->keywords = $this->Unescape($row['keywords']);
			$this->summary = $this->Unescape($row['summary']);
			$this->content = $this->Unescape($row['content']);
			$this->homepage = $this->Unescape($row['homepage']);
			$this->gallery = $this->Unescape($row['gallery']);
			$this->longtitle = $this->Unescape($row['longtitle']);
			$this->form = $this->Unescape($row['form']);
			$this->parent = $this->Unescape($row['parent']);
			$this->live = $this->Unescape($row['live']);
			$this->type = $this->Unescape($row['type']);
			$this->template = $this->Unescape($row['template']);
			$this->language = $this->Unescape($row['language']);
			$this->calendar = $this->Unescape($row['calendar']);
			$this->blog = $this->Unescape($row['blog']);
			$this->playlist = $this->Unescape($row['playlist']);
			$this->content2 = $this->Unescape($row['content2']);
			$this->newsletter = $this->Unescape($row['newsletter']);
			$this->shop = $this->Unescape($row['shop']);
			$this->deleted = $this->Unescape($row['deleted']);
			$this->sitemap = $this->Unescape($row['sitemap']);
			$this->locked = $this->Unescape($row['locked']);
			$this->security = $this->Unescape($row['security']);
			$this->last_updated = $this->Unescape($row['last_updated']);
			$this->content_right = $this->Unescape($row['content_right']);
			$this->content_left = $this->Unescape($row['content_left']);
			$this->content2_left = $this->Unescape($row['content2_left']);
			$this->content2_right = $this->Unescape($row['content2_right']);
			$this->top_parent = $this->Unescape($row['top_parent']);
			$this->url_str = $this->Unescape($row['url_str']);
			$this->pic_url = $this->Unescape($row['pic_url']);
			$this->clone_source = $this->Unescape($row['clone_source']);
			$this->in_clipboard = $this->Unescape($row['in_clipboard']);
			$this->disable_caching = $this->Unescape($row['disable_caching']);
			$this->exclude_from_menu = $this->Unescape($row['exclude_from_menu']);
			$this->redirect_to = $this->Unescape($row['redirect_to']);
			$this->static_pages_versions_id = $this->Unescape($row['static_pages_versions_id']);
			$this->content_editor = $this->Unescape($row['content_editor']);
			$this->preview_as_email = $this->Unescape($row['preview_as_email']);
			$this->page_preview = $this->Unescape($row['page_preview']);
			$this->redirect_first = $this->Unescape($row['redirect_first']);
			$this->new_window = $this->Unescape($row['new_window']);
			$this->noindex = $this->Unescape($row['noindex']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $static_pagesList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `static_pages` ";
		$static_pagesList = Array();
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
			$sortBy = "static_pagesid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$static_pages = new $thisObjectName();
			$static_pages->static_pagesId = $row['static_pagesid'];
			$static_pages->pagetitle = $this->Unescape($row['pagetitle']);
			$static_pages->order = $this->Unescape($row['order']);
			$static_pages->keywords = $this->Unescape($row['keywords']);
			$static_pages->summary = $this->Unescape($row['summary']);
			$static_pages->content = $this->Unescape($row['content']);
			$static_pages->homepage = $this->Unescape($row['homepage']);
			$static_pages->gallery = $this->Unescape($row['gallery']);
			$static_pages->longtitle = $this->Unescape($row['longtitle']);
			$static_pages->form = $this->Unescape($row['form']);
			$static_pages->parent = $this->Unescape($row['parent']);
			$static_pages->live = $this->Unescape($row['live']);
			$static_pages->type = $this->Unescape($row['type']);
			$static_pages->template = $this->Unescape($row['template']);
			$static_pages->language = $this->Unescape($row['language']);
			$static_pages->calendar = $this->Unescape($row['calendar']);
			$static_pages->blog = $this->Unescape($row['blog']);
			$static_pages->playlist = $this->Unescape($row['playlist']);
			$static_pages->content2 = $this->Unescape($row['content2']);
			$static_pages->newsletter = $this->Unescape($row['newsletter']);
			$static_pages->shop = $this->Unescape($row['shop']);
			$static_pages->deleted = $this->Unescape($row['deleted']);
			$static_pages->sitemap = $this->Unescape($row['sitemap']);
			$static_pages->locked = $this->Unescape($row['locked']);
			$static_pages->security = $this->Unescape($row['security']);
			$static_pages->last_updated = $this->Unescape($row['last_updated']);
			$static_pages->content_right = $this->Unescape($row['content_right']);
			$static_pages->content_left = $this->Unescape($row['content_left']);
			$static_pages->content2_left = $this->Unescape($row['content2_left']);
			$static_pages->content2_right = $this->Unescape($row['content2_right']);
			$static_pages->top_parent = $this->Unescape($row['top_parent']);
			$static_pages->url_str = $this->Unescape($row['url_str']);
			$static_pages->pic_url = $this->Unescape($row['pic_url']);
			$static_pages->clone_source = $this->Unescape($row['clone_source']);
			$static_pages->in_clipboard = $this->Unescape($row['in_clipboard']);
			$static_pages->disable_caching = $this->Unescape($row['disable_caching']);
			$static_pages->exclude_from_menu = $this->Unescape($row['exclude_from_menu']);
			$static_pages->redirect_to = $this->Unescape($row['redirect_to']);
			$static_pages->static_pages_versions_id = $this->Unescape($row['static_pages_versions_id']);
			$static_pages->content_editor = $this->Unescape($row['content_editor']);
			$static_pages->preview_as_email = $this->Unescape($row['preview_as_email']);
			$static_pages->page_preview = $this->Unescape($row['page_preview']);
			$static_pages->redirect_first = $this->Unescape($row['redirect_first']);
			$static_pages->new_window = $this->Unescape($row['new_window']);
			$static_pages->noindex = $this->Unescape($row['noindex']);
			$static_pagesList[] = $static_pages;
		}
		return $static_pagesList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $static_pagesId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->static_pagesId!=''){
			$this->pog_query = "select `static_pagesid` from `static_pages` where `static_pagesid`='".$this->static_pagesId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `static_pages` set 
			`pagetitle`='".$this->Escape($this->pagetitle)."', 
			`order`='".$this->Escape($this->order)."', 
			`keywords`='".$this->Escape($this->keywords)."', 
			`summary`='".$this->Escape($this->summary)."', 
			`content`='".$this->Escape($this->content)."', 
			`homepage`='".$this->Escape($this->homepage)."', 
			`gallery`='".$this->Escape($this->gallery)."', 
			`longtitle`='".$this->Escape($this->longtitle)."', 
			`form`='".$this->Escape($this->form)."', 
			`parent`='".$this->Escape($this->parent)."', 
			`live`='".$this->Escape($this->live)."', 
			`type`='".$this->Escape($this->type)."', 
			`template`='".$this->Escape($this->template)."', 
			`language`='".$this->Escape($this->language)."', 
			`calendar`='".$this->Escape($this->calendar)."', 
			`blog`='".$this->Escape($this->blog)."', 
			`playlist`='".$this->Escape($this->playlist)."', 
			`content2`='".$this->Escape($this->content2)."', 
			`newsletter`='".$this->Escape($this->newsletter)."', 
			`shop`='".$this->Escape($this->shop)."', 
			`deleted`='".$this->Escape($this->deleted)."', 
			`sitemap`='".$this->Escape($this->sitemap)."', 
			`locked`='".$this->Escape($this->locked)."', 
			`security`='".$this->Escape($this->security)."', 
			`last_updated`='".$this->Escape($this->last_updated)."', 
			`content_right`='".$this->Escape($this->content_right)."', 
			`content_left`='".$this->Escape($this->content_left)."', 
			`content2_left`='".$this->Escape($this->content2_left)."', 
			`content2_right`='".$this->Escape($this->content2_right)."', 
			`top_parent`='".$this->Escape($this->top_parent)."', 
			`url_str`='".$this->Escape($this->url_str)."', 
			`pic_url`='".$this->Escape($this->pic_url)."', 
			`clone_source`='".$this->Escape($this->clone_source)."', 
			`in_clipboard`='".$this->Escape($this->in_clipboard)."', 
			`disable_caching`='".$this->Escape($this->disable_caching)."', 
			`exclude_from_menu`='".$this->Escape($this->exclude_from_menu)."', 
			`redirect_to`='".$this->Escape($this->redirect_to)."', 
			`static_pages_versions_id`='".$this->Escape($this->static_pages_versions_id)."', 
			`content_editor`='".$this->Escape($this->content_editor)."', 
			`preview_as_email`='".$this->Escape($this->preview_as_email)."', 
			`page_preview`='".$this->Escape($this->page_preview)."', 
			`redirect_first`='".$this->Escape($this->redirect_first)."', 
			`new_window`='".$this->Escape($this->new_window)."', 
			`noindex`='".$this->Escape($this->noindex)."' where `static_pagesid`='".$this->static_pagesId."'";
		}
		else
		{
			$this->pog_query = "insert into `static_pages` (`pagetitle`, `order`, `keywords`, `summary`, `content`, `homepage`, `gallery`, `longtitle`, `form`, `parent`, `live`, `type`, `template`, `language`, `calendar`, `blog`, `playlist`, `content2`, `newsletter`, `shop`, `deleted`, `sitemap`, `locked`, `security`, `last_updated`, `content_right`, `content_left`, `content2_left`, `content2_right`, `top_parent`, `url_str`, `pic_url`, `clone_source`, `in_clipboard`, `disable_caching`, `exclude_from_menu`, `redirect_to`, `static_pages_versions_id`, `content_editor`, `preview_as_email`, `page_preview`, `redirect_first`, `new_window`, `noindex` ) values (
			'".$this->Escape($this->pagetitle)."', 
			'".$this->Escape($this->order)."', 
			'".$this->Escape($this->keywords)."', 
			'".$this->Escape($this->summary)."', 
			'".$this->Escape($this->content)."', 
			'".$this->Escape($this->homepage)."', 
			'".$this->Escape($this->gallery)."', 
			'".$this->Escape($this->longtitle)."', 
			'".$this->Escape($this->form)."', 
			'".$this->Escape($this->parent)."', 
			'".$this->Escape($this->live)."', 
			'".$this->Escape($this->type)."', 
			'".$this->Escape($this->template)."', 
			'".$this->Escape($this->language)."', 
			'".$this->Escape($this->calendar)."', 
			'".$this->Escape($this->blog)."', 
			'".$this->Escape($this->playlist)."', 
			'".$this->Escape($this->content2)."', 
			'".$this->Escape($this->newsletter)."', 
			'".$this->Escape($this->shop)."', 
			'".$this->Escape($this->deleted)."', 
			'".$this->Escape($this->sitemap)."', 
			'".$this->Escape($this->locked)."', 
			'".$this->Escape($this->security)."', 
			'".$this->Escape($this->last_updated)."', 
			'".$this->Escape($this->content_right)."', 
			'".$this->Escape($this->content_left)."', 
			'".$this->Escape($this->content2_left)."', 
			'".$this->Escape($this->content2_right)."', 
			'".$this->Escape($this->top_parent)."', 
			'".$this->Escape($this->url_str)."', 
			'".$this->Escape($this->pic_url)."', 
			'".$this->Escape($this->clone_source)."', 
			'".$this->Escape($this->in_clipboard)."', 
			'".$this->Escape($this->disable_caching)."', 
			'".$this->Escape($this->exclude_from_menu)."', 
			'".$this->Escape($this->redirect_to)."', 
			'".$this->Escape($this->static_pages_versions_id)."', 
			'".$this->Escape($this->content_editor)."', 
			'".$this->Escape($this->preview_as_email)."', 
			'".$this->Escape($this->page_preview)."', 
			'".$this->Escape($this->redirect_first)."', 
			'".$this->Escape($this->new_window)."', 
			'".$this->Escape($this->noindex)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->static_pagesId == "")
		{
			$this->static_pagesId = $insertId;
		}
		return $this->static_pagesId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $static_pagesId
	*/
	function SaveNew()
	{
		$this->static_pagesId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `static_pages` where `static_pagesid`='".$this->static_pagesId."'";
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
			$pog_query = "delete from `static_pages` where ";
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