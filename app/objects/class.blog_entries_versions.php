<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `blog_entries_versions` (
	`blog_entries_versionsid` int(11) NOT NULL auto_increment,
	`belongs_to_blog_entry_id` INT NOT NULL,
	`content` MEDIUMTEXT NOT NULL,
	`date_saved` INT NOT NULL,
	`draft` TINYINT NOT NULL, PRIMARY KEY  (`blog_entries_versionsid`)) ENGINE=MyISAM;
*/

/**
* <b>blog_entries_versions</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.0e / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=blog_entries_versions&attributeList=array+%28%0A++0+%3D%3E+%27belongs_to_blog_entry_id%27%2C%0A++1+%3D%3E+%27content%27%2C%0A++2+%3D%3E+%27date_saved%27%2C%0A++3+%3D%3E+%27draft%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527TINYINT%2527%252C%250A%2529
*/
include_once('class.pog_base.php');
class blog_entries_versions extends POG_Base
{
	public $blog_entries_versionsId = '';

	/**
	 * @var INT
	 */
	public $belongs_to_blog_entry_id;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $content;
	
	/**
	 * @var INT
	 */
	public $date_saved;
	
	/**
	 * @var TINYINT
	 */
	public $draft;
	
	public $pog_attribute_type = array(
		"blog_entries_versionsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"belongs_to_blog_entry_id" => array('db_attributes' => array("NUMERIC", "INT")),
		"content" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"date_saved" => array('db_attributes' => array("NUMERIC", "INT")),
		"draft" => array('db_attributes' => array("NUMERIC", "TINYINT")),
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
	
	function blog_entries_versions($belongs_to_blog_entry_id='', $content='', $date_saved='', $draft='')
	{
		$this->belongs_to_blog_entry_id = $belongs_to_blog_entry_id;
		$this->content = $content;
		$this->date_saved = $date_saved;
		$this->draft = $draft;
	}
	
	
	/**
	* Gets object from database
	* @param integer $blog_entries_versionsId 
	* @return object $blog_entries_versions
	*/
	function Get($blog_entries_versionsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `blog_entries_versions` where `blog_entries_versionsid`='".intval($blog_entries_versionsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->blog_entries_versionsId = $row['blog_entries_versionsid'];
			$this->belongs_to_blog_entry_id = $this->Unescape($row['belongs_to_blog_entry_id']);
			$this->content = $this->Unescape($row['content']);
			$this->date_saved = $this->Unescape($row['date_saved']);
			$this->draft = $this->Unescape($row['draft']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $blog_entries_versionsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `blog_entries_versions` ";
		$blog_entries_versionsList = Array();
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
			$sortBy = "blog_entries_versionsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$blog_entries_versions = new $thisObjectName();
			$blog_entries_versions->blog_entries_versionsId = $row['blog_entries_versionsid'];
			$blog_entries_versions->belongs_to_blog_entry_id = $this->Unescape($row['belongs_to_blog_entry_id']);
			$blog_entries_versions->content = $this->Unescape($row['content']);
			$blog_entries_versions->date_saved = $this->Unescape($row['date_saved']);
			$blog_entries_versions->draft = $this->Unescape($row['draft']);
			$blog_entries_versionsList[] = $blog_entries_versions;
		}
		return $blog_entries_versionsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $blog_entries_versionsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$this->pog_query = "select `blog_entries_versionsid` from `blog_entries_versions` where `blog_entries_versionsid`='".$this->blog_entries_versionsId."' LIMIT 1";
		$rows = Database::Query($this->pog_query, $connection);
		if ($rows > 0)
		{
			$this->pog_query = "update `blog_entries_versions` set 
			`belongs_to_blog_entry_id`='".$this->Escape($this->belongs_to_blog_entry_id)."', 
			`content`='".$this->Escape($this->content)."', 
			`date_saved`='".$this->Escape($this->date_saved)."', 
			`draft`='".$this->Escape($this->draft)."' where `blog_entries_versionsid`='".$this->blog_entries_versionsId."'";
		}
		else
		{
			$this->pog_query = "insert into `blog_entries_versions` (`belongs_to_blog_entry_id`, `content`, `date_saved`, `draft` ) values (
			'".$this->Escape($this->belongs_to_blog_entry_id)."', 
			'".$this->Escape($this->content)."', 
			'".$this->Escape($this->date_saved)."', 
			'".$this->Escape($this->draft)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->blog_entries_versionsId == "")
		{
			$this->blog_entries_versionsId = $insertId;
		}
		return $this->blog_entries_versionsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $blog_entries_versionsId
	*/
	function SaveNew()
	{
		$this->blog_entries_versionsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `blog_entries_versions` where `blog_entries_versionsid`='".$this->blog_entries_versionsId."'";
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
			$pog_query = "delete from `blog_entries_versions` where ";
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