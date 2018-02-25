<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `redirects` (
	`redirectsid` int(11) NOT NULL auto_increment,
	`old` MEDIUMTEXT NOT NULL,
	`new` MEDIUMTEXT NOT NULL, PRIMARY KEY  (`redirectsid`)) ENGINE=MyISAM;
*/

/**
* <b>redirects</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.0e / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=redirects&attributeList=array+%28%0A++0+%3D%3E+%27old%27%2C%0A++1+%3D%3E+%27new%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2529
*/
include_once('class.pog_base.php');
class redirects extends POG_Base
{
	public $redirectsId = '';

	/**
	 * @var MEDIUMTEXT
	 */
	public $old;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $new;
	
	public $pog_attribute_type = array(
		"redirectsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"old" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"new" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
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
	
	function redirects($old='', $new='')
	{
		$this->old = $old;
		$this->new = $new;
	}
	
	
	/**
	* Gets object from database
	* @param integer $redirectsId 
	* @return object $redirects
	*/
	function Get($redirectsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `redirects` where `redirectsid`='".intval($redirectsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->redirectsId = $row['redirectsid'];
			$this->old = $this->Unescape($row['old']);
			$this->new = $this->Unescape($row['new']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $redirectsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `redirects` ";
		$redirectsList = Array();
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
			$sortBy = "redirectsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$redirects = new $thisObjectName();
			$redirects->redirectsId = $row['redirectsid'];
			$redirects->old = $this->Unescape($row['old']);
			$redirects->new = $this->Unescape($row['new']);
			$redirectsList[] = $redirects;
		}
		return $redirectsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $redirectsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$this->pog_query = "select `redirectsid` from `redirects` where `redirectsid`='".$this->redirectsId."' LIMIT 1";
		$rows = Database::Query($this->pog_query, $connection);
		if ($rows > 0)
		{
			$this->pog_query = "update `redirects` set 
			`old`='".$this->Escape($this->old)."', 
			`new`='".$this->Escape($this->new)."' where `redirectsid`='".$this->redirectsId."'";
		}
		else
		{
			$this->pog_query = "insert into `redirects` (`old`, `new` ) values (
			'".$this->Escape($this->old)."', 
			'".$this->Escape($this->new)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->redirectsId == "")
		{
			$this->redirectsId = $insertId;
		}
		return $this->redirectsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $redirectsId
	*/
	function SaveNew()
	{
		$this->redirectsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `redirects` where `redirectsid`='".$this->redirectsId."'";
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
			$pog_query = "delete from `redirects` where ";
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