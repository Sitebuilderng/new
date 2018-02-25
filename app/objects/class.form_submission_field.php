<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `form_submission_field` (
	`form_submission_fieldid` int(11) NOT NULL auto_increment,
	`form_submission_id` INT NOT NULL,
	`input_id` INT NOT NULL,
	`value` MEDIUMTEXT NOT NULL, PRIMARY KEY  (`form_submission_fieldid`)) ENGINE=MyISAM;
*/

/**
* <b>form_submission_field</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=form_submission_field&attributeList=array+%28%0A++0+%3D%3E+%27form_submission_id%27%2C%0A++1+%3D%3E+%27input_id%27%2C%0A++2+%3D%3E+%27value%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27INT%27%2C%0A++1+%3D%3E+%27INT%27%2C%0A++2+%3D%3E+%27MEDIUMTEXT%27%2C%0A%29
*/
include_once('class.pog_base.php');
class form_submission_field extends POG_Base
{
	public $form_submission_fieldId = '';

	/**
	 * @var INT
	 */
	public $form_submission_id;
	
	/**
	 * @var INT
	 */
	public $input_id;
	
	/**
	 * @var MEDIUMTEXT
	 */
	public $value;
	
	public $pog_attribute_type = array(
		"form_submission_fieldId" => array('db_attributes' => array("NUMERIC", "INT")),
		"form_submission_id" => array('db_attributes' => array("NUMERIC", "INT")),
		"input_id" => array('db_attributes' => array("NUMERIC", "INT")),
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
	
	function form_submission_field($form_submission_id='', $input_id='', $value='')
	{
		$this->form_submission_id = $form_submission_id;
		$this->input_id = $input_id;
		$this->value = $value;
	}
	
	
	/**
	* Gets object from database
	* @param integer $form_submission_fieldId 
	* @return object $form_submission_field
	*/
	function Get($form_submission_fieldId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `form_submission_field` where `form_submission_fieldid`='".intval($form_submission_fieldId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->form_submission_fieldId = $row['form_submission_fieldid'];
			$this->form_submission_id = $this->Unescape($row['form_submission_id']);
			$this->input_id = $this->Unescape($row['input_id']);
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
	* @return array $form_submission_fieldList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `form_submission_field` ";
		$form_submission_fieldList = Array();
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
			$sortBy = "form_submission_fieldid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$form_submission_field = new $thisObjectName();
			$form_submission_field->form_submission_fieldId = $row['form_submission_fieldid'];
			$form_submission_field->form_submission_id = $this->Unescape($row['form_submission_id']);
			$form_submission_field->input_id = $this->Unescape($row['input_id']);
			$form_submission_field->value = $this->Unescape($row['value']);
			$form_submission_fieldList[] = $form_submission_field;
		}
		return $form_submission_fieldList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $form_submission_fieldId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->form_submission_fieldId!=''){
			$this->pog_query = "select `form_submission_fieldid` from `form_submission_field` where `form_submission_fieldid`='".$this->form_submission_fieldId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `form_submission_field` set 
			`form_submission_id`='".$this->Escape($this->form_submission_id)."', 
			`input_id`='".$this->Escape($this->input_id)."', 
			`value`='".$this->Escape($this->value)."' where `form_submission_fieldid`='".$this->form_submission_fieldId."'";
		}
		else
		{
			$this->pog_query = "insert into `form_submission_field` (`form_submission_id`, `input_id`, `value` ) values (
			'".$this->Escape($this->form_submission_id)."', 
			'".$this->Escape($this->input_id)."', 
			'".$this->Escape($this->value)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->form_submission_fieldId == "")
		{
			$this->form_submission_fieldId = $insertId;
		}
		return $this->form_submission_fieldId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $form_submission_fieldId
	*/
	function SaveNew()
	{
		$this->form_submission_fieldId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `form_submission_field` where `form_submission_fieldid`='".$this->form_submission_fieldId."'";
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
			$pog_query = "delete from `form_submission_field` where ";
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