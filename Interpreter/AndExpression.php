<?php namespace design\interpreter;

class AndExpression implements IExpression
{
    protected $exp1;
    protected $exp2;

    public function __construct($exp1, $exp2)
    {
        $this->exp1 = $exp1;
        $this->exp2 = $exp2;
    }

    public function interpret($context)
    {
        return $this->exp1.interpret($context) && $this->exp2.interpret($context);
    }
}