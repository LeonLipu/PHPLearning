<?php
//it is about database

$username = "root";
$password = "";
$hostname = "localhost";

$conncetion = mysql_connect($hostname, $username, $password) or die("could not able to connect");

$select = mysql_select_db("mydb");

$result = mysql_query("select * from tb1");

while ($row = mysql_fetch_array($result)) {

	echo $row{'name'} . "\n";
}

echo "connected to mysql ";
?>
