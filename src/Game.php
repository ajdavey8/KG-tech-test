<?php
declare(strict_types=1);

require_once 'Dealer.php';
require_once 'Player.php';

class Game
{
    public $dealer;
    public $playersAtTable = [];

    public function __construct($numberOfPlayers = 4, Dealer $dealer = null)
    {
        $this->addPlayer($numberOfPlayers);
        $this->dealer = $dealer ?: new Dealer();
    }

    public function dealHand()
    {
        $this->dealer->shufleDeck();
        $this->dealCards();
    }

    private function addPlayer($numberOfPlayers)
    {
        for ($i = 1; $i <= $numberOfPlayers; $i++) {
            $player = new Player();
            $this->addPlayerToTable($player);
        }
    }

    private function addPlayerToTable($player)
    {
        array_push($this->playersAtTable, $player);
    }

    private function dealCards($numberOfCardsPerPlayer = 7)
    {
        for ($i = 1; $i <= $numberOfCardsPerPlayer; $i++) {
            $this->dealOneCardToEveryPlayer();
        }
    }

    private function dealOneCardToEveryPlayer()
    {
        foreach ($this->playersAtTable as $player) {
            $card = $this->dealer->dealOneCard();
            $player->receiveCard($card);
        }
    }
}
