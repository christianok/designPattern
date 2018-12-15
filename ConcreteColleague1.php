<?php namespace design\mediator;

class ConcreteColleague1 extends Colleague
{
    public function __construct(Mediator $mediator)
    {
        parent::__construct($mediator);
    }

    public function selfMethod1()
    {
        echo 'this is the colleague 1 method';
    }

    public function depMethod1()
    {
        $this->mediator->doSomething1();
    }
}
