<?php
		//Connect To Database
		$hostname='asadakian.db.5371525.hostedresource.com';
		$username='asadakian';
		$password='Car5050';
		$dbname='asadakian';
		$usertable='inventory';
		$imgtable='photos';
		$yourfield = 'Year';
		
		mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database.');
		mysql_select_db($dbname);
?>