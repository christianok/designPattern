<?php namespace design\bridge;

class Ipod extends Product
{
    public function beProduced()
    {
        echo 'the ipod id produced';
    }

    public  function beSell()
    {
        echo 'ipod is going to the market';
    }

}