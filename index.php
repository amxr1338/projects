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
	$nums = [1,2,3,4,5,6,7,8,9,10];
	for ($i = 0; $i <= count($nums) - 1; $i++) {
		if ($nums[$i] % 2 == 0) {
			echo $nums[$i], "</br>";
		}
	}
	echo "<p></p>";
	foreach($nums as $item) {
		if ($item % 2 == 0) {
			echo $item, "</br>";
		}
	}
	echo "<p></p>";
	$goods = [
    	[
    	    'title' => 'Nokia',
    	    'price' => '100',
    	    'qty' => '10',
    	],
    	[
    	    'title' => 'Sony',
    	    'price' => '120',
    	    'qty' => '7',
    	],
    	[
    	    'title' => 'LG',
    	    'price' => '105',
    	    'qty' => '15',
    	],
	];

	for ($i = 0; $i <= count($goods) - 1;$i++) {
		if ($goods[$i]['price'] < 120) {
			$goods[$i]['price'] += 15;
		}
	}
	echo "<pre>". print_r($goods, 1)."</pre>";
	echo "<p></p>";
	$goods = [
    	[
    	    'title' => 'Nokia',
    	    'price' => '100',
    	    'qty' => '10',
    	],
    	[
    	    'title' => 'Sony',
    	    'price' => '120',
    	    'qty' => '7',
    	],
    	[
    	    'title' => 'LG',
    	    'price' => '105',
    	    'qty' => '15',
    	],
	];
	foreach($goods as $item) {
		echo $item['price'];

	}
	echo "<pre>". print_r($goods, 1)."</pre>";
?>
</body>
</html>
