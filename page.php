<?php 
class page
{
	protected $html;
	public  function __construct()
	{
		$this->html .=htmlTags::htmlHead();
		$this->html .=htmlTags::htmlBody();
	}

	public function __destruct()
	{
		$this->html .=htmlTags::bodyEnd();
		$this->html .=htmlTags::htmlEnd();
		print($this->html);
	}
}

 ?>