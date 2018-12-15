<?php namespace design\observe;

/**
 * Created by PhpStorm.
 * 被观察者
 */
interface IObservable
{
    public function addObserver($ob);

    public function addCustomer();
}
