<?php
$randomInt = rand(1, 100);

echo "your new random value is $randomInt\n";

date_default_timezone_set("AMERICA/Los_Angeles");
$months = array();

for ($i = 1; $i <= 12; $i++) {
	$months[$i] = date(F, mktime(0, 0, 0, $i));
	echo "$months[$i]\n";
}

sort($months);
echo "----\n";

foreach($months as $m) {
	echo "$m\n";
}


?>
