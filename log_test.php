<?php

require 'Log.php';

$test = new Log('cli');
$test->info("This is an info message");
$test->error("This is an error message");