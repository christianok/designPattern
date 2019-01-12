<?php namespace design\interpreter;

interface IExpression
{
    public function interpret($context);
}
