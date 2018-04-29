<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require_once 'src/Deck.php';

class DeckTest extends TestCase
{
    protected $deck;

    protected function setUp()
    {
        $this->deck = new Deck();
    }

    public function testIsAFullDeckOfCards()
    {
        $numberOfCards = 52;
        $this->assertCount($numberOfCards, $this->deck->cards);
    }

    public function testCorrectBottomCard()
    {
        $BottomCard = 'AH';
        $this->assertEquals($BottomCard, $this->deck->cards[0]);
    }

    public function testCorrectTopCard()
    {
        $TopCard = 'KD';
        $this->assertEquals($TopCard, $this->deck->cards[51]);
    }
}
