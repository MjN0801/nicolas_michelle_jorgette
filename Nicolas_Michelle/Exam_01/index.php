<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
	<form method="post">
	<h3>Click the button to check if the word is a palindrome.</h3>
	<input type="text" id="text_palindrome" name="text_palindrome" autocomplete="off"></label>
	<button type="submit" name="button_submit" value="button_submit">Submit</button>
	<br>
	</form>
</body>

<!-- Check if the word is a palindrome. -->
<!-- Begin -->
<?php   
	if(isset($_POST['button_submit'])){
		 palindrome();
	}     

	function palindrome() { 
        $text_palindrome = $_POST['text_palindrome'];  
        //reverse the word 
        $reverse_string = strrev($text_palindrome);  
          
        //checking if the word is palindrome  
        if($text_palindrome == $reverse_string){  
            echo "The number $reverse_string is Palindrome";     
        }else{  
            echo "The number $reverse_string is not a Palindrome";   
        }  
    } 
?>  
<!-- End -->

</html>