<?php

error_reporting(E_ERROR | E_PARSE);


$serverName = "_____________";
$connectionInfo = array( "Database"=>"_____________", "UID"=>"_____________", "PWD"=>"_____________");
$conn1 = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn1 ) {
			//echo "<br />";
		}
else  {
		echo "Connection could not be established.<br />";
		die( print_r( sqlsrv_errors(), true));
	}

?>