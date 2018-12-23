<?php namespace design\decoration;

$circleNormal = new Circle();
$rectangleNormal = new Rectangle();

$rectangle = new RedShapeDecorator(new Circle());
$circle = new RedShapeDecorator(new Rectangle());

// 普通
$circleNormal->draw();
$rectangleNormal->draw();

// 装饰模式
$rectangle->draw();
$circle->draw();
