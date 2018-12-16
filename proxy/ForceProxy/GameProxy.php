<?php namespace design\proxy\ForceProxy;

class GameProxy implements IGamePlayer
{
    protected $player;

    public function  __construct(IGamePlayer $player)
    {
        $this->player = $player;
    }

    public function getProxy()
    {
        return $this;
    }

    public function upgrade()
    {
        $this->player->upgrade();
    }

    public function killBoss()
    {
        $this->player->killBoss();
    }

    public function logIn($username, $password)
    {
       $this->player->logIn($username, $password);
    }
}
