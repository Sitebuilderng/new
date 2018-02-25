<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `blog_config` (
	`blog_configid` int(11) NOT NULL auto_increment,
	`items_on_page` SMALLINT NOT NULL,
	`sidebar_cal` VARCHAR(3) NOT NULL,
	`sidebar_cats` VARCHAR(3) NOT NULL,
	`sidebar_tags` VARCHAR(3) NOT NULL,
	`comment_email_notification` VARCHAR(255) NOT NULL,
	`related_articles_threshold` VARCHAR(255) NOT NULL,
	`comment_email_from` VARCHAR(255) NOT NULL,
	`comment_email_from_name` VARCHAR(255) NOT NULL,
	`secret_passcode` VARCHAR(255) NOT NULL,
	`sidebar_recent` VARCHAR(255) NOT NULL,
	`number_sidebar_recent` VARCHAR(255) NOT NULL,
	`sidebar_search` VARCHAR(255) NOT NULL,
	`manual_approve` VARCHAR(255) NOT NULL, PRIMARY KEY  (`blog_configid`)) ENGINE=MyISAM;
*/

/**
* <b>blog_config</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=blog_config&attributeList=array+%28%0A++0+%3D%3E+%27items_on_page%27%2C%0A++1+%3D%3E+%27sidebar_cal%27%2C%0A++2+%3D%3E+%27sidebar_cats%27%2C%0A++3+%3D%3E+%27sidebar_tags%27%2C%0A++4+%3D%3E+%27comment_email_notification%27%2C%0A++5+%3D%3E+%27related_articles_threshold%27%2C%0A++6+%3D%3E+%27comment_email_from%27%2C%0A++7+%3D%3E+%27comment_email_from_name%27%2C%0A++8+%3D%3E+%27secret_passcode%27%2C%0A++9+%3D%3E+%27sidebar_recent%27%2C%0A++10+%3D%3E+%27number_sidebar_recent%27%2C%0A++11+%3D%3E+%27sidebar_search%27%2C%0A++12+%3D%3E+%27manual_approve%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527SMALLINT%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527VARCHAR%25283%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527VARCHAR%25283%2529%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527VARCHAR%25283%2529%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B5%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B6%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B7%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B8%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B9%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B10%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B11%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B12%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A++2+%3D%3E+%27%27%2C%0A++3+%3D%3E+%27%27%2C%0A++4+%3D%3E+%27%27%2C%0A++5+%3D%3E+%27%27%2C%0A++6+%3D%3E+%27%27%2C%0A++7+%3D%3E+%27%27%2C%0A++8+%3D%3E+%27%27%2C%0A++9+%3D%3E+%27%27%2C%0A++10+%3D%3E+%27%27%2C%0A++11+%3D%3E+%27%27%2C%0A++12+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class blog_config extends POG_Base
{
	public $blog_configId = '';

	/**
	 * @var SMALLINT
	 */
	public $items_on_page;
	
	/**
	 * @var VARCHAR(3)
	 */
	public $sidebar_cal;
	
	/**
	 * @var VARCHAR(3)
	 */
	public $sidebar_cats;
	
	/**
	 * @var VARCHAR(3)
	 */
	public $sidebar_tags;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $comment_email_notification;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $related_articles_threshold;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $comment_email_from;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $comment_email_from_name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $secret_passcode;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $sidebar_recent;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $number_sidebar_recent;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $sidebar_search;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $manual_approve;
	
	public $pog_attribute_type = array(
		"blog_configId" => array('db_attributes' => array("NUMERIC", "INT")),
		"items_on_page" => array('db_attributes' => array("NUMERIC", "SMALLINT")),
		"sidebar_cal" => array('db_attributes' => array("TEXT", "VARCHAR", "3")),
		"sidebar_cats" => array('db_attributes' => array("TEXT", "VARCHAR", "3")),
		"sidebar_tags" => array('db_attributes' => array("TEXT", "VARCHAR", "3")),
		"comment_email_notification" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"related_articles_threshold" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"comment_email_from" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"comment_email_from_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"secret_passcode" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"sidebar_recent" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"number_sidebar_recent" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"sidebar_search" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"manual_approve" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
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
	
	function blog_config($items_on_page='', $sidebar_cal='', $sidebar_cats='', $sidebar_tags='', $comment_email_notification='', $related_articles_threshold='', $comment_email_from='', $comment_email_from_name='', $secret_passcode='', $sidebar_recent='', $number_sidebar_recent='', $sidebar_search='', $manual_approve='')
	{
		$this->items_on_page = $items_on_page;
		$this->sidebar_cal = $sidebar_cal;
		$this->sidebar_cats = $sidebar_cats;
		$this->sidebar_tags = $sidebar_tags;
		$this->comment_email_notification = $comment_email_notification;
		$this->related_articles_threshold = $related_articles_threshold;
		$this->comment_email_from = $comment_email_from;
		$this->comment_email_from_name = $comment_email_from_name;
		$this->secret_passcode = $secret_passcode;
		$this->sidebar_recent = $sidebar_recent;
		$this->number_sidebar_recent = $number_sidebar_recent;
		$this->sidebar_search = $sidebar_search;
		$this->manual_approve = $manual_approve;
	}
	
	
	/**
	* Gets object from database
	* @param integer $blog_configId 
	* @return object $blog_config
	*/
	function Get($blog_configId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `blog_config` where `blog_configid`='".intval($blog_configId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->blog_configId = $row['blog_configid'];
			$this->items_on_page = $this->Unescape($row['items_on_page']);
			$this->sidebar_cal = $this->Unescape($row['sidebar_cal']);
			$this->sidebar_cats = $this->Unescape($row['sidebar_cats']);
			$this->sidebar_tags = $this->Unescape($row['sidebar_tags']);
			$this->comment_email_notification = $this->Unescape($row['comment_email_notification']);
			$this->related_articles_threshold = $this->Unescape($row['related_articles_threshold']);
			$this->comment_email_from = $this->Unescape($row['comment_email_from']);
			$this->comment_email_from_name = $this->Unescape($row['comment_email_from_name']);
			$this->secret_passcode = $this->Unescape($row['secret_passcode']);
			$this->sidebar_recent = $this->Unescape($row['sidebar_recent']);
			$this->number_sidebar_recent = $this->Unescape($row['number_sidebar_recent']);
			$this->sidebar_search = $this->Unescape($row['sidebar_search']);
			$this->manual_approve = $this->Unescape($row['manual_approve']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $blog_configList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `blog_config` ";
		$blog_configList = Array();
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
			$sortBy = "blog_configid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$blog_config = new $thisObjectName();
			$blog_config->blog_configId = $row['blog_configid'];
			$blog_config->items_on_page = $this->Unescape($row['items_on_page']);
			$blog_config->sidebar_cal = $this->Unescape($row['sidebar_cal']);
			$blog_config->sidebar_cats = $this->Unescape($row['sidebar_cats']);
			$blog_config->sidebar_tags = $this->Unescape($row['sidebar_tags']);
			$blog_config->comment_email_notification = $this->Unescape($row['comment_email_notification']);
			$blog_config->related_articles_threshold = $this->Unescape($row['related_articles_threshold']);
			$blog_config->comment_email_from = $this->Unescape($row['comment_email_from']);
			$blog_config->comment_email_from_name = $this->Unescape($row['comment_email_from_name']);
			$blog_config->secret_passcode = $this->Unescape($row['secret_passcode']);
			$blog_config->sidebar_recent = $this->Unescape($row['sidebar_recent']);
			$blog_config->number_sidebar_recent = $this->Unescape($row['number_sidebar_recent']);
			$blog_config->sidebar_search = $this->Unescape($row['sidebar_search']);
			$blog_config->manual_approve = $this->Unescape($row['manual_approve']);
			$blog_configList[] = $blog_config;
		}
		return $blog_configList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $blog_configId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->blog_configId!=''){
			$this->pog_query = "select `blog_configid` from `blog_config` where `blog_configid`='".$this->blog_configId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `blog_config` set 
			`items_on_page`='".$this->Escape($this->items_on_page)."', 
			`sidebar_cal`='".$this->Escape($this->sidebar_cal)."', 
			`sidebar_cats`='".$this->Escape($this->sidebar_cats)."', 
			`sidebar_tags`='".$this->Escape($this->sidebar_tags)."', 
			`comment_email_notification`='".$this->Escape($this->comment_email_notification)."', 
			`related_articles_threshold`='".$this->Escape($this->related_articles_threshold)."', 
			`comment_email_from`='".$this->Escape($this->comment_email_from)."', 
			`comment_email_from_name`='".$this->Escape($this->comment_email_from_name)."', 
			`secret_passcode`='".$this->Escape($this->secret_passcode)."', 
			`sidebar_recent`='".$this->Escape($this->sidebar_recent)."', 
			`number_sidebar_recent`='".$this->Escape($this->number_sidebar_recent)."', 
			`sidebar_search`='".$this->Escape($this->sidebar_search)."', 
			`manual_approve`='".$this->Escape($this->manual_approve)."' where `blog_configid`='".$this->blog_configId."'";
		}
		else
		{
			$this->pog_query = "insert into `blog_config` (`items_on_page`, `sidebar_cal`, `sidebar_cats`, `sidebar_tags`, `comment_email_notification`, `related_articles_threshold`, `comment_email_from`, `comment_email_from_name`, `secret_passcode`, `sidebar_recent`, `number_sidebar_recent`, `sidebar_search`, `manual_approve` ) values (
			'".$this->Escape($this->items_on_page)."', 
			'".$this->Escape($this->sidebar_cal)."', 
			'".$this->Escape($this->sidebar_cats)."', 
			'".$this->Escape($this->sidebar_tags)."', 
			'".$this->Escape($this->comment_email_notification)."', 
			'".$this->Escape($this->related_articles_threshold)."', 
			'".$this->Escape($this->comment_email_from)."', 
			'".$this->Escape($this->comment_email_from_name)."', 
			'".$this->Escape($this->secret_passcode)."', 
			'".$this->Escape($this->sidebar_recent)."', 
			'".$this->Escape($this->number_sidebar_recent)."', 
			'".$this->Escape($this->sidebar_search)."', 
			'".$this->Escape($this->manual_approve)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->blog_configId == "")
		{
			$this->blog_configId = $insertId;
		}
		return $this->blog_configId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $blog_configId
	*/
	function SaveNew()
	{
		$this->blog_configId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `blog_config` where `blog_configid`='".$this->blog_configId."'";
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
			$pog_query = "delete from `blog_config` where ";
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