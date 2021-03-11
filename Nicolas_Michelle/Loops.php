<?php

//While Loop to sum all even numbers (0-10)
echo "While Loop to sum all even numbers (0-10) <br>";
//Begin
$count_even = 0;
$array_even = array();

while($count_even <= 10){
	if($count_even % 2 == 0){
		array_push($array_even, $count_even);
	}
	$count_even++;
}

$sum = array_sum($array_even);

print_r($sum);
//End

echo "<br><br>";

//Do While Loop that will display all odd numbers (0-10)
echo "Do While Loop that will display all odd numbers (0-10) <br>";
//Begin
$count_odd = 0;
$odd = '';

Do {
	if($count_odd % 2 != 0){
		$odd = $odd . ' ' .$count_odd;
	}
	$count_odd++;
} while ($count_odd <= 10);

print_r($odd);
//End

echo "<br><br>";

//For Loop that will display 10 numbers in Fibonacci Sequence
echo "For Loop that will display 10 numbers in Fibonacci Sequence <br>";
//Begin
$count = 1;

$first = 1;
$second = 2;

for ($i=0; $i < 10; $i++) { 
	print_r($second .' ');
	$sum = $first + $second;
	$first = $second;
	$second = $sum; 
}
//End

?>