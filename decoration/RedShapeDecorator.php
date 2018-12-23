<?php namespace design\decoration;

class RedShapeDecorator extends ShapeDecorator
{
    public function __construct(IShape $decoration)
    {
        parent::__construct($decoration);
    }

    public function draw()
    {
        $this->boardLine();
        parent::draw();
    }

    public function boardLine()
    {
        echo '---------------';
    }
}
