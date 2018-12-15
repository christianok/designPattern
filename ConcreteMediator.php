<?php namespace design\mediator;

class ConcreteMediator extends Mediator
{
    public  function doSomething1()
    {
        $this->concreteColleague1->selfMethod1();
        $this->concreteColleague2->selfMethod2();
    }
    public  function doSomething2()
    {
        $this->concreteColleague1->selfMethod1();
        $this->concreteColleague2->selfMethod2();
    }
}