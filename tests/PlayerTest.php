<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require_once 'src/Player.php';

class PlayerTest extends TestCase
{
    protected $player;

    protected function setUp()
    {
        $this->player = new Player();
    }

    public function testHandIsEmptyToStart()
    {
        $this->assertEquals(empty($this->player->hand), true);
    }

    public function testReceivesCard()
    {
        $testCard = 'AS';
        $this->player->receiveCard($testCard);

        $this->assertContains($testCard, $this->player->hand);
    }
}
