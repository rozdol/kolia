<?php
$X=$_GET[number_one];
$Y=$_GET[number_two];
require('../src/functions.php');
$result = summa($X,$Y);

echo  "You numberOne $X , number_two $Y and summa <b>$result</b><br>";

if($result == 0){
	require('../src/test.php');
}
