<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require_once 'src/Dealer.php';

class DealerTest extends TestCase
{
    protected $dealer;

    public function setUp()
    {
        $stub = $this->createMock(Deck::class);
        $stub->cards = ['AH', '2H', '3H', '4H', '5H', '6H', '7H', '8H', '9H', '10H', 'JH', 'QH', 'KH'];
        $this->dealer = new Dealer($stub);
    }

    public function testShuffleTheDeck()
    {
        $beforeShuffle = $this->dealer->deck->cards;
        $this->dealer->shufleDeck();
        $afterShuffle = $this->dealer->deck->cards;

        $this->assertNotEquals($beforeShuffle, $afterShuffle);
    }

    public function testDealsTopCardInDeck()
    {
        $topCard = 'KH';
        $dealtCard = $this->dealer->dealOneCard();

        $this->assertEquals($topCard, $dealtCard);
    }
}
