<?php
	
	session_start();
	// session_destroy();
	defined("DS") ? null : define("DS",DIRECTORY_SEPARATOR);//checked with defined
	defined("template_front") ? null : define("template_front", __DIR__.DS."template/front");
	defined("template_back") ? null : define("template_back", __DIR__.DS."template/back");
	// echo DIRECTORY_SEPARATOR;// back \
	//echo __FILE__; //show current dir
	// echo __DIR__; //show current(parrent) dir
	// echo template_front ."<hr>";
	// echo template_back ."<hr>";

	include_once "database.php";
	
 ?>