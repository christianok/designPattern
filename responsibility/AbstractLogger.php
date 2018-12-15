<?php namespace design\responsibility;

/**
 *责任链模式（抽象类）
 */
abstract class  AbstractLogger
{
    const TYPE_INFO = 1;
    const TYPE_DEBUG = 2;
    const TYPE_ERROR = 3;

    protected static $level;

    protected $nextLogger;

    public function setNextLogger(AbstractLogger $logger)
    {
        $this->nextLogger = $logger;
    }

    public function logMessage($level, $message)
    {
        if ($level <= self::$level) {
            $this->log($message);
        }

        if ($this->nextLogger != null) {
            $this->setNextLogger->write($message);
        }
    }

    abstract public function log($message);
}
