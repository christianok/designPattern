<?php namespace design\responsibility;

class ChainPattern
{
    public static function getChainOfLoggers()
    {
        $infoLogger = new InfoLogger(AbstractLogger::TYPE_INFO);
        $debugLogger = new DebugLogger(AbstractLogger::TYPE_DEBUG);
        $errorLogger = new ErrorLogger(AbstractLogger::TYPE_ERROR);

        $infoLogger->setNextLogger($debugLogger);
        $debugLogger->setNextLogger($errorLogger);

        return $infoLogger;
    }

    public function DemoOutput()
    {
        $chain = self::getChainOfLoggers();
        $chain->logMessage(AbstractLogger::TYPE_ERROR, 'this is a Error Message');
        $chain->logMessage(AbstractLogger::TYPE_INFO, 'this is a Info Message');
        $chain->logMessage(AbstractLogger::TYPE_DEBUG, 'this is a Debug Message');
    }
}
