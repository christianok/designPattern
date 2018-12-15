<?php

class Invoker
{
    private $command;

    public function setCommand($command)
    {
        $this->command = $command;
    }

    public function action()
    {
        $this->command->execute();
    }
}