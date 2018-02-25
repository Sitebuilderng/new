<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `galleries_tags_in_gallery` (
	`galleries_tags_in_galleryid` int(11) NOT NULL auto_increment,
	`galleriesid` INT NOT NULL,
	`page_images_tagsid` INT NOT NULL, PRIMARY KEY  (`galleries_tags_in_galleryid`)) ENGINE=MyISAM;
*/

/**
* <b>galleries_tags_in_gallery</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=galleries_tags_in_gallery&attributeList=array+%28%0A++0+%3D%3E+%27galleriesid%27%2C%0A++1+%3D%3E+%27page_images_tagsid%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527INT%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class galleries_tags_in_gallery extends POG_Base
{
	public $galleries_tags_in_galleryId = '';

	/**
	 * @var INT
	 */
	public $galleriesid;
	
	/**
	 * @var INT
	 */
	public $page_images_tagsid;
	
	public $pog_attribute_type = array(
		"galleries_tags_in_galleryId" => array('db_attributes' => array("NUMERIC", "INT")),
		"galleriesid" => array('db_attributes' => array("NUMERIC", "INT")),
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
	
	function galleries_tags_in_gallery($galleriesid='', $page_images_tagsid='')
	{
		$this->galleriesid = $galleriesid;
		$this->page_images_tagsid = $page_images_tagsid;
	}
	
	
	/**
	* Gets object from database
	* @param integer $galleries_tags_in_galleryId 
	* @return object $galleries_tags_in_gallery
	*/
	function Get($galleries_tags_in_galleryId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `galleries_tags_in_gallery` where `galleries_tags_in_galleryid`='".intval($galleries_tags_in_galleryId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->galleries_tags_in_galleryId = $row['galleries_tags_in_galleryid'];
			$this->galleriesid = $this->Unescape($row['galleriesid']);
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
	* @return array $galleries_tags_in_galleryList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `galleries_tags_in_gallery` ";
		$galleries_tags_in_galleryList = Array();
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
			$sortBy = "galleries_tags_in_galleryid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$galleries_tags_in_gallery = new $thisObjectName();
			$galleries_tags_in_gallery->galleries_tags_in_galleryId = $row['galleries_tags_in_galleryid'];
			$galleries_tags_in_gallery->galleriesid = $this->Unescape($row['galleriesid']);
			$galleries_tags_in_gallery->page_images_tagsid = $this->Unescape($row['page_images_tagsid']);
			$galleries_tags_in_galleryList[] = $galleries_tags_in_gallery;
		}
		return $galleries_tags_in_galleryList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $galleries_tags_in_galleryId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->galleries_tags_in_galleryId!=''){
			$this->pog_query = "select `galleries_tags_in_galleryid` from `galleries_tags_in_gallery` where `galleries_tags_in_galleryid`='".$this->galleries_tags_in_galleryId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `galleries_tags_in_gallery` set 
			`galleriesid`='".$this->Escape($this->galleriesid)."', 
			`page_images_tagsid`='".$this->Escape($this->page_images_tagsid)."' where `galleries_tags_in_galleryid`='".$this->galleries_tags_in_galleryId."'";
		}
		else
		{
			$this->pog_query = "insert into `galleries_tags_in_gallery` (`galleriesid`, `page_images_tagsid` ) values (
			'".$this->Escape($this->galleriesid)."', 
			'".$this->Escape($this->page_images_tagsid)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->galleries_tags_in_galleryId == "")
		{
			$this->galleries_tags_in_galleryId = $insertId;
		}
		return $this->galleries_tags_in_galleryId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $galleries_tags_in_galleryId
	*/
	function SaveNew()
	{
		$this->galleries_tags_in_galleryId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `galleries_tags_in_gallery` where `galleries_tags_in_galleryid`='".$this->galleries_tags_in_galleryId."'";
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
			$pog_query = "delete from `galleries_tags_in_gallery` where ";
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