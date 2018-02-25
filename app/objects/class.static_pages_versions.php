<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `static_pages_versions` (
	`static_pages_versionsid` int(11) NOT NULL auto_increment,
	`pagetitle` VARCHAR(255) NOT NULL,
	`keywords` VARCHAR(255) NOT NULL,
	`summary` VARCHAR(255) NOT NULL,
	`content` MEDIUMTEXT NOT NULL,
	`longtitle` VARCHAR(255) NOT NULL,
	`content2` TEXT NOT NULL,
	`date_saved` INT NOT NULL,
	`belongs_to_static_page_id` VARCHAR(255) NOT NULL,
	`content_left` MEDIUMTEXT NOT NULL,
	`content_right` MEDIUMTEXT NOT NULL,
	`content2_left` MEDIUMTEXT NOT NULL,
	`content2_right` MEDIUMTEXT NOT NULL,
	`draft` TINYINT NOT NULL,
	`content_editor` MEDIUMTEXT NOT NULL, PRIMARY KEY  (`static_pages_versionsid`)) ENGINE=MyISAM;
*/

/**
* <b>static_pages_versions</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=static_pages_versions&attributeList=array+%28%0A++0+%3D%3E+%27pagetitle%27%2C%0A++1+%3D%3E+%27keywords%27%2C%0A++2+%3D%3E+%27summary%27%2C%0A++3+%3D%3E+%27content%27%2C%0A++4+%3D%3E+%27longtitle%27%2C%0A++5+%3D%3E+%27content2%27%2C%0A++6+%3D%3E+%27date_saved%27%2C%0A++7+%3D%3E+%27belongs_to_static_page_id%27%2C%0A++8+%3D%3E+%27content_left%27%2C%0A++9+%3D%3E+%27content_right%27%2C%0A++10+%3D%3E+%27content2_left%27%2C%0A++11+%3D%3E+%27content2_right%27%2C%0A++12+%3D%3E+%27draft%27%2C%0A++13+%3D%3E+%27content_editor%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B5%2B%253D%253E%2B%2527TEXT%2527%252C%250A%2B%2B6%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B7%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B8%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B9%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B10%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B11%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B12%2B%253D%253E%2B%2527TINYINT%2527%252C%250A%2B%2B13%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A++2+%3D%3E+%27%27%2C%0A++3+%3D%3E+%27%27%2C%0A++4+%3D%3E+%27%27%2C%0A++5+%3D%3E+%27%27%2C%0A++6+%3D%3E+%27%27%2C%0A++7+%3D%3E+%27%27%2C%0A++8+%3D%3E+%27%27%2C%0A++9+%3D%3E+%27%27%2C%0A++10+%3D%3E+%27%27%2C%0A++11+%3D%3E+%27%27%2C%0A++12+%3D%3E+%27%27%2C%0A++13+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class static_pages_versions extends POG_Base
{
	public $static_pages_versionsId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $pagetitle;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $keywords;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $summary;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $content;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $longtitle;
	
	/**
	 * @var TEXT
	 */
	public $content2;
	
	/**
	 * @var INT
	 */
	public $date_saved;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $belongs_to_static_page_id;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $content_left;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $content_right;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $content2_left;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $content2_right;
	
	/**
	 * @var TINYINT
	 */
	public $draft;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $content_editor;
	
	public $pog_attribute_type = array(
		"static_pages_versionsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"pagetitle" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"keywords" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"summary" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"content" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"longtitle" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"content2" => array('db_attributes' => array("TEXT", "TEXT")),
		"date_saved" => array('db_attributes' => array("NUMERIC", "INT")),
		"belongs_to_static_page_id" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"content_left" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"content_right" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"content2_left" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"content2_right" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"draft" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"content_editor" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
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
	
	function static_pages_versions($pagetitle='', $keywords='', $summary='', $content='', $longtitle='', $content2='', $date_saved='', $belongs_to_static_page_id='', $content_left='', $content_right='', $content2_left='', $content2_right='', $draft='', $content_editor='')
	{
		$this->pagetitle = $pagetitle;
		$this->keywords = $keywords;
		$this->summary = $summary;
		$this->content = $content;
		$this->longtitle = $longtitle;
		$this->content2 = $content2;
		$this->date_saved = $date_saved;
		$this->belongs_to_static_page_id = $belongs_to_static_page_id;
		$this->content_left = $content_left;
		$this->content_right = $content_right;
		$this->content2_left = $content2_left;
		$this->content2_right = $content2_right;
		$this->draft = $draft;
		$this->content_editor = $content_editor;
	}
	
	
	/**
	* Gets object from database
	* @param integer $static_pages_versionsId 
	* @return object $static_pages_versions
	*/
	function Get($static_pages_versionsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `static_pages_versions` where `static_pages_versionsid`='".intval($static_pages_versionsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->static_pages_versionsId = $row['static_pages_versionsid'];
			$this->pagetitle = $this->Unescape($row['pagetitle']);
			$this->keywords = $this->Unescape($row['keywords']);
			$this->summary = $this->Unescape($row['summary']);
			$this->content = $this->Unescape($row['content']);
			$this->longtitle = $this->Unescape($row['longtitle']);
			$this->content2 = $this->Unescape($row['content2']);
			$this->date_saved = $this->Unescape($row['date_saved']);
			$this->belongs_to_static_page_id = $this->Unescape($row['belongs_to_static_page_id']);
			$this->content_left = $this->Unescape($row['content_left']);
			$this->content_right = $this->Unescape($row['content_right']);
			$this->content2_left = $this->Unescape($row['content2_left']);
			$this->content2_right = $this->Unescape($row['content2_right']);
			$this->draft = $this->Unescape($row['draft']);
			$this->content_editor = $this->Unescape($row['content_editor']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $static_pages_versionsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `static_pages_versions` ";
		$static_pages_versionsList = Array();
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
			$sortBy = "static_pages_versionsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$static_pages_versions = new $thisObjectName();
			$static_pages_versions->static_pages_versionsId = $row['static_pages_versionsid'];
			$static_pages_versions->pagetitle = $this->Unescape($row['pagetitle']);
			$static_pages_versions->keywords = $this->Unescape($row['keywords']);
			$static_pages_versions->summary = $this->Unescape($row['summary']);
			$static_pages_versions->content = $this->Unescape($row['content']);
			$static_pages_versions->longtitle = $this->Unescape($row['longtitle']);
			$static_pages_versions->content2 = $this->Unescape($row['content2']);
			$static_pages_versions->date_saved = $this->Unescape($row['date_saved']);
			$static_pages_versions->belongs_to_static_page_id = $this->Unescape($row['belongs_to_static_page_id']);
			$static_pages_versions->content_left = $this->Unescape($row['content_left']);
			$static_pages_versions->content_right = $this->Unescape($row['content_right']);
			$static_pages_versions->content2_left = $this->Unescape($row['content2_left']);
			$static_pages_versions->content2_right = $this->Unescape($row['content2_right']);
			$static_pages_versions->draft = $this->Unescape($row['draft']);
			$static_pages_versions->content_editor = $this->Unescape($row['content_editor']);
			$static_pages_versionsList[] = $static_pages_versions;
		}
		return $static_pages_versionsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $static_pages_versionsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->static_pages_versionsId!=''){
			$this->pog_query = "select `static_pages_versionsid` from `static_pages_versions` where `static_pages_versionsid`='".$this->static_pages_versionsId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `static_pages_versions` set 
			`pagetitle`='".$this->Escape($this->pagetitle)."', 
			`keywords`='".$this->Escape($this->keywords)."', 
			`summary`='".$this->Escape($this->summary)."', 
			`content`='".$this->Escape($this->content)."', 
			`longtitle`='".$this->Escape($this->longtitle)."', 
			`content2`='".$this->Escape($this->content2)."', 
			`date_saved`='".$this->Escape($this->date_saved)."', 
			`belongs_to_static_page_id`='".$this->Escape($this->belongs_to_static_page_id)."', 
			`content_left`='".$this->Escape($this->content_left)."', 
			`content_right`='".$this->Escape($this->content_right)."', 
			`content2_left`='".$this->Escape($this->content2_left)."', 
			`content2_right`='".$this->Escape($this->content2_right)."', 
			`draft`='".$this->Escape($this->draft)."', 
			`content_editor`='".$this->Escape($this->content_editor)."' where `static_pages_versionsid`='".$this->static_pages_versionsId."'";
		}
		else
		{
			$this->pog_query = "insert into `static_pages_versions` (`pagetitle`, `keywords`, `summary`, `content`, `longtitle`, `content2`, `date_saved`, `belongs_to_static_page_id`, `content_left`, `content_right`, `content2_left`, `content2_right`, `draft`, `content_editor` ) values (
			'".$this->Escape($this->pagetitle)."', 
			'".$this->Escape($this->keywords)."', 
			'".$this->Escape($this->summary)."', 
			'".$this->Escape($this->content)."', 
			'".$this->Escape($this->longtitle)."', 
			'".$this->Escape($this->content2)."', 
			'".$this->Escape($this->date_saved)."', 
			'".$this->Escape($this->belongs_to_static_page_id)."', 
			'".$this->Escape($this->content_left)."', 
			'".$this->Escape($this->content_right)."', 
			'".$this->Escape($this->content2_left)."', 
			'".$this->Escape($this->content2_right)."', 
			'".$this->Escape($this->draft)."', 
			'".$this->Escape($this->content_editor)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->static_pages_versionsId == "")
		{
			$this->static_pages_versionsId = $insertId;
		}
		return $this->static_pages_versionsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $static_pages_versionsId
	*/
	function SaveNew()
	{
		$this->static_pages_versionsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `static_pages_versions` where `static_pages_versionsid`='".$this->static_pages_versionsId."'";
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
			$pog_query = "delete from `static_pages_versions` where ";
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