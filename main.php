<?php 	
class main
{
	public function __construct()
	{
		if(isset($_REQUEST['page']))
		{
			$pageRequest = $_REQUEST['page'];
		}
		$page = new $pageRequest;
		if($_SERVER['_REQUEST_METHOD'] == 'GET')
		{
			$page->get();
		}else
		{
			$page->post();
		}
	}
}
 ?>