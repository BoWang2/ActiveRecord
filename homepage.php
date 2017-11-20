<?php 
class homepage extends page
{
	public function get()
	{
		$this->html .= form::selectionTableform();
	}

	public function post()
	{
		$tableName = $_post['Selection'];
		header('Location:index.php?page=display&table='. $tableName);
	}
}

 ?>