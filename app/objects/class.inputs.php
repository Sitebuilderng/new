<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `inputs` (
	`inputsid` int(11) NOT NULL auto_increment,
	`type` VARCHAR(255) NOT NULL,
	`label` VARCHAR(255) NOT NULL,
	`value` VARCHAR(255) NOT NULL,
	`order` VARCHAR(255) NOT NULL,
	`required` VARCHAR(255) NOT NULL,
	`belongs_to_form` VARCHAR(255) NOT NULL,
	`options` TEXT NOT NULL,
	`date` TINYINT NOT NULL,
	`width` TINYINT NOT NULL, PRIMARY KEY  (`inputsid`)) ENGINE=MyISAM;
*/

/**
* <b>inputs</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=inputs&attributeList=array+%28%0A++0+%3D%3E+%27type%27%2C%0A++1+%3D%3E+%27label%27%2C%0A++2+%3D%3E+%27value%27%2C%0A++3+%3D%3E+%27order%27%2C%0A++4+%3D%3E+%27required%27%2C%0A++5+%3D%3E+%27belongs_to_form%27%2C%0A++6+%3D%3E+%27options%27%2C%0A++7+%3D%3E+%27date%27%2C%0A++8+%3D%3E+%27width%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++1+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++2+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++3+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++4+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++5+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++6+%3D%3E+%27TEXT%27%2C%0A++7+%3D%3E+%27TINYINT%27%2C%0A++8+%3D%3E+%27TINYINT%27%2C%0A%29
*/
include_once('class.pog_base.php');
class inputs extends POG_Base
{
	public $inputsId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $type;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $label;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $value;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $order;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $required;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $belongs_to_form;
	
	/**
	 * @var TEXT
	 */
	public $options;
	
	/**
	 * @var TINYINT
	 */
	public $date;
	
	/**
	 * @var TINYINT
	 */
	public $width;
	
	public $pog_attribute_type = array(
		"inputsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"type" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"label" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"value" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"order" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"required" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"belongs_to_form" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"options" => array('db_attributes' => array("TEXT", "TEXT")),
		"date" => array('db_attributes' => array("NUMERIC", "TINYINT")),
		"width" => array('db_attributes' => array("NUMERIC", "TINYINT")),
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
	
	function inputs($type='', $label='', $value='', $order='', $required='', $belongs_to_form='', $options='', $date='', $width='')
	{
		$this->type = $type;
		$this->label = $label;
		$this->value = $value;
		$this->order = $order;
		$this->required = $required;
		$this->belongs_to_form = $belongs_to_form;
		$this->options = $options;
		$this->date = $date;
		$this->width = $width;
	}
	
	
	/**
	* Gets object from database
	* @param integer $inputsId 
	* @return object $inputs
	*/
	function Get($inputsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `inputs` where `inputsid`='".intval($inputsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->inputsId = $row['inputsid'];
			$this->type = $this->Unescape($row['type']);
			$this->label = $this->Unescape($row['label']);
			$this->value = $this->Unescape($row['value']);
			$this->order = $this->Unescape($row['order']);
			$this->required = $this->Unescape($row['required']);
			$this->belongs_to_form = $this->Unescape($row['belongs_to_form']);
			$this->options = $this->Unescape($row['options']);
			$this->date = $this->Unescape($row['date']);
			$this->width = $this->Unescape($row['width']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $inputsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `inputs` ";
		$inputsList = Array();
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
			$sortBy = "inputsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$inputs = new $thisObjectName();
			$inputs->inputsId = $row['inputsid'];
			$inputs->type = $this->Unescape($row['type']);
			$inputs->label = $this->Unescape($row['label']);
			$inputs->value = $this->Unescape($row['value']);
			$inputs->order = $this->Unescape($row['order']);
			$inputs->required = $this->Unescape($row['required']);
			$inputs->belongs_to_form = $this->Unescape($row['belongs_to_form']);
			$inputs->options = $this->Unescape($row['options']);
			$inputs->date = $this->Unescape($row['date']);
			$inputs->width = $this->Unescape($row['width']);
			$inputsList[] = $inputs;
		}
		return $inputsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $inputsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->inputsId!=''){
			$this->pog_query = "select `inputsid` from `inputs` where `inputsid`='".$this->inputsId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `inputs` set 
			`type`='".$this->Escape($this->type)."', 
			`label`='".$this->Escape($this->label)."', 
			`value`='".$this->Escape($this->value)."', 
			`order`='".$this->Escape($this->order)."', 
			`required`='".$this->Escape($this->required)."', 
			`belongs_to_form`='".$this->Escape($this->belongs_to_form)."', 
			`options`='".$this->Escape($this->options)."', 
			`date`='".$this->Escape($this->date)."', 
			`width`='".$this->Escape($this->width)."' where `inputsid`='".$this->inputsId."'";
		}
		else
		{
			$this->pog_query = "insert into `inputs` (`type`, `label`, `value`, `order`, `required`, `belongs_to_form`, `options`, `date`, `width` ) values (
			'".$this->Escape($this->type)."', 
			'".$this->Escape($this->label)."', 
			'".$this->Escape($this->value)."', 
			'".$this->Escape($this->order)."', 
			'".$this->Escape($this->required)."', 
			'".$this->Escape($this->belongs_to_form)."', 
			'".$this->Escape($this->options)."', 
			'".$this->Escape($this->date)."', 
			'".$this->Escape($this->width)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->inputsId == "")
		{
			$this->inputsId = $insertId;
		}
		return $this->inputsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $inputsId
	*/
	function SaveNew()
	{
		$this->inputsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `inputs` where `inputsid`='".$this->inputsId."'";
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
			$pog_query = "delete from `inputs` where ";
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