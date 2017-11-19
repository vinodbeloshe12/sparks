<?php

//Database Connection Settings
//define ('hostnameorservername','localhost'); // Your server name or host name goes in here
//define ('serverusername','technfox_sparks'); // Your database Username goes in here
//define ('serverpassword','CI-J1Ko0hfKH'); // Your database Password goes in here
//define ('databasenamed','technfox_sparks'); // Your database Name goes in here

define ('hostnameorservername','localhost'); // Your server name or host name goes in here
define ('serverusername','findah3p_sparks'); // Your database Username goes in here
define ('serverpassword','{P~34XN@]CJn'); // Your database Password goes in here
define ('databasenamed','findah3p_sparks'); // Your database Name goes in here

global $connection;
$connection = @mysql_connect(hostnameorservername,serverusername,serverpassword) or die('Connection could not be made to the SQL Server. Please report this system error at <font color="blue">info@sparksdesignsolutions.com</font>');
@mysql_select_db(databasenamed,$connection) or die('Connection could not be made to the database. Please report this system error at <font color="blue">info@sparksdesignsolutions.com</font>');	
?>
