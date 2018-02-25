<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `blog_entries` (
	`blog_entriesid` int(11) NOT NULL auto_increment,
	`in_categories` VARCHAR(255) NOT NULL,
	`tags` VARCHAR(255) NOT NULL,
	`title` VARCHAR(255) NOT NULL,
	`summary` TEXT NOT NULL,
	`keywords` TEXT NOT NULL,
	`content` MEDIUMTEXT NOT NULL,
	`timestamp` VARCHAR(255) NOT NULL,
	`ad1` TEXT NOT NULL,
	`ad2` TEXT NOT NULL,
	`author` VARCHAR(255) NOT NULL,
	`live` VARCHAR(3) NOT NULL,
	`longtitle` VARCHAR(255) NOT NULL,
	`playlist` VARCHAR(255) NOT NULL,
	`language` VARCHAR(2) NOT NULL,
	`gallery` VARCHAR(255) NOT NULL,
	`content2` MEDIUMTEXT NOT NULL,
	`deleted` VARCHAR(255) NOT NULL,
	`from_fb` INT NOT NULL,
	`fb_id` TEXT NOT NULL,
	`pinned` INT NOT NULL, PRIMARY KEY  (`blog_entriesid`)) ENGINE=MyISAM;
*/

/**
* <b>blog_entries</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=blog_entries&attributeList=array+%28%0A++0+%3D%3E+%27in_categories%27%2C%0A++1+%3D%3E+%27tags%27%2C%0A++2+%3D%3E+%27title%27%2C%0A++3+%3D%3E+%27summary%27%2C%0A++4+%3D%3E+%27keywords%27%2C%0A++5+%3D%3E+%27content%27%2C%0A++6+%3D%3E+%27timestamp%27%2C%0A++7+%3D%3E+%27ad1%27%2C%0A++8+%3D%3E+%27ad2%27%2C%0A++9+%3D%3E+%27author%27%2C%0A++10+%3D%3E+%27live%27%2C%0A++11+%3D%3E+%27longtitle%27%2C%0A++12+%3D%3E+%27playlist%27%2C%0A++13+%3D%3E+%27language%27%2C%0A++14+%3D%3E+%27gallery%27%2C%0A++15+%3D%3E+%27content2%27%2C%0A++16+%3D%3E+%27deleted%27%2C%0A++17+%3D%3E+%27from_fb%27%2C%0A++18+%3D%3E+%27fb_id%27%2C%0A++19+%3D%3E+%27pinned%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++1+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++2+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++3+%3D%3E+%27TEXT%27%2C%0A++4+%3D%3E+%27TEXT%27%2C%0A++5+%3D%3E+%27MEDIUMTEXT%27%2C%0A++6+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++7+%3D%3E+%27TEXT%27%2C%0A++8+%3D%3E+%27TEXT%27%2C%0A++9+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++10+%3D%3E+%27VARCHAR%283%29%27%2C%0A++11+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++12+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++13+%3D%3E+%27VARCHAR%282%29%27%2C%0A++14+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++15+%3D%3E+%27MEDIUMTEXT%27%2C%0A++16+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++17+%3D%3E+%27INT%27%2C%0A++18+%3D%3E+%27TEXT%27%2C%0A++19+%3D%3E+%27INT%27%2C%0A%29
*/
include_once('class.pog_base.php');
class blog_entries extends POG_Base
{
	public $blog_entriesId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $in_categories;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $tags;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $title;
	
	/**
	 * @var TEXT
	 */
	public $summary;
	
	/**
	 * @var TEXT
	 */
	public $keywords;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $content;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $timestamp;
	
	/**
	 * @var TEXT
	 */
	public $ad1;
	
	/**
	 * @var TEXT
	 */
	public $ad2;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $author;
	
	/**
	 * @var VARCHAR(3)
	 */
	public $live;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $longtitle;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $playlist;
	
	/**
	 * @var VARCHAR(2)
	 */
	public $language;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $gallery;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $content2;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $deleted;
	
	/**
	 * @var INT
	 */
	public $from_fb;
	
	/**
	 * @var TEXT
	 */
	public $fb_id;
	
	/**
	 * @var INT
	 */
	public $pinned;
	
	public $pog_attribute_type = array(
		"blog_entriesId" => array('db_attributes' => array("NUMERIC", "INT")),
		"in_categories" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"tags" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"title" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"summary" => array('db_attributes' => array("TEXT", "TEXT")),
		"keywords" => array('db_attributes' => array("TEXT", "TEXT")),
		"content" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"timestamp" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"ad1" => array('db_attributes' => array("TEXT", "TEXT")),
		"ad2" => array('db_attributes' => array("TEXT", "TEXT")),
		"author" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"live" => array('db_attributes' => array("TEXT", "VARCHAR", "3")),
		"longtitle" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"playlist" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"language" => array('db_attributes' => array("TEXT", "VARCHAR", "2")),
		"gallery" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"content2" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"deleted" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"from_fb" => array('db_attributes' => array("NUMERIC", "INT")),
		"fb_id" => array('db_attributes' => array("TEXT", "TEXT")),
		"pinned" => array('db_attributes' => array("NUMERIC", "INT")),
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
	
	function blog_entries($in_categories='', $tags='', $title='', $summary='', $keywords='', $content='', $timestamp='', $ad1='', $ad2='', $author='', $live='', $longtitle='', $playlist='', $language='', $gallery='', $content2='', $deleted='', $from_fb='', $fb_id='', $pinned='')
	{
		$this->in_categories = $in_categories;
		$this->tags = $tags;
		$this->title = $title;
		$this->summary = $summary;
		$this->keywords = $keywords;
		$this->content = $content;
		$this->timestamp = $timestamp;
		$this->ad1 = $ad1;
		$this->ad2 = $ad2;
		$this->author = $author;
		$this->live = $live;
		$this->longtitle = $longtitle;
		$this->playlist = $playlist;
		$this->language = $language;
		$this->gallery = $gallery;
		$this->content2 = $content2;
		$this->deleted = $deleted;
		$this->from_fb = $from_fb;
		$this->fb_id = $fb_id;
		$this->pinned = $pinned;
	}
	
	
	/**
	* Gets object from database
	* @param integer $blog_entriesId 
	* @return object $blog_entries
	*/
	function Get($blog_entriesId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `blog_entries` where `blog_entriesid`='".intval($blog_entriesId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->blog_entriesId = $row['blog_entriesid'];
			$this->in_categories = $this->Unescape($row['in_categories']);
			$this->tags = $this->Unescape($row['tags']);
			$this->title = $this->Unescape($row['title']);
			$this->summary = $this->Unescape($row['summary']);
			$this->keywords = $this->Unescape($row['keywords']);
			$this->content = $this->Unescape($row['content']);
			$this->timestamp = $this->Unescape($row['timestamp']);
			$this->ad1 = $this->Unescape($row['ad1']);
			$this->ad2 = $this->Unescape($row['ad2']);
			$this->author = $this->Unescape($row['author']);
			$this->live = $this->Unescape($row['live']);
			$this->longtitle = $this->Unescape($row['longtitle']);
			$this->playlist = $this->Unescape($row['playlist']);
			$this->language = $this->Unescape($row['language']);
			$this->gallery = $this->Unescape($row['gallery']);
			$this->content2 = $this->Unescape($row['content2']);
			$this->deleted = $this->Unescape($row['deleted']);
			$this->from_fb = $this->Unescape($row['from_fb']);
			$this->fb_id = $this->Unescape($row['fb_id']);
			$this->pinned = $this->Unescape($row['pinned']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $blog_entriesList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `blog_entries` ";
		$blog_entriesList = Array();
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
			$sortBy = "blog_entriesid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$blog_entries = new $thisObjectName();
			$blog_entries->blog_entriesId = $row['blog_entriesid'];
			$blog_entries->in_categories = $this->Unescape($row['in_categories']);
			$blog_entries->tags = $this->Unescape($row['tags']);
			$blog_entries->title = $this->Unescape($row['title']);
			$blog_entries->summary = $this->Unescape($row['summary']);
			$blog_entries->keywords = $this->Unescape($row['keywords']);
			$blog_entries->content = $this->Unescape($row['content']);
			$blog_entries->timestamp = $this->Unescape($row['timestamp']);
			$blog_entries->ad1 = $this->Unescape($row['ad1']);
			$blog_entries->ad2 = $this->Unescape($row['ad2']);
			$blog_entries->author = $this->Unescape($row['author']);
			$blog_entries->live = $this->Unescape($row['live']);
			$blog_entries->longtitle = $this->Unescape($row['longtitle']);
			$blog_entries->playlist = $this->Unescape($row['playlist']);
			$blog_entries->language = $this->Unescape($row['language']);
			$blog_entries->gallery = $this->Unescape($row['gallery']);
			$blog_entries->content2 = $this->Unescape($row['content2']);
			$blog_entries->deleted = $this->Unescape($row['deleted']);
			$blog_entries->from_fb = $this->Unescape($row['from_fb']);
			$blog_entries->fb_id = $this->Unescape($row['fb_id']);
			$blog_entries->pinned = $this->Unescape($row['pinned']);
			$blog_entriesList[] = $blog_entries;
		}
		return $blog_entriesList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $blog_entriesId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->blog_entriesId!=''){
			$this->pog_query = "select `blog_entriesid` from `blog_entries` where `blog_entriesid`='".$this->blog_entriesId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `blog_entries` set 
			`in_categories`='".$this->Escape($this->in_categories)."', 
			`tags`='".$this->Escape($this->tags)."', 
			`title`='".$this->Escape($this->title)."', 
			`summary`='".$this->Escape($this->summary)."', 
			`keywords`='".$this->Escape($this->keywords)."', 
			`content`='".$this->Escape($this->content)."', 
			`timestamp`='".$this->Escape($this->timestamp)."', 
			`ad1`='".$this->Escape($this->ad1)."', 
			`ad2`='".$this->Escape($this->ad2)."', 
			`author`='".$this->Escape($this->author)."', 
			`live`='".$this->Escape($this->live)."', 
			`longtitle`='".$this->Escape($this->longtitle)."', 
			`playlist`='".$this->Escape($this->playlist)."', 
			`language`='".$this->Escape($this->language)."', 
			`gallery`='".$this->Escape($this->gallery)."', 
			`content2`='".$this->Escape($this->content2)."', 
			`deleted`='".$this->Escape($this->deleted)."', 
			`from_fb`='".$this->Escape($this->from_fb)."', 
			`fb_id`='".$this->Escape($this->fb_id)."', 
			`pinned`='".$this->Escape($this->pinned)."' where `blog_entriesid`='".$this->blog_entriesId."'";
		}
		else
		{
			$this->pog_query = "insert into `blog_entries` (`in_categories`, `tags`, `title`, `summary`, `keywords`, `content`, `timestamp`, `ad1`, `ad2`, `author`, `live`, `longtitle`, `playlist`, `language`, `gallery`, `content2`, `deleted`, `from_fb`, `fb_id`, `pinned` ) values (
			'".$this->Escape($this->in_categories)."', 
			'".$this->Escape($this->tags)."', 
			'".$this->Escape($this->title)."', 
			'".$this->Escape($this->summary)."', 
			'".$this->Escape($this->keywords)."', 
			'".$this->Escape($this->content)."', 
			'".$this->Escape($this->timestamp)."', 
			'".$this->Escape($this->ad1)."', 
			'".$this->Escape($this->ad2)."', 
			'".$this->Escape($this->author)."', 
			'".$this->Escape($this->live)."', 
			'".$this->Escape($this->longtitle)."', 
			'".$this->Escape($this->playlist)."', 
			'".$this->Escape($this->language)."', 
			'".$this->Escape($this->gallery)."', 
			'".$this->Escape($this->content2)."', 
			'".$this->Escape($this->deleted)."', 
			'".$this->Escape($this->from_fb)."', 
			'".$this->Escape($this->fb_id)."', 
			'".$this->Escape($this->pinned)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->blog_entriesId == "")
		{
			$this->blog_entriesId = $insertId;
		}
		return $this->blog_entriesId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $blog_entriesId
	*/
	function SaveNew()
	{
		$this->blog_entriesId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `blog_entries` where `blog_entriesid`='".$this->blog_entriesId."'";
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
			$pog_query = "delete from `blog_entries` where ";
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