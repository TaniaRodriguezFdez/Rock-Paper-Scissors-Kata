<?php

namespace Tests;

use App\Game;
use App\Models\Player;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase {
    
    /** @test */
    public function test_player1_rock_player2_scissors_1_win()
    {
        $game = new Game;
        $player1 = new Player;
        $player2 = new Player;

        $player1->chose("Rock");
        $player2->chose("Scissors");
        $winner = $game->start($player1,$player2);

        $this->assertEquals("Player 1 wins", $winner);
    }
    public function test_player1_scissors_player2_rock_2_win()
    {
        $game = new Game;
        $player1 = new Player;
        $player2 = new Player;

        $player1->chose("Scissors");
        $player2->chose("Rock");
        $winner = $game->start($player1,$player2);

        $this->assertEquals("Player 2 wins", $winner);
    }
    public function test_player1_paper_player2_rock_1_win()
    {
        $game = new Game;
        $player1 = new Player;
        $player2 = new Player;

        $player1->chose("Paper");
        $player2->chose("Rock");
        $winner = $game->start($player1,$player2);

        $this->assertEquals("Player 1 wins", $winner);
    }
    
}
