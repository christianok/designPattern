<?php namespace design\interpreter;

/**
 *
 */
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
        $lucy = new TerminalExpression('Lucy');
        $female = new TerminalExpression('Female');

        return new AndExpression($lucy, $female);
    }

    public function test()
    {
        $male = self::getMaleExpression();
        $female = self::getFemaleExpression();

        $male->interpret('John');
        $female->interpret('Lucy');
    }
}
