<?php namespace command\command;

abstract class Command
{
    protected $rg = null;
    protected $pg = null;
    protected $cg = null;

    public function __construct()
    {
        $this->rg = new RequirementGroup();
        $this->pg = new PageGroup();
        $this->cg = new CodeGroup();
    }

    public abstract function execute();

}