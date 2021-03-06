<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `search` (
	`searchid` int(11) NOT NULL auto_increment,
	`blog_entry_id` INT NOT NULL,
	`word` VARCHAR(255) NOT NULL,
	`count` INT NOT NULL, PRIMARY KEY  (`searchid`)) ENGINE=MyISAM;
*/

/**
* <b>search</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.0d / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=search&attributeList=array+%28%0A++0+%3D%3E+%27blog_entry_id%27%2C%0A++1+%3D%3E+%27word%27%2C%0A++2+%3D%3E+%27count%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527INT%2527%252C%250A%2529
*/
include_once('class.pog_base.php');
class search extends POG_Base
{
	public $searchId = '';

	/**
	 * @var INT
	 */
	public $blog_entry_id;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $word;
	
	/**
	 * @var INT
	 */
	public $count;
	
	public $pog_attribute_type = array(
		"searchId" => array('db_attributes' => array("NUMERIC", "INT")),
		"blog_entry_id" => array('db_attributes' => array("NUMERIC", "INT")),
		"word" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"count" => array('db_attributes' => array("NUMERIC", "INT")),
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
	
	function search($blog_entry_id='', $word='', $count='')
	{
		$this->blog_entry_id = $blog_entry_id;
		$this->word = $word;
		$this->count = $count;
	}
	
	
	/**
	* Gets object from database
	* @param integer $searchId 
	* @return object $search
	*/
	function Get($searchId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `search` where `searchid`='".intval($searchId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->searchId = $row['searchid'];
			$this->blog_entry_id = $this->Unescape($row['blog_entry_id']);
			$this->word = $this->Unescape($row['word']);
			$this->count = $this->Unescape($row['count']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $searchList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `search` ";
		$searchList = Array();
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
			$sortBy = "searchid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$search = new $thisObjectName();
			$search->searchId = $row['searchid'];
			$search->blog_entry_id = $this->Unescape($row['blog_entry_id']);
			$search->word = $this->Unescape($row['word']);
			$search->count = $this->Unescape($row['count']);
			$searchList[] = $search;
		}
		return $searchList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $searchId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$this->pog_query = "select `searchid` from `search` where `searchid`='".$this->searchId."' LIMIT 1";
		$rows = Database::Query($this->pog_query, $connection);
		if ($rows > 0)
		{
			$this->pog_query = "update `search` set 
			`blog_entry_id`='".$this->Escape($this->blog_entry_id)."', 
			`word`='".$this->Escape($this->word)."', 
			`count`='".$this->Escape($this->count)."' where `searchid`='".$this->searchId."'";
		}
		else
		{
			$this->pog_query = "insert into `search` (`blog_entry_id`, `word`, `count` ) values (
			'".$this->Escape($this->blog_entry_id)."', 
			'".$this->Escape($this->word)."', 
			'".$this->Escape($this->count)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->searchId == "")
		{
			$this->searchId = $insertId;
		}
		return $this->searchId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $searchId
	*/
	function SaveNew()
	{
		$this->searchId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `search` where `searchid`='".$this->searchId."'";
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
			$pog_query = "delete from `search` where ";
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