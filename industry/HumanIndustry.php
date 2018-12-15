<?php namespace design\industry;

class HumanIndustry{

    private $type;

    public function getInstance(IHuman $human)
    {
        switch ($human) {
            case BlackHuman::class:
                $this->type = new BlackHuman();
                break;
            case WhiteHuman::class:
                $this->type = new WhiteHuman();
                break;
            case YellowHuman::class:
                $this->type = new YellowHuman();
                break;
            default:
                $type = null;
        }

        return $this->type;
    }
}
