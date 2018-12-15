<?php
class Branch extends Corp
{
    protected $data = [];// 设置下属

    public function __construct($position, $salary, $name)
    {
        parent::__construct($position, $salary, $name);
    }

    public function addSubordinate($data)
    {
        $this->data = $data;
    }

    public function getSubordinate()
    {
        return $this->data;
    }
}
