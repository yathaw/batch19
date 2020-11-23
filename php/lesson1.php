<?php 
	echo "Hello World";

	echo "<br>";
	echo '<br>';

	var_dump("Hello World");
	echo "<br>";

	$name = "Ya Thaw Myat Noe";

	echo $name."<br>";

	echo "$name <br>";
	echo '$name <br>';

	$name1 = " Ko Ko ";

	var_dump($name1);

	$trim_name1 = trim($name1);

	echo "<br>";
	var_dump($trim_name1);
	echo "<br>";


	echo strlen($name1)."<br>";

	echo strlen($trim_name1)."<br>";


	echo strcasecmp("Hello World", "hello world")."<br>"; // 0

	echo strcasecmp("Hello World", "hello")."<br>"; // 6
 
	echo strcasecmp("HELLO", "hello World")."<br>"; // -6


	echo strtolower("HELLO WORLD")."<br>";

	echo strtoupper("hello world")."<br>";


	echo substr("Hello World",6)."<br>";

	echo substr("Hello World",-2)."<br>";


	echo str_replace('World', 'Bootcamper' ,'Hello World');















?>