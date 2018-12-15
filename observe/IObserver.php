<?php namespace design\observe;

/**
 * 观察者
 */
interface IObserver
{
    public function onChanged($args);
}