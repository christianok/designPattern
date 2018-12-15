<?php namespace command\command;

class DeletePageCommand extends Command
{
    public  function execute()
    {
        $this->pg->find();

        $this->pg->add();

        $this->pg->plan();
    }
}