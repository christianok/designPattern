<?php namespace design\observe;

class Observable implements IObservable
{
    protected static $_instances = array();

    public function addCustomer()
    {
        $c = '';
        foreach (self::$_instances as $instance) {
            $instance->onchanged($c);
        }
    }

    public function addObserver($observer)
    {
        self::$_instances[] = $observer;
    }
}
