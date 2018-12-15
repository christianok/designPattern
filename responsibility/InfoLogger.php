<?php namespace design\responsibility;

class InfoLogger extends AbstractLogger
{
    protected static $level;

    public function __construct($level)
    {
        self::$level = $level;
    }

    public function log($message)
    {
       echo 'Info:logger' . $message;
    }
}
