<?php namespace design\memento;

class Originator
{
    private $state;

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState($state)
    {
        return $this->state;
    }

    public function saveState2Memento()
    {
        return new Memento($this->state);
    }

    public function getStateFromMemento(Memento $memento)
    {
        return $memento->getState();
    }
}
