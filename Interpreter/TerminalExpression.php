<?php namespace design\interpreter;

class TerminalExpression implements IExpression
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function interpret($context)
    {
        if ($context[$this->data]) {
            return true;
        }
        return false;
    }
}
