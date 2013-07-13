<?php

  // conexão com o MySQL
	// connection with MySQL
	class mySql
	{
		function CONNECT()
		{
			// Dados conexão com o MySQL
			// Data connection with MySQL
	
			$DBSERVER = 'localhost';
			$DBUSER = 'root';
			$DBPASS = '';
			$DBDATA = 'mmf2';
			
			if(!isset($DBSERVER) or !isset($DBUSER) or !isset($DBPASS) or !isset($DBDATA))
			{
				echo "Faltam informações para conexão com banco. Insufficient information to connect to database.";
			}
			else
			{
				mysql_connect($DBSERVER, $DBUSER, $DBPASS) or die (mysql_error());
				mysql_select_db($DBDATA) or die (mysql_error());
			}
		}
	}
	
	$sql = new mySql;
	$sql -> CONNECT();
?>
