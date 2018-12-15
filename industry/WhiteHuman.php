<?php namespace design\industry;

class WhiteHuman implements IHuman
{
    public function getColor()
    {
        echo 'white';
    }

    public function speak()
    {
        echo 'english';
    }
}
