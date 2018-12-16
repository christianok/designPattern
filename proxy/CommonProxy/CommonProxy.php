<?php namespace design\proxy\CommonProxy;

class CommonProxy implements IGamePlayer
{
    protected $proxy;

    public function __construct(IGamePlayer $player)
    {
        $this->proxy = new GamePlayer($player);
    }

    public function logIn($username, $password)
    {
       $this->proxy->logIn($username, $password);
    }

    public function killBoss()
    {
        $this->proxy->killBoss();
    }

    public function upgrade()
    {
        $this->proxy->upgrade();
    }
}
