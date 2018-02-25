<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `theme_vars_backups` (
	`theme_vars_backupsid` int(11) NOT NULL auto_increment,
	`theme_vars` MEDIUMTEXT NOT NULL,
	`saved` TIMESTAMP NOT NULL, PRIMARY KEY  (`theme_vars_backupsid`)) ENGINE=MyISAM;
*/

/**
* <b>theme_vars_backups</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=theme_vars_backups&attributeList=array+%28%0A++0+%3D%3E+%27theme_vars%27%2C%0A++1+%3D%3E+%27saved%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27MEDIUMTEXT%27%2C%0A++1+%3D%3E+%27TIMESTAMP%27%2C%0A%29
*/
include_once('class.pog_base.php');
class theme_vars_backups extends POG_Base
{
	public $theme_vars_backupsId = '';

	/**
	 * @var MEDIUMTEXT
	 */
	public $theme_vars;
	
	/**
	 * @var TIMESTAMP
	 */
	public $saved;
	
	public $pog_attribute_type = array(
		"theme_vars_backupsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"theme_vars" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
		"saved" => array('db_attributes' => array("NUMERIC", "TIMESTAMP")),
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
	
	function theme_vars_backups($theme_vars='', $saved='')
	{
		$this->theme_vars = $theme_vars;
		$this->saved = $saved;
	}
	
	
	/**
	* Gets object from database
	* @param integer $theme_vars_backupsId 
	* @return object $theme_vars_backups
	*/
	function Get($theme_vars_backupsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `theme_vars_backups` where `theme_vars_backupsid`='".intval($theme_vars_backupsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->theme_vars_backupsId = $row['theme_vars_backupsid'];
			$this->theme_vars = $this->Unescape($row['theme_vars']);
			$this->saved = $row['saved'];
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $theme_vars_backupsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `theme_vars_backups` ";
		$theme_vars_backupsList = Array();
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
			$sortBy = "theme_vars_backupsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$theme_vars_backups = new $thisObjectName();
			$theme_vars_backups->theme_vars_backupsId = $row['theme_vars_backupsid'];
			$theme_vars_backups->theme_vars = $this->Unescape($row['theme_vars']);
			$theme_vars_backups->saved = $row['saved'];
			$theme_vars_backupsList[] = $theme_vars_backups;
		}
		return $theme_vars_backupsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $theme_vars_backupsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->theme_vars_backupsId!=''){
			$this->pog_query = "select `theme_vars_backupsid` from `theme_vars_backups` where `theme_vars_backupsid`='".$this->theme_vars_backupsId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `theme_vars_backups` set 
			`theme_vars`='".$this->Escape($this->theme_vars)."', 
			`saved`='".$this->saved."' where `theme_vars_backupsid`='".$this->theme_vars_backupsId."'";
		}
		else
		{
			$this->pog_query = "insert into `theme_vars_backups` (`theme_vars`, `saved` ) values (
			'".$this->Escape($this->theme_vars)."', 
			'".$this->saved."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->theme_vars_backupsId == "")
		{
			$this->theme_vars_backupsId = $insertId;
		}
		return $this->theme_vars_backupsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $theme_vars_backupsId
	*/
	function SaveNew()
	{
		$this->theme_vars_backupsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `theme_vars_backups` where `theme_vars_backupsid`='".$this->theme_vars_backupsId."'";
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
			$pog_query = "delete from `theme_vars_backups` where ";
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