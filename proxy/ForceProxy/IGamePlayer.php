<?php namespace design\proxy\ForceProxy;

interface IGamePlayer
{
    public function logIn($username, $password);

    public function killBoss();

    public function upgrade();

    public function getProxy();
}
