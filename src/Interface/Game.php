<?php

namespace app;

class Game{

    public function star($player1, $player2): string
    {
        if ($player1->getFigure()->getType() == "Rock" && $player2->getFigure()->getType() == "Scissors") {
            
            return "Player 1 wins";
        }
    }

}