<?php
declare(strict_types=1);

require_once 'Deck.php';

class Dealer
{
    public $deck;

    public function __construct(Deck $deck = null)
    {
        $this->deck = $deck ?: new Deck();
    }

    public function shufleDeck()
    {
        $arr = $this->deck->cards;

        for ($i = 0; $i < count($arr); ++$i) {
            $k = rand(0, $i);
            $tmp = $arr[$i];
            $arr[$i] = $arr[$k];
            $arr[$k] = $tmp;
        }
        return $this->deck->cards = $arr;
    }

    public function dealOneCard()
    {
        return array_pop($this->deck->cards);
    }
}
