<?php namespace design\responsibility;

class DebugLogger extends AbstractLogger
{
    protected static $level;

    public function  __construct($level)
    {
        self::$level = $level;
    }

    public function log($message)
    {
       echo 'Debug:logger' . $message;
    }
}
