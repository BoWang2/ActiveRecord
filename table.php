<?php 
class table
{
	static public function tableForm($input)
	{
		$table = htmlTags::tableStart();
		
		foreach ($input as $key => $line) 
		{
			$table .= htmlTags::tablelineStart();	
			foreach($line as $column=>$value)
		{

			$table .= htmlTags::tableDetail($value);
		}

		$table .= htmlTags::tablelineEnd();

	}
		$table .= htmlTags::tableEnd();
		return $table;
	}
	
}


 ?>