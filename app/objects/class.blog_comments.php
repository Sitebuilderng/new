<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `blog_comments` (
	`blog_commentsid` int(11) NOT NULL auto_increment,
	`belongs_to_blog` VARCHAR(255) NOT NULL,
	`content` LONGTEXT NOT NULL,
	`timestamp` DATETIME NOT NULL,
	`author` VARCHAR(255) NOT NULL,
	`website` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL,
	`approved` VARCHAR(255) NOT NULL, PRIMARY KEY  (`blog_commentsid`)) ENGINE=MyISAM;
*/

/**
* <b>blog_comments</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.0e / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=blog_comments&attributeList=array+%28%0A++0+%3D%3E+%27belongs_to_blog%27%2C%0A++1+%3D%3E+%27content%27%2C%0A++2+%3D%3E+%27timestamp%27%2C%0A++3+%3D%3E+%27author%27%2C%0A++4+%3D%3E+%27website%27%2C%0A++5+%3D%3E+%27email%27%2C%0A++6+%3D%3E+%27approved%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527LONGTEXT%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527DATETIME%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B5%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B6%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2529
*/
include_once('class.pog_base.php');
class blog_comments extends POG_Base
{
	public $blog_commentsId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $belongs_to_blog;
	
	/**
	 * @var LONGTEXT
	 */
	public $content;
	
	/**
	 * @var DATETIME
	 */
	public $timestamp;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $author;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $website;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $email;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $approved;
	
	public $pog_attribute_type = array(
		"blog_commentsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"belongs_to_blog" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"content" => array('db_attributes' => array("TEXT", "LONGTEXT")),
		"timestamp" => array('db_attributes' => array("TEXT", "DATETIME")),
		"author" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"website" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"email" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"approved" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
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
	
	function blog_comments($belongs_to_blog='', $content='', $timestamp='', $author='', $website='', $email='', $approved='')
	{
		$this->belongs_to_blog = $belongs_to_blog;
		$this->content = $content;
		$this->timestamp = $timestamp;
		$this->author = $author;
		$this->website = $website;
		$this->email = $email;
		$this->approved = $approved;
	}
	
	
	/**
	* Gets object from database
	* @param integer $blog_commentsId 
	* @return object $blog_comments
	*/
	function Get($blog_commentsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `blog_comments` where `blog_commentsid`='".intval($blog_commentsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->blog_commentsId = $row['blog_commentsid'];
			$this->belongs_to_blog = $this->Unescape($row['belongs_to_blog']);
			$this->content = $this->Unescape($row['content']);
			$this->timestamp = $row['timestamp'];
			$this->author = $this->Unescape($row['author']);
			$this->website = $this->Unescape($row['website']);
			$this->email = $this->Unescape($row['email']);
			$this->approved = $this->Unescape($row['approved']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $blog_commentsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `blog_comments` ";
		$blog_commentsList = Array();
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
			$sortBy = "blog_commentsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$blog_comments = new $thisObjectName();
			$blog_comments->blog_commentsId = $row['blog_commentsid'];
			$blog_comments->belongs_to_blog = $this->Unescape($row['belongs_to_blog']);
			$blog_comments->content = $this->Unescape($row['content']);
			$blog_comments->timestamp = $row['timestamp'];
			$blog_comments->author = $this->Unescape($row['author']);
			$blog_comments->website = $this->Unescape($row['website']);
			$blog_comments->email = $this->Unescape($row['email']);
			$blog_comments->approved = $this->Unescape($row['approved']);
			$blog_commentsList[] = $blog_comments;
		}
		return $blog_commentsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $blog_commentsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$this->pog_query = "select `blog_commentsid` from `blog_comments` where `blog_commentsid`='".$this->blog_commentsId."' LIMIT 1";
		$rows = Database::Query($this->pog_query, $connection);
		if ($rows > 0)
		{
			$this->pog_query = "update `blog_comments` set 
			`belongs_to_blog`='".$this->Escape($this->belongs_to_blog)."', 
			`content`='".$this->Escape($this->content)."', 
			`timestamp`='".$this->timestamp."', 
			`author`='".$this->Escape($this->author)."', 
			`website`='".$this->Escape($this->website)."', 
			`email`='".$this->Escape($this->email)."', 
			`approved`='".$this->Escape($this->approved)."' where `blog_commentsid`='".$this->blog_commentsId."'";
		}
		else
		{
			$this->pog_query = "insert into `blog_comments` (`belongs_to_blog`, `content`, `timestamp`, `author`, `website`, `email`, `approved` ) values (
			'".$this->Escape($this->belongs_to_blog)."', 
			'".$this->Escape($this->content)."', 
			'".$this->timestamp."', 
			'".$this->Escape($this->author)."', 
			'".$this->Escape($this->website)."', 
			'".$this->Escape($this->email)."', 
			'".$this->Escape($this->approved)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->blog_commentsId == "")
		{
			$this->blog_commentsId = $insertId;
		}
		return $this->blog_commentsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $blog_commentsId
	*/
	function SaveNew()
	{
		$this->blog_commentsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `blog_comments` where `blog_commentsid`='".$this->blog_commentsId."'";
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
			$pog_query = "delete from `blog_comments` where ";
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