<?php namespace design\bridge;

class Apple extends Product
{
    public  function beProduced()
    {
        echo 'the app is being produced';
    }

    public function beSell()
    {
        echo 'the app is going to the market';
    }
}