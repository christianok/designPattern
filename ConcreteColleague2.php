<?php namespace design\mediator;

class ConcreteColleague2 extends Colleague
{
    public function __construct(Mediator $mediator)
    {
        parent::__construct($mediator);
    }

    public function selfMethod()
    {
        echo 'this is colleague 2 method';
    }

    public function depMethod()
    {
        $this->mediator->doSomething2();
    }
}
