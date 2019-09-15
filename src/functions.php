<?php
function get_yob($age){
	$year=date("Y")-$age;
	return $year;
}