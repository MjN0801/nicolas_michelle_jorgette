<?php

$new_php_file = fopen("hello_there.php", "w"); //Create new file

$codes = "<?php\n\n"; //'\n' for next line
fwrite($new_php_file, $codes); //write code/s in the created file

$codes = "//This is a comment\n\n";
fwrite($new_php_file, $codes);

$codes = 'echo "This is a test page!";'."\n".'echo "Exam number two!";'."\n\n";
fwrite($new_php_file, $codes);

$codes = "//This is the end of a comment";
fwrite($new_php_file, $codes);

?>