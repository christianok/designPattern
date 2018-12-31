<?php namespace design\memento;

class CareTaker
{
    private $mementoList = [];

    public function add($state)
    {
        $this->mementoList[] = $state;
    }

    public function set($index)
    {
        return $this->mementoList[$index];
    }
}
