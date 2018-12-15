<?php namespace design\mediator;

abstract class Mediator
{
    protected $concreteColleague1;
    protected $concreteColleague2;

    public function getC1()
    {
        return $this->concreteColleague1;
    }

    public function setC1(ConcreteColleague1 $c1)
    {
        $this->concreteColleague1 = $c1;
        return $this;
    }

    public function getC2()
    {
        return $this->concreteColleague2;
    }

    public function setC2(ConcreteColleague2 $c2)
    {
        $this->concreteColleague2 = $c2;
        return $this;
    }

    public abstract function doSomething1();

    public abstract function doSomething2();
}
