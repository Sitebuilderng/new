<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `search_all` (
	`search_allid` int(11) NOT NULL auto_increment,
	`entry_id` INT NOT NULL,
	`word` VARCHAR(255) NOT NULL,
	`count` INT NOT NULL,
	`blog` VARCHAR(255) NOT NULL, PRIMARY KEY  (`search_allid`)) ENGINE=MyISAM;
*/

/**
* <b>search_all</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.0e / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=search_all&attributeList=array+%28%0A++0+%3D%3E+%27entry_id%27%2C%0A++1+%3D%3E+%27word%27%2C%0A++2+%3D%3E+%27count%27%2C%0A++3+%3D%3E+%27blog%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2529
*/
include_once('class.pog_base.php');
class search_all extends POG_Base
{
	public $search_allId = '';

	/**
	 * @var INT
	 */
	public $entry_id;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $word;
	
	/**
	 * @var INT
	 */
	public $count;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $blog;
	
	public $pog_attribute_type = array(
		"search_allId" => array('db_attributes' => array("NUMERIC", "INT")),
		"entry_id" => array('db_attributes' => array("NUMERIC", "INT")),
		"word" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"count" => array('db_attributes' => array("NUMERIC", "INT")),
		"blog" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
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
	
	function search_all($entry_id='', $word='', $count='', $blog='')
	{
		$this->entry_id = $entry_id;
		$this->word = $word;
		$this->count = $count;
		$this->blog = $blog;
	}
	
	
	/**
	* Gets object from database
	* @param integer $search_allId 
	* @return object $search_all
	*/
	function Get($search_allId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `search_all` where `search_allid`='".intval($search_allId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->search_allId = $row['search_allid'];
			$this->entry_id = $this->Unescape($row['entry_id']);
			$this->word = $this->Unescape($row['word']);
			$this->count = $this->Unescape($row['count']);
			$this->blog = $this->Unescape($row['blog']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $search_allList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `search_all` ";
		$search_allList = Array();
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
			$sortBy = "search_allid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$search_all = new $thisObjectName();
			$search_all->search_allId = $row['search_allid'];
			$search_all->entry_id = $this->Unescape($row['entry_id']);
			$search_all->word = $this->Unescape($row['word']);
			$search_all->count = $this->Unescape($row['count']);
			$search_all->blog = $this->Unescape($row['blog']);
			$search_allList[] = $search_all;
		}
		return $search_allList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $search_allId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$this->pog_query = "select `search_allid` from `search_all` where `search_allid`='".$this->search_allId."' LIMIT 1";
		$rows = Database::Query($this->pog_query, $connection);
		if ($rows > 0)
		{
			$this->pog_query = "update `search_all` set 
			`entry_id`='".$this->Escape($this->entry_id)."', 
			`word`='".$this->Escape($this->word)."', 
			`count`='".$this->Escape($this->count)."', 
			`blog`='".$this->Escape($this->blog)."' where `search_allid`='".$this->search_allId."'";
		}
		else
		{
			$this->pog_query = "insert into `search_all` (`entry_id`, `word`, `count`, `blog` ) values (
			'".$this->Escape($this->entry_id)."', 
			'".$this->Escape($this->word)."', 
			'".$this->Escape($this->count)."', 
			'".$this->Escape($this->blog)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->search_allId == "")
		{
			$this->search_allId = $insertId;
		}
		return $this->search_allId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $search_allId
	*/
	function SaveNew()
	{
		$this->search_allId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `search_all` where `search_allid`='".$this->search_allId."'";
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
			$pog_query = "delete from `search_all` where ";
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