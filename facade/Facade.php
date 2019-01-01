<?php namespace design\facade;

/**
 * 门面模式的主类，目的是吧复杂的业务类封装成统一的
 * 一个类由外部调用，当这些类有任务业务逻辑更改的时候
 * 无需关心上层的调用。减少了系统的维护难度。类似laravel
 * 中的facade类
 */
class Facade
{
    protected static $circle;
    protected static $rectangle;
    protected static $square;

    public function __construct()
    {
        self::$circle = new CircleShape();
        self::$rectangle = new RectangleShape();
        self::$square = new SquareShape();
    }

    public static function drawCircle()
    {
        self::$circle->draw();
    }

    public static function drawSquare()
    {
        self::$square->draw();
    }

    public static function drawRectangle()
    {
        self::$rectangle->draw();
    }
}
