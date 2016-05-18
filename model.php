<?php

class Model 
{
    private $attributes = [];

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
        if(isset($this->attributes[$name])){
            echo 'Attributes have been set'.PHP_EOL;
        }
    }

    public  function __get($name)
    {
        if(array_key_exists($name, $this->attributes)){
            echo "The attributes value for the attribute $name is: ";
            echo $this->attributes[$name].PHP_EOL;
        } else {
            return null;
        }
    }

    protected static $table;

    public static function getTableName()
    {
        return static::$table;
    }

}