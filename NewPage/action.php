<?php
$fileHandle = fopen("mydatafile", 'a+');
fwrite($fileHandle,'new_user');
fclose($fileHandle);
header("location: index.html");
?>
