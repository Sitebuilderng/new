<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `page_images_in_tags` (
	`page_images_in_tagsid` int(11) NOT NULL auto_increment,
	`page_imagesid` INT NOT NULL,
	`page_images_tagsid` INT NOT NULL, PRIMARY KEY  (`page_images_in_tagsid`)) ENGINE=MyISAM;
*/

/**
* <b>page_images_in_tags</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=page_images_in_tags&attributeList=array+%28%0A++0+%3D%3E+%27page_imagesid%27%2C%0A++1+%3D%3E+%27page_images_tagsid%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27INT%27%2C%0A++1+%3D%3E+%27INT%27%2C%0A%29
*/
include_once('class.pog_base.php');
class page_images_in_tags extends POG_Base
{
	public $page_images_in_tagsId = '';

	/**
	 * @var INT
	 */
	public $page_imagesid;
	
	/**
	 * @var INT
	 */
	public $page_images_tagsid;
	
	public $pog_attribute_type = array(
		"page_images_in_tagsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"page_imagesid" => array('db_attributes' => array("NUMERIC", "INT")),
		"page_images_tagsid" => array('db_attributes' => array("NUMERIC", "INT")),
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
	
	function page_images_in_tags($page_imagesid='', $page_images_tagsid='')
	{
		$this->page_imagesid = $page_imagesid;
		$this->page_images_tagsid = $page_images_tagsid;
	}
	
	
	/**
	* Gets object from database
	* @param integer $page_images_in_tagsId 
	* @return object $page_images_in_tags
	*/
	function Get($page_images_in_tagsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `page_images_in_tags` where `page_images_in_tagsid`='".intval($page_images_in_tagsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->page_images_in_tagsId = $row['page_images_in_tagsid'];
			$this->page_imagesid = $this->Unescape($row['page_imagesid']);
			$this->page_images_tagsid = $this->Unescape($row['page_images_tagsid']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $page_images_in_tagsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `page_images_in_tags` ";
		$page_images_in_tagsList = Array();
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
			$sortBy = "page_images_in_tagsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$page_images_in_tags = new $thisObjectName();
			$page_images_in_tags->page_images_in_tagsId = $row['page_images_in_tagsid'];
			$page_images_in_tags->page_imagesid = $this->Unescape($row['page_imagesid']);
			$page_images_in_tags->page_images_tagsid = $this->Unescape($row['page_images_tagsid']);
			$page_images_in_tagsList[] = $page_images_in_tags;
		}
		return $page_images_in_tagsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $page_images_in_tagsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->page_images_in_tagsId!=''){
			$this->pog_query = "select `page_images_in_tagsid` from `page_images_in_tags` where `page_images_in_tagsid`='".$this->page_images_in_tagsId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `page_images_in_tags` set 
			`page_imagesid`='".$this->Escape($this->page_imagesid)."', 
			`page_images_tagsid`='".$this->Escape($this->page_images_tagsid)."' where `page_images_in_tagsid`='".$this->page_images_in_tagsId."'";
		}
		else
		{
			$this->pog_query = "insert into `page_images_in_tags` (`page_imagesid`, `page_images_tagsid` ) values (
			'".$this->Escape($this->page_imagesid)."', 
			'".$this->Escape($this->page_images_tagsid)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->page_images_in_tagsId == "")
		{
			$this->page_images_in_tagsId = $insertId;
		}
		return $this->page_images_in_tagsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $page_images_in_tagsId
	*/
	function SaveNew()
	{
		$this->page_images_in_tagsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `page_images_in_tags` where `page_images_in_tagsid`='".$this->page_images_in_tagsId."'";
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
			$pog_query = "delete from `page_images_in_tags` where ";
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