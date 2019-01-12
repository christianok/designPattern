<?php namespace design\iterator;

interface IIterator
{
    public function first();

    public function next();

    public function hasNext();

    public function remove();
}
