<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
	<form method="post">
	<h3>Click the button to check the date differencce (Y-M-D Format).</h3>
	<label>Date 1 :</label><label style="margin-left: 8%">Date 2 :</label><br>
    <input type="text" id="text_date_from" name="text_date_from" autocomplete="off"></label>
    <input type="text" id="text_date_to" name="text_date_to" autocomplete="off"></label>
	<button type="submit" name="button_submit" value="button_submit">Submit</button>
	<br>
	</form>
</body>

<!-- Check the date difference. -->
<!-- Begin -->
<?php   
	if(isset($_POST['button_submit'])){
		 date_difference();
	}     

	function date_difference() { 
        $text_date_from = explode('-',$_POST['text_date_from']);  //explode to get the year, month, and day separately
        $text_date_to = explode('-',$_POST['text_date_to']);  //explode to get the year, month, and day separately

        $year_from = $text_date_from[0]; //create a variable to hold the value
        $month_from = $text_date_from[1]; //create a variable to hold the value
        $day_from = $text_date_from[2]; //create a variable to hold the value

        $year_to = $text_date_to[0]; //create a variable to hold the value
        $month_to = $text_date_to[1]; //create a variable to hold the value
        $day_to = $text_date_to[2]; //create a variable to hold the value

        //use 'abs' to make the answers an absolute number
        $year_diff = abs($year_to - $year_from); //subtract the two given years
        $month_diff = abs($month_to - $month_from); //subtract the two given years
        $day_diff = abs($day_to - $day_from); //subtract the two given years

        print_r("$year_diff year, $month_diff month, $day_diff days");
    } 
?>  
<!-- End -->

</html>