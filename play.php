<?php

require_once 'src/Game.php';

$game = new Game();

echo("Players at table: \n");
print_r($game->playersAtTable);

echo("Unshuffled Deck: \n");
print_r($game->dealer->deck->cards);

$game->dealHand();
echo("Deck now shuffled \n");

echo("Cards dealt to players: \n");
print_r($game->playersAtTable);

echo("Cards remainng in deck: \n");
print_r($game->dealer->deck->cards);
