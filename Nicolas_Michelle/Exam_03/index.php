<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
	<form method="post">
	<h3>Click the button to check if the number is Fibonacci.</h3>
	<input type="number" id="num_fibonacci" name="num_fibonacci" autocomplete="off"></label>
	<button type="submit" name="button_submit" value="button_submit">Submit</button>
	<br>
	</form>
</body>

<!-- Check if the number is Fibonacci. -->
<!-- Begin -->
<?php   
	if(isset($_POST['button_submit'])){
		 fibonacci_function();
	}     

	function fibonacci_function() {

		$num_fibonacci = $_POST['num_fibonacci'];

		for ($i = 1; $i <= $num_fibonacci; $i++) { //For Loop to get the numbers from 1 to N

			$num1_to_square = 5 * $i * $i + 4; //first computation
			$num2_to_sqaure = 5 * $i * $i - 4; //second computation

			$squared1 = (int)(sqrt($num1_to_square)); //to get the square root of the answer from first computation
			$squared2 = (int)(sqrt($num2_to_sqaure)); //to get the square root of the answer from second computation

			if ($num1_to_square == $squared1 * $squared1 || $num2_to_sqaure == $squared2 * $squared2) { //to check if the computed numbers have square root
				echo "$i is a Fibonacci Number \n <br>";
			} else {
				echo "$i is a not Fibonacci Number \n <br>" ; 
			}
		}

    } 

?>  
<!-- End -->

</html>