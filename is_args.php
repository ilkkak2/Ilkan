<?php
//***********************************************
//*
//* Read all POST and GET variables
//* and parse command line
//* githubissa uusi kommentti
//***********************************************

	date_default_timezone_set("Europe/Helsinki"); 

	$prog_start_time = microtime_float();

	if ($argv)
		parse_str(implode('&', array_slice($argv, 1)), $_GET);

	foreach ($_GET AS $key => $data)
	{
		$$key = $data;
	}

	foreach ($_POST AS $key => $data)
	{
		$$key = $data;
	}
?>
