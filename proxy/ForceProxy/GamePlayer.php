<?php namespace design\proxy\ForceProxy;


class GamePlayer implements IGamePlayer
{
    protected $name;
    protected $gamePlayer;

    public function logIn($username, $password)
    {
        if ($this->isProxy()) {
            echo $this->name . 'IS LOGGING';
        } else {
            echo 'please use the specified proxy';
        }
    }

    public function killBoss()
    {
        if ($this->isProxy()) {
            echo $this->name . 'IS killing boss';
        } else {
            echo 'please use the specified proxy';
        }
    }

    public function upgrade()
    {
        if ($this->isProxy()) {
            echo $this->name . 'IS upgraded';
        } else {
            echo 'please use the specified proxy';
        }
    }

    public function getProxy()
    {
        $this->gamePlayer = new GameProxy($this);
    }

    private function isProxy()
    {
        if ($this->gamePlayer) {
            return true;
        }

        return false;
    }
}
