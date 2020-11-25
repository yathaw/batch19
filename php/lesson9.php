<?php 
	
	echo "<h1> Date </h1>";

	echo "Today is ".date('Y-m-d')."<br>";

	echo "Today is ".date('Y.m.d')."<br>";

	echo "Today is ".date('Y m d')."<br>";

	echo "Today is ".date('d m Y')."<br>";

	echo "Today is ".date('d M Y')."<br>";

	echo "Today is ".date('d M y')."<br>";

	echo "Today is ".date('D')."<br>";

	echo "Today is ".date('l')."<br>";

	echo "<h1> Time </h1>";

	echo "Time is ".date("h:i:sa")."<br>";


	date_default_timezone_set("Asia/Rangoon");
	echo "Yangon Time is ".date("h:i:sa")."<br>";


	date_default_timezone_set("Asia/Dubai");
	echo "Dubai Time is ".date("h:i:sa")."<br>";

	
	echo "<h1> strtotime </h1>";

	$today = strtotime("today");
	echo "$today <br>";
	echo "Today is : ".date('d M, Y', $today)."<br>";
	echo "<hr>";


	$tomorrow = strtotime("tomorrow");
	echo "$tomorrow <br>";
	echo "Tomorrow is : ".date('d M, Y', $tomorrow)."<br>";
	echo "<hr>";


	$comingSunday = strtotime("next Sunday");
	echo "$comingSunday <br>";
	echo "Coming Sunday is : ".date('d M, Y', $comingSunday)."<br>";
	echo "<hr>";


	$nexttwoWeek = strtotime("+2 weeks");
	echo "$nexttwoWeek <br>";
	echo "Next 2 Week is : ".date('d M, Y', $nexttwoWeek)."<br>";
	echo "<hr>";


	$after3Months = strtotime("+3 months");
	echo "$after3Months <br>";
	echo "3 Months Later : ".date('d M, Y', $after3Months)."<br>";
	echo "<hr>";
















?>