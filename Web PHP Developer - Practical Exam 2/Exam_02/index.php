<?php

$handle = fopen("index.php",'w');
$text = "<?php\r\n\r\n//This is a comment\r\n\r\necho “This is a test page!”;\r\necho “Exam number two!”;\r\n\r\n// This is the end of a comment";

fwrite($handle,$text ,1000);
fclose($handle);


echo "This is a test page! </br>";
echo "Exam number two!";


?>


