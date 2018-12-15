<?php
abstract class Corp
{
    private $position;
    private $salary;
    private $name;

    public function __construct($position,$salary, $name)
    {
        $this->position = $position;
        $this->salary = $salary;
        $this->name = $name;
    }

    public function getInfo()
    {
        echo "position: " . $this->position.
            "salary: " . $this->salary.
            "name: " . $this->name;
    }
}
