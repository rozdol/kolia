<?php
$name=$_GET[name];
$surname=$_GET[surname];
$age=$_GET[age];
require('../src/functions.php');
$year=get_yob($_GET[age]);

echo "Hello $name $surname You ware born <b>$year</b><br>";

if($age==40){
	require('../src/test.php');
}

