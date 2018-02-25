<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `products_on_page` (
	`products_on_pageid` int(11) NOT NULL auto_increment,
	`static_pagesid` INT NOT NULL,
	`productsid` INT NOT NULL, PRIMARY KEY  (`products_on_pageid`)) ENGINE=MyISAM;
*/

/**
* <b>products_on_page</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=products_on_page&attributeList=array+%28%0A++0+%3D%3E+%27static_pagesid%27%2C%0A++1+%3D%3E+%27productsid%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527INT%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class products_on_page extends POG_Base
{
	public $products_on_pageId = '';

	/**
	 * @var INT
	 */
	public $static_pagesid;
	
	/**
	 * @var INT
	 */
	public $productsid;
	
	public $pog_attribute_type = array(
		"products_on_pageId" => array('db_attributes' => array("NUMERIC", "INT")),
		"static_pagesid" => array('db_attributes' => array("NUMERIC", "INT")),
		"productsid" => array('db_attributes' => array("NUMERIC", "INT")),
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
	
	function products_on_page($static_pagesid='', $productsid='')
	{
		$this->static_pagesid = $static_pagesid;
		$this->productsid = $productsid;
	}
	
	
	/**
	* Gets object from database
	* @param integer $products_on_pageId 
	* @return object $products_on_page
	*/
	function Get($products_on_pageId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `products_on_page` where `products_on_pageid`='".intval($products_on_pageId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->products_on_pageId = $row['products_on_pageid'];
			$this->static_pagesid = $this->Unescape($row['static_pagesid']);
			$this->productsid = $this->Unescape($row['productsid']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $products_on_pageList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `products_on_page` ";
		$products_on_pageList = Array();
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
			$sortBy = "products_on_pageid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$products_on_page = new $thisObjectName();
			$products_on_page->products_on_pageId = $row['products_on_pageid'];
			$products_on_page->static_pagesid = $this->Unescape($row['static_pagesid']);
			$products_on_page->productsid = $this->Unescape($row['productsid']);
			$products_on_pageList[] = $products_on_page;
		}
		return $products_on_pageList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $products_on_pageId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->products_on_pageId!=''){
			$this->pog_query = "select `products_on_pageid` from `products_on_page` where `products_on_pageid`='".$this->products_on_pageId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `products_on_page` set 
			`static_pagesid`='".$this->Escape($this->static_pagesid)."', 
			`productsid`='".$this->Escape($this->productsid)."' where `products_on_pageid`='".$this->products_on_pageId."'";
		}
		else
		{
			$this->pog_query = "insert into `products_on_page` (`static_pagesid`, `productsid` ) values (
			'".$this->Escape($this->static_pagesid)."', 
			'".$this->Escape($this->productsid)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->products_on_pageId == "")
		{
			$this->products_on_pageId = $insertId;
		}
		return $this->products_on_pageId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $products_on_pageId
	*/
	function SaveNew()
	{
		$this->products_on_pageId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `products_on_page` where `products_on_pageid`='".$this->products_on_pageId."'";
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
			$pog_query = "delete from `products_on_page` where ";
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