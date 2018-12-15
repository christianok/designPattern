<?php namespace design\industry;

class BlackHuman implements IHuman
{
    public function getColor()
    {
        echo 'black';
    }

    public function speak()
    {
        echo 'unknown';
    }
}