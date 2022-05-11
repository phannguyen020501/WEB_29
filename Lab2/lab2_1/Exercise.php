<?php 
	$name = $_POST["name"];
	$class = $_POST["class"];
	$university = $_POST["university"];
	$hobbies = array();

	$cat = $_POST["reading"];
	if($cat == "Yes") array_push($hobbies,"reading");

	$cooking = $_POST["cooking"];
	if($cooking == "Yes") array_push($hobbies,"Cooking");

	$dog = $_POST["soccer"];
	if($dog == "Yes") array_push($hobbies,"soccer");

	$math = $_POST["math"];
	if($math == "Yes") array_push($hobbies,"Math");

	$web = $_POST["film"];
	if($web == "Yes") array_push($hobbies,"film");

	$facebook = $_POST["facebook"];
	if($facebook == "Yes") array_push($hobbies,"Facebook");

	$youtube = $_POST["music"];
	if($youtube == "Yes") array_push($hobbies,"music");

	print "Hello, $name <br />";
	print "You are studing at $class, $university <br />";
	print "Your hobby is :  <br />";
	foreach ($hobbies as $i) {
		print "-$i <br />";
	}
 ?>