<?php
$un=$_GET['id'];
$s=$_GET['st'];
class DBphp extends SQLite3

{

function __construct()

{

$this->open('C:\sqlite3\Lab_Reports.db');

}

}

$db = new DBphp();

$query="UPDATE CITY_PATHOLOGY_LAB_FEVER_PANEL SET status=$s where username=$un";

if($db->exec($query))
{
	echo "Done!".$un;
}
//echo $st;
?>