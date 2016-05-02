<?php

require 'Log.php';

$date = date("Y-m-d");

$test = new Log();
$test->filename = "log-$date.log";
$test->logMessage('[TEST]', "This is a test message.");
$test->info();
$test->error();