<?php namespace design\decoration;

abstract class ShapeDecorator implements IShape
{
    protected $decoration;

    public function __construct(IShape $decoration)
    {
        $this->decoration = $decoration;
    }

    public function draw()
    {
        $this->decoration->draw();
    }
}
