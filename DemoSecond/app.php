<?php

include 'example.php';

printf("\n\n\n\n\nEnter your ID: ");
$handle = fopen ("php://stdin","r");
$line = fgets($handle);

printf("\n\nStudent ID: %s", $line);

?>