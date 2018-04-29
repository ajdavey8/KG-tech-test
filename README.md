# Kurt Geiger Card Game Tech Test

### Task

The scenario is as follows:
You have a deck of 52 cards, comprised of 4 suits (hearts, clubs, spades and diamonds) each with 13 values (Ace, two, three, four, five, six, seven, eight, nine, ten, jack, queen and king).
There are four players waiting to play around a table.
The deck arrives in perfect sequence (so, ace of hearts is at the bottom, two of hearts is next, etc. all the way up to king of diamonds on the top).

The task is a simple one. Please create a simple command line program that when executed recreates the scenario above and then performs the following two actions:

- Shuffle the cards - We would like to take the deck that is in sequence and shuffle it so that no two cards are still in sequence.

- Deal the cards - We would then like to deal seven cards to each player (one card to the each player, then a second card to each player, and so on)

There is no need to necessarily do this in a visual way (for example, simply proving with a test that your deck is shuffled and that the players do now have seven cards will be sufficient)

### Approach

To complete this task I used TDD to make sure all classes and functions were fully tested. I initially started by planning out what objects were involved in this game and decided 4 classes would be required. I made sure each function and class had a single responsibility. For shuffling the deck, instead of using the PHP built in shuffle function, I used the [Fisher-Yates shuffle](https://en.wikipedia.org/wiki/Fisher%E2%80%93Yates_shuffle) to give a better level of randomness.

### Run Demo

To see a demo of the app in the terminal:

```
composer install
php play.php
```

### Run Tests
To run all tests:
```
./vendor/bin/phpunit -tests

```
To run tests with a more detailed output:

```
./vendor/bin/phpunit --testdox tests

```
