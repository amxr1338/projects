<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>my php site!</title>
</head>
<body>
<?php
	$minute = 60;
	$hour = $minute * 60;
	$day = $hour * 24;
	$week = $day * 7;
	$month = $day * 30;
	$year = $day * 365;
	echo "<p>В минуте: {$minute} секунд</p>\n";
	echo "<p>В часу: {$hour} секунд</p>\n";
	echo "<p>В дне: {$day} секунд</p>\n";
	echo "<p>В неделе: {$week} секунд</p>\n";
	echo "<p>В месяце: {$month} секунд</p>\n";
	echo "<p>В году {$year} секунд</p>\n";



	$x = 60;
	echo "В минуте: ", $x * 60, " секунд, а воот в часу: ", $x * 60 * 60, ", кстати, в дне: ", $x * 60 * 60 * 24, ", или же, например в неделе: ", $x * 60 * 60 * 24 * 7, " секунд.";
		echo "\n<select>\n";
	$year = 1900;
	while ($year <= 2021) {
		echo "<option>{$year}</option>\n";
		$year++;
	}
	echo "</select>\n";
	echo "<p></p>\n";
	$i = 1;
	$number = 1;
	while($i <= 10) {
		if ($number >= 10) {
			$number = 1;
			echo "</br>\n";
		}
		while($number <= 10) {
			echo $i * $number, " \n";
			$number++;
		}
		$i++;
	}
?>
</body>
</html>
