<?php 
class display extends page
{
	public function get()
	{
		$tableName = $_GET['table'];
		$this->html .= form::findAllForm($tableName);
		$this->html .= form::findOneForm($tableName);
		$this->html .= form::DeleteIdForm($tableName);
		$this->html .= form::SaveIdForm($tableName);
	}


	public function post()
	{
		$tableName = $_GET['table'];
		$method = $_GET['method'];
		$id = $_POST['id'];
		$this->html .= functions::method($method,$tableName,$id);
		
	}

}

 ?>