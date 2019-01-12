<?php namespace design\interpreter;

class InterpreterPatternDemo
{
    public static function getMaleExpression()
    {
        $robert = new TerminalExpression('Robert');
        $john = new TerminalExpression('John');

        return new OrExpression($robert, $john);
    }

    public static function getFemaleExpression()
    {
        $julie = new TerminalExpression('julie');
        $lucy = new TerminalExpression('lucy');

        return new AndExpression($julie, $lucy);
    }
}

$demo = new InterpreterPatternDemo();
