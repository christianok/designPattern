<?php namespace command\command;

class AddRequirementCommand extends Command
{
    public  function execute()
    {
        $this->rg->find();

        $this->rg->add();

        $this->rg->plan();
    }
}