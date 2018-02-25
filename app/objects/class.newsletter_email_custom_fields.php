<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `newsletter_email_custom_fields` (
	`newsletter_email_custom_fieldsid` int(11) NOT NULL auto_increment,
	`belongs_to_mailing_list` INT NOT NULL,
	`name` VARCHAR(255) NOT NULL, PRIMARY KEY  (`newsletter_email_custom_fieldsid`)) ENGINE=MyISAM;
*/

/**
* <b>newsletter_email_custom_fields</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=newsletter_email_custom_fields&attributeList=array+%28%0A++0+%3D%3E+%27belongs_to_mailing_list%27%2C%0A++1+%3D%3E+%27name%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27INT%27%2C%0A++1+%3D%3E+%27VARCHAR%28255%29%27%2C%0A%29
*/
include_once('class.pog_base.php');
class newsletter_email_custom_fields extends POG_Base
{
	public $newsletter_email_custom_fieldsId = '';

	/**
	 * @var INT
	 */
	public $belongs_to_mailing_list;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $name;
	
	public $pog_attribute_type = array(
		"newsletter_email_custom_fieldsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"belongs_to_mailing_list" => array('db_attributes' => array("NUMERIC", "INT")),
		"name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
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
	
	function newsletter_email_custom_fields($belongs_to_mailing_list='', $name='')
	{
		$this->belongs_to_mailing_list = $belongs_to_mailing_list;
		$this->name = $name;
	}
	
	
	/**
	* Gets object from database
	* @param integer $newsletter_email_custom_fieldsId 
	* @return object $newsletter_email_custom_fields
	*/
	function Get($newsletter_email_custom_fieldsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `newsletter_email_custom_fields` where `newsletter_email_custom_fieldsid`='".intval($newsletter_email_custom_fieldsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->newsletter_email_custom_fieldsId = $row['newsletter_email_custom_fieldsid'];
			$this->belongs_to_mailing_list = $this->Unescape($row['belongs_to_mailing_list']);
			$this->name = $this->Unescape($row['name']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $newsletter_email_custom_fieldsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `newsletter_email_custom_fields` ";
		$newsletter_email_custom_fieldsList = Array();
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
			$sortBy = "newsletter_email_custom_fieldsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$newsletter_email_custom_fields = new $thisObjectName();
			$newsletter_email_custom_fields->newsletter_email_custom_fieldsId = $row['newsletter_email_custom_fieldsid'];
			$newsletter_email_custom_fields->belongs_to_mailing_list = $this->Unescape($row['belongs_to_mailing_list']);
			$newsletter_email_custom_fields->name = $this->Unescape($row['name']);
			$newsletter_email_custom_fieldsList[] = $newsletter_email_custom_fields;
		}
		return $newsletter_email_custom_fieldsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $newsletter_email_custom_fieldsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->newsletter_email_custom_fieldsId!=''){
			$this->pog_query = "select `newsletter_email_custom_fieldsid` from `newsletter_email_custom_fields` where `newsletter_email_custom_fieldsid`='".$this->newsletter_email_custom_fieldsId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `newsletter_email_custom_fields` set 
			`belongs_to_mailing_list`='".$this->Escape($this->belongs_to_mailing_list)."', 
			`name`='".$this->Escape($this->name)."' where `newsletter_email_custom_fieldsid`='".$this->newsletter_email_custom_fieldsId."'";
		}
		else
		{
			$this->pog_query = "insert into `newsletter_email_custom_fields` (`belongs_to_mailing_list`, `name` ) values (
			'".$this->Escape($this->belongs_to_mailing_list)."', 
			'".$this->Escape($this->name)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->newsletter_email_custom_fieldsId == "")
		{
			$this->newsletter_email_custom_fieldsId = $insertId;
		}
		return $this->newsletter_email_custom_fieldsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $newsletter_email_custom_fieldsId
	*/
	function SaveNew()
	{
		$this->newsletter_email_custom_fieldsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `newsletter_email_custom_fields` where `newsletter_email_custom_fieldsid`='".$this->newsletter_email_custom_fieldsId."'";
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
			$pog_query = "delete from `newsletter_email_custom_fields` where ";
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