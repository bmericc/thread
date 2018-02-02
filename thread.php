<?php 

include 'class.thread.php';
include 'functions.php';

if (isset($_GET['threadrun'])){

	$arg = array();

	if (isset($_GET['a'])){
		
	

		foreach($_GET['a'] as $argument){
			if (get_magic_quotes_gpc() == 1)

				$arg[] = unserialize(stripslashes($argument));
			else
				$arg[] = unserialize($argument);

		}
		
	}
	$return = call_user_func_array($_GET["f"], $arg);

	echo serialize($return);

	exit;

}


?>