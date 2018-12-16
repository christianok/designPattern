<?php namespace design\proxy\CommonProxy;

class GamePlayer implements IGamePlayer
{
    protected $player;

    public function __construct($name)
    {
        $this->player = $name;
    }

    public function logIn($username, $password)
    {
        echo $this->player . 'logging';
    }

    public function killBoss()
    {
        echo $this->player . 'kill a boss';
    }

    public function upgrade()
    {
        echo $this->player . 'upgraded';
    }
}
