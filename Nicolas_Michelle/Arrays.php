<?php

//Display the value that have the most number of occurence; in case of tie, arrange it in alphabetical order.
echo "Display the value that have the most number of occurence (alphabetical order). Array['Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian'] <br>";
//Begin
$name_array = array('Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian');

$array_sort_name = sort($name_array);

$array_count_name = array_count_values($name_array);

$array_max = max($array_count_name);

$x = 0;

$array_keys_name = array();

while ($x < count($array_count_name)) {
	if ($array_max == array_values($array_count_name)[$x]) {
		array_push($array_keys_name, array_keys($array_count_name)[$x]);
	}
	$x++;
}

print_r(implode(', ', $array_keys_name));
//End

echo "<br><br>";

//Sort the array in ascending order; if the value is an odd number, round it up to the nearest tens.
echo "Sort the array in ascending order; if the value is an odd number, round it up to the nearest tens. Array[9863, 7127, 2020, 80, 131, 55, 100] <br>";
//Begin
$number_array = array(9863, 7127, 2020, 80, 131, 55, 100);

$ascending_array = array();

$count = 0;

Do {
	if($number_array[$count] % 2 != 0){
		$nearest_tens = round($number_array[$count], -1);
		array_push($ascending_array, $nearest_tens);
	}else{
		array_push($ascending_array, $number_array[$count]);
	}
	$count++;
} while ($count < count($number_array));

$number_sort = sort($ascending_array);

print_r(implode(', ', $ascending_array));
//End

echo "<br><br>";

//Display the Item that is not repetitive.
echo "Display the Item that is not repetitive. Array['red', 'blue', 'black', 'red', 'blue', 'blue', 'red', 'gold'] <br>";
//Begin
$color_array = array('red', 'blue', 'black', 'red', 'blue', 'blue', 'red', 'gold');

$array_count_color = array_count_values($color_array);

$x = 0;

$array_keys_color = array();

while ($x < count($array_count_color)) {
	if (array_values($array_count_color)[$x] == 1) {
		array_push($array_keys_color, array_keys($array_count_color)[$x]);
	}
	$x++;
}

print_r(implode(', ', $array_keys_color));
//End
?>