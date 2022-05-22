<?php
include 'Question_Data.php';

$cur_id = (isset($_POST['I_ID'])) ? $_POST['I_ID'] : null;

DropQues($cur_id);