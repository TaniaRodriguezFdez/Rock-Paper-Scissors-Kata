<?php
namespace Tests;

use App\Models\Player;
use PHPUnit\Framework\TestCase;

class Game extends TestCase {

    public function test_player1_rock_player2_scissors_1_win()
    {
        $player1 = new Player;
        $player2 = new Player;
        $player1-> chose("Rock");
        $player2->chose("Scissors");

        $winnner = $game->start($player1,$player2);

        $this->$this->assertEquals("Player 1 win", $winnner);
    }

}