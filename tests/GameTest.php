<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require_once 'src/Game.php';

class GameTest extends TestCase
{
    protected $game;
    protected $numberOfPlayers;

    public function setUp()
    {
        $this->game = new Game();
        $this->numberOfPlayers = 4;
    }

    public function testGameSetsUpWithCorrectNumberOfPlayers()
    {
        $this->assertCount($this->numberOfPlayers, $this->game->playersAtTable);
    }

    public function testCorrectAmountOfCardsRemainingInDeckAfterDeal()
    {
        $this->game->dealHand();
        $numberOfCardsThatShouldBeLeft = 24;
        $RemainingCardsInDeck = $this->game->dealer->deck->cards;
        $this->assertCount($numberOfCardsThatShouldBeLeft, $RemainingCardsInDeck);
    }

    public function testCorrectAmountOfCardsInEachPlayersHand()
    {
        $this->game->dealHand();
        $numberOfCardsInHand = 7;

        for ($i = 0; $i <= $this->numberOfPlayers - 1; $i++) {
            $this->assertCount($numberOfCardsInHand, $this->game->playersAtTable[$i]->hand);
        }
    }
}
