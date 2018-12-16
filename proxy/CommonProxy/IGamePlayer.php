<?php namespace design\proxy\CommonProxy;

interface IGamePlayer
{
    public function logIn($username, $password);

    public function killBoss();

    public function upgrade();
}
