<?php 	
class htmlTags
{
		static public  function reveal($input)
		{
				return $input.'</br>';
		}

		static public  function htmlHead()
		{
			return '<html>';
		}

		static public  function htmlEnd()
		{
			return '</html>';
		}

		static public  function htmlBody()
		{
			return '<body>';
		}

		static public  function bodyEnd()
		{
			return '</body>';
		}

		static public function tablelineStart()
		{
			return '<tr>';
		}

		static public function tablelineEnd()
		{
			return '</tr>';
		}

		static public function tableTitle($input)
		{
			return '<th>'.$input.'</th>';
		}

		static public function tableDetail($input)
		{
			return '<td>'.$input.'<td>';
		}

		static public function tableStart()
		{
			return '<table style="width:100%">';
		}

		static public function tableEnd()
		{
			return '</table>';
		}

		
}


 ?>