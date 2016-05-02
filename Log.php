<?php

class Log {

    public $filename;

    public function logMessage($logLevel, $message){
        $handle = fopen($this->filename, 'a');
        $today = date("Y-m-d H:i:s");
        fwrite($handle, $today . ' ' . $logLevel . ' ' . $message . PHP_EOL);
        fclose($handle);
    }

    public function info(){
        $this->logMessage('[INFO]', "This is an info message.");
    }

    public function error(){
        $this->logMessage('[ERROR]', "This is an error message.");
    }

}