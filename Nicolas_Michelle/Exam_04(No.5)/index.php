<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
	<form method="post">
	<h3>Click the button to reverese the word.</h3>
	<input type="text" id="text_string" name="text_string" autocomplete="off"></label>
	<button type="submit" name="button_submit" value="button_submit">Submit</button>
	<br>
	</form>
</body>

<!-- Reverse the word. -->
<!-- Begin -->
<?php   
	if(isset($_POST['button_submit'])){
		 reverse();
	}     

	function reverse() { 
        $reversed_word = strrev($_POST['text_string']);   //'strrev' to reverse the given string

        print_r($reversed_word);
    } 
?>  
<!-- End -->

</html>