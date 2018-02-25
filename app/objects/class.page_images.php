<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `page_images` (
	`page_imagesid` int(11) NOT NULL auto_increment,
	`caption` MEDIUMTEXT NOT NULL,
	`filename` VARCHAR(255) NOT NULL, PRIMARY KEY  (`page_imagesid`)) ENGINE=MyISAM;
*/

/**
* <b>page_images</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=page_images&attributeList=array+%28%0A++0+%3D%3E+%27caption%27%2C%0A++1+%3D%3E+%27filename%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27MEDIUMTEXT%27%2C%0A++1+%3D%3E+%27VARCHAR%28255%29%27%2C%0A%29
*/
include_once('class.pog_base.php');
class page_images extends POG_Base
{
	public $page_imagesId = '';

	/**
	 * @var MEDIUMTEXT
	 */
	public $caption;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $filename;
	
	public $pog_attribute_type = array(
		"page_imagesId" => array('db_attributes' => array("NUMERIC", "INT")),
		"caption" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"filename" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
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
	
	function page_images($caption='', $filename='')
	{
		$this->caption = $caption;
		$this->filename = $filename;
	}
	
	
	/**
	* Gets object from database
	* @param integer $page_imagesId 
	* @return object $page_images
	*/
	function Get($page_imagesId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `page_images` where `page_imagesid`='".intval($page_imagesId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->page_imagesId = $row['page_imagesid'];
			$this->caption = $this->Unescape($row['caption']);
			$this->filename = $this->Unescape($row['filename']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $page_imagesList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `page_images` ";
		$page_imagesList = Array();
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
			$sortBy = "page_imagesid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$page_images = new $thisObjectName();
			$page_images->page_imagesId = $row['page_imagesid'];
			$page_images->caption = $this->Unescape($row['caption']);
			$page_images->filename = $this->Unescape($row['filename']);
			$page_imagesList[] = $page_images;
		}
		return $page_imagesList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $page_imagesId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->page_imagesId!=''){
			$this->pog_query = "select `page_imagesid` from `page_images` where `page_imagesid`='".$this->page_imagesId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `page_images` set 
			`caption`='".$this->Escape($this->caption)."', 
			`filename`='".$this->Escape($this->filename)."' where `page_imagesid`='".$this->page_imagesId."'";
		}
		else
		{
			$this->pog_query = "insert into `page_images` (`caption`, `filename` ) values (
			'".$this->Escape($this->caption)."', 
			'".$this->Escape($this->filename)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->page_imagesId == "")
		{
			$this->page_imagesId = $insertId;
		}
		return $this->page_imagesId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $page_imagesId
	*/
	function SaveNew()
	{
		$this->page_imagesId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `page_images` where `page_imagesid`='".$this->page_imagesId."'";
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
			$pog_query = "delete from `page_images` where ";
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