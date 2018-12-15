<?php namespace command\Group;

interface IGroup {
    public function find();
    public function add();
    public function delete();
    public function change();
    public function plan();
}