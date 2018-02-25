<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `sort_in_scopes` (
	`sort_in_scopesid` int(11) NOT NULL auto_increment,
	`item_type` VARCHAR(255) NOT NULL,
	`filter_string` VARCHAR(255) NOT NULL,
	`item_id` INT NOT NULL,
	`order` INT NOT NULL, PRIMARY KEY  (`sort_in_scopesid`)) ENGINE=MyISAM;
*/

/**
* <b>sort_in_scopes</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=sort_in_scopes&attributeList=array+%28%0A++0+%3D%3E+%27item_type%27%2C%0A++1+%3D%3E+%27filter_string%27%2C%0A++2+%3D%3E+%27item_id%27%2C%0A++3+%3D%3E+%27order%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++1+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++2+%3D%3E+%27INT%27%2C%0A++3+%3D%3E+%27INT%27%2C%0A%29
*/
include_once('class.pog_base.php');
class sort_in_scopes extends POG_Base
{
	public $sort_in_scopesId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $item_type;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $filter_string;
	
	/**
	 * @var INT
	 */
	public $item_id;
	
	/**
	 * @var INT
	 */
	public $order;
	
	public $pog_attribute_type = array(
		"sort_in_scopesId" => array('db_attributes' => array("NUMERIC", "INT")),
		"item_type" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"filter_string" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"item_id" => array('db_attributes' => array("NUMERIC", "INT")),
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
	
	function sort_in_scopes($item_type='', $filter_string='', $item_id='', $order='')
	{
		$this->item_type = $item_type;
		$this->filter_string = $filter_string;
		$this->item_id = $item_id;
		$this->order = $order;
	}
	
	
	/**
	* Gets object from database
	* @param integer $sort_in_scopesId 
	* @return object $sort_in_scopes
	*/
	function Get($sort_in_scopesId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `sort_in_scopes` where `sort_in_scopesid`='".intval($sort_in_scopesId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->sort_in_scopesId = $row['sort_in_scopesid'];
			$this->item_type = $this->Unescape($row['item_type']);
			$this->filter_string = $this->Unescape($row['filter_string']);
			$this->item_id = $this->Unescape($row['item_id']);
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
	* @return array $sort_in_scopesList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `sort_in_scopes` ";
		$sort_in_scopesList = Array();
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
			$sortBy = "sort_in_scopesid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$sort_in_scopes = new $thisObjectName();
			$sort_in_scopes->sort_in_scopesId = $row['sort_in_scopesid'];
			$sort_in_scopes->item_type = $this->Unescape($row['item_type']);
			$sort_in_scopes->filter_string = $this->Unescape($row['filter_string']);
			$sort_in_scopes->item_id = $this->Unescape($row['item_id']);
			$sort_in_scopes->order = $this->Unescape($row['order']);
			$sort_in_scopesList[] = $sort_in_scopes;
		}
		return $sort_in_scopesList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $sort_in_scopesId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->sort_in_scopesId!=''){
			$this->pog_query = "select `sort_in_scopesid` from `sort_in_scopes` where `sort_in_scopesid`='".$this->sort_in_scopesId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `sort_in_scopes` set 
			`item_type`='".$this->Escape($this->item_type)."', 
			`filter_string`='".$this->Escape($this->filter_string)."', 
			`item_id`='".$this->Escape($this->item_id)."', 
			`order`='".$this->Escape($this->order)."' where `sort_in_scopesid`='".$this->sort_in_scopesId."'";
		}
		else
		{
			$this->pog_query = "insert into `sort_in_scopes` (`item_type`, `filter_string`, `item_id`, `order` ) values (
			'".$this->Escape($this->item_type)."', 
			'".$this->Escape($this->filter_string)."', 
			'".$this->Escape($this->item_id)."', 
			'".$this->Escape($this->order)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->sort_in_scopesId == "")
		{
			$this->sort_in_scopesId = $insertId;
		}
		return $this->sort_in_scopesId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $sort_in_scopesId
	*/
	function SaveNew()
	{
		$this->sort_in_scopesId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `sort_in_scopes` where `sort_in_scopesid`='".$this->sort_in_scopesId."'";
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
			$pog_query = "delete from `sort_in_scopes` where ";
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