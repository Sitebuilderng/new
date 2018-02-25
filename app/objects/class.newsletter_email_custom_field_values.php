<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `newsletter_email_custom_field_values` (
	`newsletter_email_custom_field_valuesid` int(11) NOT NULL auto_increment,
	`custom_field_id` INT NOT NULL,
	`subscriber_id` INT NOT NULL,
	`value` MEDIUMTEXT NOT NULL, PRIMARY KEY  (`newsletter_email_custom_field_valuesid`)) ENGINE=MyISAM;
*/

/**
* <b>newsletter_email_custom_field_values</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=newsletter_email_custom_field_values&attributeList=array+%28%0A++0+%3D%3E+%27custom_field_id%27%2C%0A++1+%3D%3E+%27subscriber_id%27%2C%0A++2+%3D%3E+%27value%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27INT%27%2C%0A++1+%3D%3E+%27INT%27%2C%0A++2+%3D%3E+%27MEDIUMTEXT%27%2C%0A%29
*/
include_once('class.pog_base.php');
class newsletter_email_custom_field_values extends POG_Base
{
	public $newsletter_email_custom_field_valuesId = '';

	/**
	 * @var INT
	 */
	public $custom_field_id;
	
	/**
	 * @var INT
	 */
	public $subscriber_id;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $value;
	
	public $pog_attribute_type = array(
		"newsletter_email_custom_field_valuesId" => array('db_attributes' => array("NUMERIC", "INT")),
		"custom_field_id" => array('db_attributes' => array("NUMERIC", "INT")),
		"subscriber_id" => array('db_attributes' => array("NUMERIC", "INT")),
		"value" => array('db_attributes' => array("TEXT", "MEDIUMTEXT")),
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
	
	function newsletter_email_custom_field_values($custom_field_id='', $subscriber_id='', $value='')
	{
		$this->custom_field_id = $custom_field_id;
		$this->subscriber_id = $subscriber_id;
		$this->value = $value;
	}
	
	
	/**
	* Gets object from database
	* @param integer $newsletter_email_custom_field_valuesId 
	* @return object $newsletter_email_custom_field_values
	*/
	function Get($newsletter_email_custom_field_valuesId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `newsletter_email_custom_field_values` where `newsletter_email_custom_field_valuesid`='".intval($newsletter_email_custom_field_valuesId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->newsletter_email_custom_field_valuesId = $row['newsletter_email_custom_field_valuesid'];
			$this->custom_field_id = $this->Unescape($row['custom_field_id']);
			$this->subscriber_id = $this->Unescape($row['subscriber_id']);
			$this->value = $this->Unescape($row['value']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $newsletter_email_custom_field_valuesList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `newsletter_email_custom_field_values` ";
		$newsletter_email_custom_field_valuesList = Array();
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
			$sortBy = "newsletter_email_custom_field_valuesid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$newsletter_email_custom_field_values = new $thisObjectName();
			$newsletter_email_custom_field_values->newsletter_email_custom_field_valuesId = $row['newsletter_email_custom_field_valuesid'];
			$newsletter_email_custom_field_values->custom_field_id = $this->Unescape($row['custom_field_id']);
			$newsletter_email_custom_field_values->subscriber_id = $this->Unescape($row['subscriber_id']);
			$newsletter_email_custom_field_values->value = $this->Unescape($row['value']);
			$newsletter_email_custom_field_valuesList[] = $newsletter_email_custom_field_values;
		}
		return $newsletter_email_custom_field_valuesList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $newsletter_email_custom_field_valuesId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->newsletter_email_custom_field_valuesId!=''){
			$this->pog_query = "select `newsletter_email_custom_field_valuesid` from `newsletter_email_custom_field_values` where `newsletter_email_custom_field_valuesid`='".$this->newsletter_email_custom_field_valuesId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `newsletter_email_custom_field_values` set 
			`custom_field_id`='".$this->Escape($this->custom_field_id)."', 
			`subscriber_id`='".$this->Escape($this->subscriber_id)."', 
			`value`='".$this->Escape($this->value)."' where `newsletter_email_custom_field_valuesid`='".$this->newsletter_email_custom_field_valuesId."'";
		}
		else
		{
			$this->pog_query = "insert into `newsletter_email_custom_field_values` (`custom_field_id`, `subscriber_id`, `value` ) values (
			'".$this->Escape($this->custom_field_id)."', 
			'".$this->Escape($this->subscriber_id)."', 
			'".$this->Escape($this->value)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->newsletter_email_custom_field_valuesId == "")
		{
			$this->newsletter_email_custom_field_valuesId = $insertId;
		}
		return $this->newsletter_email_custom_field_valuesId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $newsletter_email_custom_field_valuesId
	*/
	function SaveNew()
	{
		$this->newsletter_email_custom_field_valuesId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `newsletter_email_custom_field_values` where `newsletter_email_custom_field_valuesid`='".$this->newsletter_email_custom_field_valuesId."'";
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
			$pog_query = "delete from `newsletter_email_custom_field_values` where ";
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