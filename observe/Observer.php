<?php namespace design\observe;

class Observer implements IObserver
{
    public function onChanged($args)
    {
        $args = func_get_args();
        log(json_encode($args));
    }
}