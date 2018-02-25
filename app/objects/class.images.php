<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `images` (
	`imagesid` int(11) NOT NULL auto_increment,
	`caption` MEDIUMTEXT NOT NULL,
	`filename` VARCHAR(255) NOT NULL,
	`belongs_to_gallery` VARCHAR(255) NOT NULL,
	`order` INT NOT NULL, PRIMARY KEY  (`imagesid`)) ENGINE=MyISAM;
*/

/**
* <b>images</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.0e / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=images&attributeList=array+%28%0A++0+%3D%3E+%27caption%27%2C%0A++1+%3D%3E+%27filename%27%2C%0A++2+%3D%3E+%27belongs_to_gallery%27%2C%0A++3+%3D%3E+%27order%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527MEDIUMTEXT%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527INT%2527%252C%250A%2529
*/
include_once('class.pog_base.php');
class images extends POG_Base
{
	public $imagesId = '';

	/**
	 * @var MEDIUMTEXT
	 */
	public $caption;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $filename;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $belongs_to_gallery;
	
	/**
	 * @var INT
	 */
	public $order;
	
	public $pog_attribute_type = array(
		"imagesId" => array('db_attributes' => array("NUMERIC", "INT")),
		"caption" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"filename" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"belongs_to_gallery" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"order" => array('db_attributes' => array("NUMERIC", "INT")),
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
	
	function images($caption='', $filename='', $belongs_to_gallery='', $order='')
	{
		$this->caption = $caption;
		$this->filename = $filename;
		$this->belongs_to_gallery = $belongs_to_gallery;
		$this->order = $order;
	}
	
	
	/**
	* Gets object from database
	* @param integer $imagesId 
	* @return object $images
	*/
	function Get($imagesId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `images` where `imagesid`='".intval($imagesId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->imagesId = $row['imagesid'];
			$this->caption = $this->Unescape($row['caption']);
			$this->filename = $this->Unescape($row['filename']);
			$this->belongs_to_gallery = $this->Unescape($row['belongs_to_gallery']);
			$this->order = $this->Unescape($row['order']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $imagesList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `images` ";
		$imagesList = Array();
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
			$sortBy = "imagesid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$images = new $thisObjectName();
			$images->imagesId = $row['imagesid'];
			$images->caption = $this->Unescape($row['caption']);
			$images->filename = $this->Unescape($row['filename']);
			$images->belongs_to_gallery = $this->Unescape($row['belongs_to_gallery']);
			$images->order = $this->Unescape($row['order']);
			$imagesList[] = $images;
		}
		return $imagesList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $imagesId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$this->pog_query = "select `imagesid` from `images` where `imagesid`='".$this->imagesId."' LIMIT 1";
		$rows = Database::Query($this->pog_query, $connection);
		if ($rows > 0)
		{
			$this->pog_query = "update `images` set 
			`caption`='".$this->Escape($this->caption)."', 
			`filename`='".$this->Escape($this->filename)."', 
			`belongs_to_gallery`='".$this->Escape($this->belongs_to_gallery)."', 
			`order`='".$this->Escape($this->order)."' where `imagesid`='".$this->imagesId."'";
		}
		else
		{
			$this->pog_query = "insert into `images` (`caption`, `filename`, `belongs_to_gallery`, `order` ) values (
			'".$this->Escape($this->caption)."', 
			'".$this->Escape($this->filename)."', 
			'".$this->Escape($this->belongs_to_gallery)."', 
			'".$this->Escape($this->order)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->imagesId == "")
		{
			$this->imagesId = $insertId;
		}
		return $this->imagesId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $imagesId
	*/
	function SaveNew()
	{
		$this->imagesId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `images` where `imagesid`='".$this->imagesId."'";
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
			$pog_query = "delete from `images` where ";
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