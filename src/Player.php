<?php
declare(strict_types=1);

class Player
{
    public $hand = [];

    public function receiveCard($card)
    {
        array_push($this->hand, $card);
    }
}
