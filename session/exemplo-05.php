<?php

require_once("config.php");

echo session_save_path();
echo "<br>";
var_dump(session_status());
echo "<br>";

switch (session_status()) {

	case PHP_SESSION_DISABLED:
		echo "SESSION OFF";
		break;
	
	case PHP_SESSION_NONE :
		echo "NENHUMA SESSION";
		break;

	case PHP_SESSION_ACTIVE :
		echo "SESSION ON";
		break;

	default:
		echo "MEU DEFAULT";
		break;
}

?>