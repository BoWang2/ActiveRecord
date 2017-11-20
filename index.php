<?php 	
class Manage
{
static public function autoload($class)
	{
		include $class .'.php';
	}
}
sql_autoload_register(array('Manage','autoload'));
define('DATABASE','bw254');
define('USERNAME','bw254');
define('PASSWORD','jar0ElbPf');
define('CONNECTION','sql2.njit.edu');


$obj = new main();
 ?>
