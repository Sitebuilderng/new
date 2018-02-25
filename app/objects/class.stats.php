<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `stats` (
	`statsid` int(11) NOT NULL auto_increment,
	`browser` VARCHAR(255) NOT NULL,
	`ip` VARCHAR(15) NOT NULL,
	`date` INT NOT NULL,
	`page_id` INT NOT NULL,
	`referer` VARCHAR(255) NOT NULL,
	`country` VARCHAR(255) NOT NULL,
	`type` CHAR(4) NOT NULL,
	`browser_name` VARCHAR(255) NOT NULL,
	`os_name` VARCHAR(255) NOT NULL,
	`pagename` VARCHAR(255) NOT NULL,
	`url` TEXT NOT NULL,
	`engine` VARCHAR(255) NOT NULL,
	`timestamp` TIMESTAMP NOT NULL, PRIMARY KEY  (`statsid`)) ENGINE=MyISAM;
*/

/**
* <b>stats</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.0f / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=stats&attributeList=array+%28%0A++0+%3D%3E+%27browser%27%2C%0A++1+%3D%3E+%27ip%27%2C%0A++2+%3D%3E+%27date%27%2C%0A++3+%3D%3E+%27page_id%27%2C%0A++4+%3D%3E+%27referer%27%2C%0A++5+%3D%3E+%27country%27%2C%0A++6+%3D%3E+%27type%27%2C%0A++7+%3D%3E+%27browser_name%27%2C%0A++8+%3D%3E+%27os_name%27%2C%0A++9+%3D%3E+%27pagename%27%2C%0A++10+%3D%3E+%27url%27%2C%0A++11+%3D%3E+%27engine%27%2C%0A++12+%3D%3E+%27timestamp%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++1+%3D%3E+%27VARCHAR%2815%29%27%2C%0A++2+%3D%3E+%27INT%27%2C%0A++3+%3D%3E+%27INT%27%2C%0A++4+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++5+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++6+%3D%3E+%27CHAR%284%29%27%2C%0A++7+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++8+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++9+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++10+%3D%3E+%27TEXT%27%2C%0A++11+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++12+%3D%3E+%27TIMESTAMP%27%2C%0A%29
*/
include_once('class.pog_base.php');
class stats extends POG_Base
{
	public $statsId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $browser;
	
	/**
	 * @var VARCHAR(15)
	 */
	public $ip;
	
	/**
	 * @var INT
	 */
	public $date;
	
	/**
	 * @var INT
	 */
	public $page_id;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $referer;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $country;
	
	/**
	 * @var CHAR(4)
	 */
	public $type;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $browser_name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $os_name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $pagename;
	
	/**
	 * @var TEXT
	 */
	public $url;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $engine;
	
	/**
	 * @var TIMESTAMP
	 */
	public $timestamp;
	
	public $pog_attribute_type = array(
		"statsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"browser" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"ip" => array('db_attributes' => array("TEXT", "VARCHAR", "15")),
		"date" => array('db_attributes' => array("NUMERIC", "INT")),
		"page_id" => array('db_attributes' => array("NUMERIC", "INT")),
		"referer" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"country" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"type" => array('db_attributes' => array("TEXT", "CHAR", "4")),
		"browser_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"os_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"pagename" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"url" => array('db_attributes' => array("TEXT", "TEXT")),
		"engine" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"timestamp" => array('db_attributes' => array("NUMERIC", "TIMESTAMP")),
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
	
	function stats($browser='', $ip='', $date='', $page_id='', $referer='', $country='', $type='', $browser_name='', $os_name='', $pagename='', $url='', $engine='', $timestamp='')
	{
		$this->browser = $browser;
		$this->ip = $ip;
		$this->date = $date;
		$this->page_id = $page_id;
		$this->referer = $referer;
		$this->country = $country;
		$this->type = $type;
		$this->browser_name = $browser_name;
		$this->os_name = $os_name;
		$this->pagename = $pagename;
		$this->url = $url;
		$this->engine = $engine;
		$this->timestamp = $timestamp;
	}
	
	
	/**
	* Gets object from database
	* @param integer $statsId 
	* @return object $stats
	*/
	function Get($statsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `stats` where `statsid`='".intval($statsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->statsId = $row['statsid'];
			$this->browser = $this->Unescape($row['browser']);
			$this->ip = $this->Unescape($row['ip']);
			$this->date = $this->Unescape($row['date']);
			$this->page_id = $this->Unescape($row['page_id']);
			$this->referer = $this->Unescape($row['referer']);
			$this->country = $this->Unescape($row['country']);
			$this->type = $this->Unescape($row['type']);
			$this->browser_name = $this->Unescape($row['browser_name']);
			$this->os_name = $this->Unescape($row['os_name']);
			$this->pagename = $this->Unescape($row['pagename']);
			$this->url = $this->Unescape($row['url']);
			$this->engine = $this->Unescape($row['engine']);
			$this->timestamp = $row['timestamp'];
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $statsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `stats` ";
		$statsList = Array();
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
			$sortBy = "statsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$stats = new $thisObjectName();
			$stats->statsId = $row['statsid'];
			$stats->browser = $this->Unescape($row['browser']);
			$stats->ip = $this->Unescape($row['ip']);
			$stats->date = $this->Unescape($row['date']);
			$stats->page_id = $this->Unescape($row['page_id']);
			$stats->referer = $this->Unescape($row['referer']);
			$stats->country = $this->Unescape($row['country']);
			$stats->type = $this->Unescape($row['type']);
			$stats->browser_name = $this->Unescape($row['browser_name']);
			$stats->os_name = $this->Unescape($row['os_name']);
			$stats->pagename = $this->Unescape($row['pagename']);
			$stats->url = $this->Unescape($row['url']);
			$stats->engine = $this->Unescape($row['engine']);
			$stats->timestamp = $row['timestamp'];
			$statsList[] = $stats;
		}
		return $statsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $statsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$this->pog_query = "select `statsid` from `stats` where `statsid`='".$this->statsId."' LIMIT 1";
		$rows = Database::Query($this->pog_query, $connection);
		if ($rows > 0)
		{
			$this->pog_query = "update `stats` set 
			`browser`='".$this->Escape($this->browser)."', 
			`ip`='".$this->Escape($this->ip)."', 
			`date`='".$this->Escape($this->date)."', 
			`page_id`='".$this->Escape($this->page_id)."', 
			`referer`='".$this->Escape($this->referer)."', 
			`country`='".$this->Escape($this->country)."', 
			`type`='".$this->Escape($this->type)."', 
			`browser_name`='".$this->Escape($this->browser_name)."', 
			`os_name`='".$this->Escape($this->os_name)."', 
			`pagename`='".$this->Escape($this->pagename)."', 
			`url`='".$this->Escape($this->url)."', 
			`engine`='".$this->Escape($this->engine)."', 
			`timestamp`='".$this->timestamp."' where `statsid`='".$this->statsId."'";
		}
		else
		{
			$this->pog_query = "insert into `stats` (`browser`, `ip`, `date`, `page_id`, `referer`, `country`, `type`, `browser_name`, `os_name`, `pagename`, `url`, `engine`, `timestamp` ) values (
			'".$this->Escape($this->browser)."', 
			'".$this->Escape($this->ip)."', 
			'".$this->Escape($this->date)."', 
			'".$this->Escape($this->page_id)."', 
			'".$this->Escape($this->referer)."', 
			'".$this->Escape($this->country)."', 
			'".$this->Escape($this->type)."', 
			'".$this->Escape($this->browser_name)."', 
			'".$this->Escape($this->os_name)."', 
			'".$this->Escape($this->pagename)."', 
			'".$this->Escape($this->url)."', 
			'".$this->Escape($this->engine)."', 
			'".$this->timestamp."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->statsId == "")
		{
			$this->statsId = $insertId;
		}
		return $this->statsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $statsId
	*/
	function SaveNew()
	{
		$this->statsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `stats` where `statsid`='".$this->statsId."'";
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
			$pog_query = "delete from `stats` where ";
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