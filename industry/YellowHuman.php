<?php namespace design\industry;

class YellowHuman implements IHuman
{
    public function getColor()
    {
        echo 'yellow';
    }

    public function speak()
    {
        echo 'chinese';
    }
}