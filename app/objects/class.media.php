<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `media` (
	`mediaid` int(11) NOT NULL auto_increment,
	`title` VARCHAR(255) NOT NULL,
	`author` VARCHAR(255) NOT NULL,
	`filename` VARCHAR(255) NOT NULL,
	`link` VARCHAR(255) NOT NULL,
	`description` VARCHAR(255) NOT NULL,
	`belongs_to_playlist` VARCHAR(255) NOT NULL,
	`image` VARCHAR(255) NOT NULL, PRIMARY KEY  (`mediaid`)) ENGINE=MyISAM;
*/

/**
* <b>media</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.0d / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=media&attributeList=array+%28%0A++0+%3D%3E+%27title%27%2C%0A++1+%3D%3E+%27author%27%2C%0A++2+%3D%3E+%27filename%27%2C%0A++3+%3D%3E+%27link%27%2C%0A++4+%3D%3E+%27description%27%2C%0A++5+%3D%3E+%27belongs_to_playlist%27%2C%0A++6+%3D%3E+%27image%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B5%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B6%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2529
*/
include_once('class.pog_base.php');
class media extends POG_Base
{
	public $mediaId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $title;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $author;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $filename;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $link;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $description;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $belongs_to_playlist;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $image;
	
	public $pog_attribute_type = array(
		"mediaId" => array('db_attributes' => array("NUMERIC", "INT")),
		"title" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"author" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"filename" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"link" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"description" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"belongs_to_playlist" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"image" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
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
	
	function media($title='', $author='', $filename='', $link='', $description='', $belongs_to_playlist='', $image='')
	{
		$this->title = $title;
		$this->author = $author;
		$this->filename = $filename;
		$this->link = $link;
		$this->description = $description;
		$this->belongs_to_playlist = $belongs_to_playlist;
		$this->image = $image;
	}
	
	
	/**
	* Gets object from database
	* @param integer $mediaId 
	* @return object $media
	*/
	function Get($mediaId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `media` where `mediaid`='".intval($mediaId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->mediaId = $row['mediaid'];
			$this->title = $this->Unescape($row['title']);
			$this->author = $this->Unescape($row['author']);
			$this->filename = $this->Unescape($row['filename']);
			$this->link = $this->Unescape($row['link']);
			$this->description = $this->Unescape($row['description']);
			$this->belongs_to_playlist = $this->Unescape($row['belongs_to_playlist']);
			$this->image = $this->Unescape($row['image']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $mediaList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `media` ";
		$mediaList = Array();
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
			$sortBy = "mediaid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$media = new $thisObjectName();
			$media->mediaId = $row['mediaid'];
			$media->title = $this->Unescape($row['title']);
			$media->author = $this->Unescape($row['author']);
			$media->filename = $this->Unescape($row['filename']);
			$media->link = $this->Unescape($row['link']);
			$media->description = $this->Unescape($row['description']);
			$media->belongs_to_playlist = $this->Unescape($row['belongs_to_playlist']);
			$media->image = $this->Unescape($row['image']);
			$mediaList[] = $media;
		}
		return $mediaList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $mediaId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$this->pog_query = "select `mediaid` from `media` where `mediaid`='".$this->mediaId."' LIMIT 1";
		$rows = Database::Query($this->pog_query, $connection);
		if ($rows > 0)
		{
			$this->pog_query = "update `media` set 
			`title`='".$this->Escape($this->title)."', 
			`author`='".$this->Escape($this->author)."', 
			`filename`='".$this->Escape($this->filename)."', 
			`link`='".$this->Escape($this->link)."', 
			`description`='".$this->Escape($this->description)."', 
			`belongs_to_playlist`='".$this->Escape($this->belongs_to_playlist)."', 
			`image`='".$this->Escape($this->image)."' where `mediaid`='".$this->mediaId."'";
		}
		else
		{
			$this->pog_query = "insert into `media` (`title`, `author`, `filename`, `link`, `description`, `belongs_to_playlist`, `image` ) values (
			'".$this->Escape($this->title)."', 
			'".$this->Escape($this->author)."', 
			'".$this->Escape($this->filename)."', 
			'".$this->Escape($this->link)."', 
			'".$this->Escape($this->description)."', 
			'".$this->Escape($this->belongs_to_playlist)."', 
			'".$this->Escape($this->image)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->mediaId == "")
		{
			$this->mediaId = $insertId;
		}
		return $this->mediaId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $mediaId
	*/
	function SaveNew()
	{
		$this->mediaId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `media` where `mediaid`='".$this->mediaId."'";
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
			$pog_query = "delete from `media` where ";
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