<?php

require 'Log.php';

// $test = new Log('cli');
// $test->info("This is an info message");
// $test->error("This is an error message");


$file = new File('file.txt');
$file->append('Hello joshua!');
$file->close();