<?php

header('Content-type: application/mp3');  
header("Content-Disposition: attachment; filename=Mental-Clairity.mp3");   
readfile("http://goldcoach.ru/vsl/meditation-focus/Mental-Clairity.mp3");

?>