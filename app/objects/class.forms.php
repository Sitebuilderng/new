<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `forms` (
	`formsid` int(11) NOT NULL auto_increment,
	`name` VARCHAR(255) NOT NULL,
	`destination` VARCHAR(255) NOT NULL,
	`from_email` VARCHAR(255) NOT NULL,
	`from_name` VARCHAR(255) NOT NULL,
	`subject` VARCHAR(255) NOT NULL,
	`autoresponder` INT NOT NULL,
	`autoresponder_subject` VARCHAR(255) NOT NULL,
	`redirect_on_send` VARCHAR(255) NOT NULL,
	`add_to_newsletter_id` INT NOT NULL, PRIMARY KEY  (`formsid`)) ENGINE=MyISAM;
*/

/**
* <b>forms</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=forms&attributeList=array+%28%0A++0+%3D%3E+%27name%27%2C%0A++1+%3D%3E+%27destination%27%2C%0A++2+%3D%3E+%27from_email%27%2C%0A++3+%3D%3E+%27from_name%27%2C%0A++4+%3D%3E+%27subject%27%2C%0A++5+%3D%3E+%27autoresponder%27%2C%0A++6+%3D%3E+%27autoresponder_subject%27%2C%0A++7+%3D%3E+%27redirect_on_send%27%2C%0A++8+%3D%3E+%27add_to_newsletter_id%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B5%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B6%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B7%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B8%2B%253D%253E%2B%2527INT%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A++2+%3D%3E+%27%27%2C%0A++3+%3D%3E+%27%27%2C%0A++4+%3D%3E+%27%27%2C%0A++5+%3D%3E+%27%27%2C%0A++6+%3D%3E+%27%27%2C%0A++7+%3D%3E+%27%27%2C%0A++8+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class forms extends POG_Base
{
	public $formsId = '';

	/**
	 * @var VARCHAR(255)
	 */
	public $name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $destination;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $from_email;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $from_name;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $subject;
	
	/**
	 * @var INT
	 */
	public $autoresponder;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $autoresponder_subject;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $redirect_on_send;
	
	/**
	 * @var INT
	 */
	public $add_to_newsletter_id;
	
	public $pog_attribute_type = array(
		"formsId" => array('db_attributes' => array("NUMERIC", "INT")),
		"name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"destination" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"from_email" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"from_name" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"subject" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"autoresponder" => array('db_attributes' => array("NUMERIC", "INT")),
		"autoresponder_subject" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"redirect_on_send" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"add_to_newsletter_id" => array('db_attributes' => array("NUMERIC", "INT")),
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
	
	function forms($name='', $destination='', $from_email='', $from_name='', $subject='', $autoresponder='', $autoresponder_subject='', $redirect_on_send='', $add_to_newsletter_id='')
	{
		$this->name = $name;
		$this->destination = $destination;
		$this->from_email = $from_email;
		$this->from_name = $from_name;
		$this->subject = $subject;
		$this->autoresponder = $autoresponder;
		$this->autoresponder_subject = $autoresponder_subject;
		$this->redirect_on_send = $redirect_on_send;
		$this->add_to_newsletter_id = $add_to_newsletter_id;
	}
	
	
	/**
	* Gets object from database
	* @param integer $formsId 
	* @return object $forms
	*/
	function Get($formsId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `forms` where `formsid`='".intval($formsId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->formsId = $row['formsid'];
			$this->name = $this->Unescape($row['name']);
			$this->destination = $this->Unescape($row['destination']);
			$this->from_email = $this->Unescape($row['from_email']);
			$this->from_name = $this->Unescape($row['from_name']);
			$this->subject = $this->Unescape($row['subject']);
			$this->autoresponder = $this->Unescape($row['autoresponder']);
			$this->autoresponder_subject = $this->Unescape($row['autoresponder_subject']);
			$this->redirect_on_send = $this->Unescape($row['redirect_on_send']);
			$this->add_to_newsletter_id = $this->Unescape($row['add_to_newsletter_id']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $formsList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `forms` ";
		$formsList = Array();
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
			$sortBy = "formsid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$forms = new $thisObjectName();
			$forms->formsId = $row['formsid'];
			$forms->name = $this->Unescape($row['name']);
			$forms->destination = $this->Unescape($row['destination']);
			$forms->from_email = $this->Unescape($row['from_email']);
			$forms->from_name = $this->Unescape($row['from_name']);
			$forms->subject = $this->Unescape($row['subject']);
			$forms->autoresponder = $this->Unescape($row['autoresponder']);
			$forms->autoresponder_subject = $this->Unescape($row['autoresponder_subject']);
			$forms->redirect_on_send = $this->Unescape($row['redirect_on_send']);
			$forms->add_to_newsletter_id = $this->Unescape($row['add_to_newsletter_id']);
			$formsList[] = $forms;
		}
		return $formsList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $formsId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->formsId!=''){
			$this->pog_query = "select `formsid` from `forms` where `formsid`='".$this->formsId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `forms` set 
			`name`='".$this->Escape($this->name)."', 
			`destination`='".$this->Escape($this->destination)."', 
			`from_email`='".$this->Escape($this->from_email)."', 
			`from_name`='".$this->Escape($this->from_name)."', 
			`subject`='".$this->Escape($this->subject)."', 
			`autoresponder`='".$this->Escape($this->autoresponder)."', 
			`autoresponder_subject`='".$this->Escape($this->autoresponder_subject)."', 
			`redirect_on_send`='".$this->Escape($this->redirect_on_send)."', 
			`add_to_newsletter_id`='".$this->Escape($this->add_to_newsletter_id)."' where `formsid`='".$this->formsId."'";
		}
		else
		{
			$this->pog_query = "insert into `forms` (`name`, `destination`, `from_email`, `from_name`, `subject`, `autoresponder`, `autoresponder_subject`, `redirect_on_send`, `add_to_newsletter_id` ) values (
			'".$this->Escape($this->name)."', 
			'".$this->Escape($this->destination)."', 
			'".$this->Escape($this->from_email)."', 
			'".$this->Escape($this->from_name)."', 
			'".$this->Escape($this->subject)."', 
			'".$this->Escape($this->autoresponder)."', 
			'".$this->Escape($this->autoresponder_subject)."', 
			'".$this->Escape($this->redirect_on_send)."', 
			'".$this->Escape($this->add_to_newsletter_id)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->formsId == "")
		{
			$this->formsId = $insertId;
		}
		return $this->formsId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $formsId
	*/
	function SaveNew()
	{
		$this->formsId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `forms` where `formsid`='".$this->formsId."'";
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
			$pog_query = "delete from `forms` where ";
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