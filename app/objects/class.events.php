<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `events` (
	`eventsid` int(11) NOT NULL auto_increment,
	`title` VARCHAR(255) NOT NULL,
	`day` VARCHAR(255) NOT NULL,
	`month` VARCHAR(255) NOT NULL,
	`year` VARCHAR(255) NOT NULL,
	`link` VARCHAR(255) NOT NULL,
	`summary` MEDIUMTEXT NOT NULL,
	`belongs_to_category` INT NOT NULL,
	`location` VARCHAR(255) NOT NULL,
	`time` VARCHAR(255) NOT NULL,
	`image` VARCHAR(255) NOT NULL,
	`duration` VARCHAR(255) NOT NULL,
	`date` DATE NOT NULL, PRIMARY KEY  (`eventsid`)) ENGINE=MyISAM;
*/

/**
* <b>events</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=events&attributeList=array+%28%0A++0+%3D%3E+%27title%27%2C%0A++1+%3D%3E+%27day%27%2C%0A++2+%3D%3E+%27month%27%2C%0A++3+%3D%3E+%27year%27%2C%0A++4+%3D%3E+%27link%27%2C%0A++5+%3D%3E+%27summary%27%2C%0A++6+%3D%3E+%27belongs_to_category%27%2C%0A++7+%3D%3E+%27location%27%2C%0A++8+%3D%3E+%27time%27%2C%0A++9+%3D%3E+%27image%27%2C%0A++10+%3D%3E+%27duration%27%2C%0A++11+%3D%3E+%27date%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B5%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B6%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B7%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B8%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B9%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B10%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B11%2B%253D%253E%2B%2527DATE%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A++2+%3D%3E+%27%27%2C%0A++3+%3D%3E+%27%27%2C%0A++4+%3D%3E+%27%27%2C%0A++5+%3D%3E+%27%27%2C%0A++6+%3D%3E+%27%27%2C%0A++7+%3D%3E+%27%27%2C%0A++8+%3D%3E+%27%27%2C%0A++9+%3D%3E+%27%27%2C%0A++10+%3D%3E+%27%27%2C%0A++11+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class events extends POG_Base
{
	public $eventsId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $title;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $day;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $month;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $year;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $link;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $summary;
	
	/**
	 * @var INT
	 */
	public $belongs_to_category;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $location;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $time;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $image;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $duration;
	
	/**
	 * @var DATE
	 */
	public $date;
	
	public $pog_attribute_type = array(
		"eventsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"title" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"day" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"month" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"year" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"link" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"summary" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"belongs_to_category" => array('db_attributes' => array("NUMERIC", "INT")),
		"location" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"time" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"image" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"duration" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"date" => array('db_attributes' => array("NUMERIC", "DATE")),
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
	
	function events($title='', $day='', $month='', $year='', $link='', $summary='', $belongs_to_category='', $location='', $time='', $image='', $duration='', $date='')
	{
		$this->title = $title;
		$this->day = $day;
		$this->month = $month;
		$this->year = $year;
		$this->link = $link;
		$this->summary = $summary;
		$this->belongs_to_category = $belongs_to_category;
		$this->location = $location;
		$this->time = $time;
		$this->image = $image;
		$this->duration = $duration;
		$this->date = $date;
	}
	
	
	/**
	* Gets object from database
	* @param integer $eventsId 
	* @return object $events
	*/
	function Get($eventsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `events` where `eventsid`='".intval($eventsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->eventsId = $row['eventsid'];
			$this->title = $this->Unescape($row['title']);
			$this->day = $this->Unescape($row['day']);
			$this->month = $this->Unescape($row['month']);
			$this->year = $this->Unescape($row['year']);
			$this->link = $this->Unescape($row['link']);
			$this->summary = $this->Unescape($row['summary']);
			$this->belongs_to_category = $this->Unescape($row['belongs_to_category']);
			$this->location = $this->Unescape($row['location']);
			$this->time = $this->Unescape($row['time']);
			$this->image = $this->Unescape($row['image']);
			$this->duration = $this->Unescape($row['duration']);
			$this->date = $row['date'];
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $eventsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `events` ";
		$eventsList = Array();
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
			$sortBy = "eventsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$events = new $thisObjectName();
			$events->eventsId = $row['eventsid'];
			$events->title = $this->Unescape($row['title']);
			$events->day = $this->Unescape($row['day']);
			$events->month = $this->Unescape($row['month']);
			$events->year = $this->Unescape($row['year']);
			$events->link = $this->Unescape($row['link']);
			$events->summary = $this->Unescape($row['summary']);
			$events->belongs_to_category = $this->Unescape($row['belongs_to_category']);
			$events->location = $this->Unescape($row['location']);
			$events->time = $this->Unescape($row['time']);
			$events->image = $this->Unescape($row['image']);
			$events->duration = $this->Unescape($row['duration']);
			$events->date = $row['date'];
			$eventsList[] = $events;
		}
		return $eventsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $eventsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->eventsId!=''){
			$this->pog_query = "select `eventsid` from `events` where `eventsid`='".$this->eventsId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `events` set 
			`title`='".$this->Escape($this->title)."', 
			`day`='".$this->Escape($this->day)."', 
			`month`='".$this->Escape($this->month)."', 
			`year`='".$this->Escape($this->year)."', 
			`link`='".$this->Escape($this->link)."', 
			`summary`='".$this->Escape($this->summary)."', 
			`belongs_to_category`='".$this->Escape($this->belongs_to_category)."', 
			`location`='".$this->Escape($this->location)."', 
			`time`='".$this->Escape($this->time)."', 
			`image`='".$this->Escape($this->image)."', 
			`duration`='".$this->Escape($this->duration)."', 
			`date`='".$this->date."' where `eventsid`='".$this->eventsId."'";
		}
		else
		{
			$this->pog_query = "insert into `events` (`title`, `day`, `month`, `year`, `link`, `summary`, `belongs_to_category`, `location`, `time`, `image`, `duration`, `date` ) values (
			'".$this->Escape($this->title)."', 
			'".$this->Escape($this->day)."', 
			'".$this->Escape($this->month)."', 
			'".$this->Escape($this->year)."', 
			'".$this->Escape($this->link)."', 
			'".$this->Escape($this->summary)."', 
			'".$this->Escape($this->belongs_to_category)."', 
			'".$this->Escape($this->location)."', 
			'".$this->Escape($this->time)."', 
			'".$this->Escape($this->image)."', 
			'".$this->Escape($this->duration)."', 
			'".$this->date."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->eventsId == "")
		{
			$this->eventsId = $insertId;
		}
		return $this->eventsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $eventsId
	*/
	function SaveNew()
	{
		$this->eventsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `events` where `eventsid`='".$this->eventsId."'";
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
			$pog_query = "delete from `events` where ";
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