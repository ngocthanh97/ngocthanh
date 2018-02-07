<?php
$a = [1,2,3,4,5,6,7,8,9,10];
  $b = [1,2,3,4,5,6,12,44,99,100];

	$c = array_unique(array_merge($a,$b));
	foreach ($c as $key => $value) {
		if(in_array($value, $b) && in_array($value, $a)){

			unset($c[$key]);
		}
		
	}
echo "mang a : ";
foreach ($a as $value) {
	echo $value . ',';
}
echo "<br>mang b :";
foreach ($b as $value) {
	echo $value . ',';
}
echo "<br>mang c :";
foreach ($c as $value) {
	echo $value .',';
}
  ?>