<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `form_submission` (
	`form_submissionid` int(11) NOT NULL auto_increment,
	`form_id` INT NOT NULL,
	`time_sent` DATETIME NOT NULL,
	`ip` VARCHAR(255) NOT NULL,
	`data_hash` VARCHAR(255) NOT NULL, PRIMARY KEY  (`form_submissionid`)) ENGINE=MyISAM;
*/

/**
* <b>form_submission</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=form_submission&attributeList=array+%28%0A++0+%3D%3E+%27form_id%27%2C%0A++1+%3D%3E+%27time_sent%27%2C%0A++2+%3D%3E+%27ip%27%2C%0A++3+%3D%3E+%27data_hash%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27INT%27%2C%0A++1+%3D%3E+%27DATETIME%27%2C%0A++2+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++3+%3D%3E+%27VARCHAR%28255%29%27%2C%0A%29
*/
include_once('class.pog_base.php');
class form_submission extends POG_Base
{
	public $form_submissionId = '';

	/**
	 * @var INT
	 */
	public $form_id;
	
	/**
	 * @var DATETIME
	 */
	public $time_sent;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $ip;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $data_hash;
	
	public $pog_attribute_type = array(
		"form_submissionId" => array('db_attributes' => array("NUMERIC", "INT")),
		"form_id" => array('db_attributes' => array("NUMERIC", "INT")),
		"time_sent" => array('db_attributes' => array("TEXT", "DATETIME")),
		"ip" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"data_hash" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
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
	
	function form_submission($form_id='', $time_sent='', $ip='', $data_hash='')
	{
		$this->form_id = $form_id;
		$this->time_sent = $time_sent;
		$this->ip = $ip;
		$this->data_hash = $data_hash;
	}
	
	
	/**
	* Gets object from database
	* @param integer $form_submissionId 
	* @return object $form_submission
	*/
	function Get($form_submissionId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `form_submission` where `form_submissionid`='".intval($form_submissionId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->form_submissionId = $row['form_submissionid'];
			$this->form_id = $this->Unescape($row['form_id']);
			$this->time_sent = $row['time_sent'];
			$this->ip = $this->Unescape($row['ip']);
			$this->data_hash = $this->Unescape($row['data_hash']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $form_submissionList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `form_submission` ";
		$form_submissionList = Array();
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
			$sortBy = "form_submissionid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$form_submission = new $thisObjectName();
			$form_submission->form_submissionId = $row['form_submissionid'];
			$form_submission->form_id = $this->Unescape($row['form_id']);
			$form_submission->time_sent = $row['time_sent'];
			$form_submission->ip = $this->Unescape($row['ip']);
			$form_submission->data_hash = $this->Unescape($row['data_hash']);
			$form_submissionList[] = $form_submission;
		}
		return $form_submissionList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $form_submissionId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->form_submissionId!=''){
			$this->pog_query = "select `form_submissionid` from `form_submission` where `form_submissionid`='".$this->form_submissionId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `form_submission` set 
			`form_id`='".$this->Escape($this->form_id)."', 
			`time_sent`='".$this->time_sent."', 
			`ip`='".$this->Escape($this->ip)."', 
			`data_hash`='".$this->Escape($this->data_hash)."' where `form_submissionid`='".$this->form_submissionId."'";
		}
		else
		{
			$this->pog_query = "insert into `form_submission` (`form_id`, `time_sent`, `ip`, `data_hash` ) values (
			'".$this->Escape($this->form_id)."', 
			'".$this->time_sent."', 
			'".$this->Escape($this->ip)."', 
			'".$this->Escape($this->data_hash)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->form_submissionId == "")
		{
			$this->form_submissionId = $insertId;
		}
		return $this->form_submissionId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $form_submissionId
	*/
	function SaveNew()
	{
		$this->form_submissionId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `form_submission` where `form_submissionid`='".$this->form_submissionId."'";
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
			$pog_query = "delete from `form_submission` where ";
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