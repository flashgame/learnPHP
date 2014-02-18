<?php
class myConnect 
{
	private $host = 'localhost';
	private $name = 'root';
	private $pwd = '';
	private $dBase = 'test';
	private $connect = '';
	private $result = '';//返回的结果集
	private $msg = '';//返回的结果
	private $fields;//返回的字段
	private $fieldsNum;//返回的字段数
	private $rowsNum = 0;//返回的结果数
	private $rowsRst = '';//单条记录的字段数组
	private $fieldsArr = array();//字段数组
	private $rowsArr = array();//结果数组

	function __construct($host='',$name='',$pwd='',$dBase='')
	{
		if($host != '')
		{
			$this->host = $host;
		}	
		if($name != '')
		{
			$this->name = $name;
		}
		if($pwd != '')
		{
			$this->pwd = $pwd;
		}
		if($dBase != '')
		{
			$this->dBase = $dBase;
		}
		$this->init_conn();
	}

	//初始化链接
	function init_conn()
	{
		$this->connect = mysql_connect($this->host,$this->name,$this->pwd) or die (mysql_error());
		mysql_select_db($this->dBase,$this->connect);
		mysql_query('set namess utf8');
	}

	//查询结果
	function mysql_query_rst($sql)
	{
		if($this->connect == '')
		{
			$this->init_conn();
		}
		$this->result = @mysql_query($sql);
	}

	//取得查询结果数
	function getRowsNum($sql)
	{
		$this->mysql_query_rst($sql);
		if(mysql_errno() == 0)
		{
			return @mysql_num_rows($this->result);
		}
		else
		{
			return '';
		}
	}

	function getFields($sql,$fields)
	{
		$this->mysql_query_rst($sql);
		if(mysql_errno() == 0)
		{
			if(mysql_num_rows($this->result) > 0)
			{
				$tempfld = @mysql_fetch_row($this->result);
				$this->fields = $tempfld[$fields];
			}
			return $this->fields;
		}
		else
		{
			return '';
		}
	}

	//增删改记录数
	function uidRst($sql)
	{
		mysql_query($sql) or die ('uidRst Error:'.mysql_error());
		$this->rowsNum = @mysql_affected_rows();
		if(mysql_errno() == 0)
		{
			return $this->rowsNum;
		}
		else
		{
			return '';
		}
	}

}
$conn = new myConnect();
