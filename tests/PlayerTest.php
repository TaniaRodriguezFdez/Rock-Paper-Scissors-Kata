<?php
namespace Tests;

use App\Models\Player;
use App\Models\Rock;
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    public function test_player_chose_rock()
    {
        $player = new Player;
        $rock = new Rock;

        $player-> chose("Rock");

        $this-> assertEquals($rock, $player->getFigure());
    }

    
}
