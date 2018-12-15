<?php namespace design\singleton;

/**
 *单例模式
 */
class Singleton{

    protected static $_instance = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }
}
