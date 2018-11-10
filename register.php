<?php

DEFINE ('DB_HOST',"localhost");
DEFINE ('DB_USER',$dat["mysqlusername"]);
DEFINE ('DB_PASSWORD',$dat["mysqlpassword"]);
DEFINE ('DB_NAME',$dat["mysqldatabase"]);

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL ' . mysqli_connect_error());

?>
