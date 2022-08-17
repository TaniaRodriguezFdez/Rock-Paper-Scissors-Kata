<?php

namespace GameTests;

use PHPUnit\Framework\TestCase;
use App\Player;
class GameTest extends TestCase {
    public function testScissors(){
        $element = new Scissors();
        $this->assertTrue($element->fight(new Paper()));
    }
    public function testpaperCubrerock()
    {
        $element = new Paper();
        $this->assertTrue($element->fight(new Rock()));
    }
    public function testrockAplastascissors()
    {
        $element = new Rock();
        $this->assertTrue($element->fight(new Scissors()));
    }
    public function testEmpaterock()
    {
        $element = new rock();
        $this->assertNull($element->fight(new Rock()));
    }

    public function testEmpatepaper()
    {
        $element = new paper();
        $this->assertNull($element->fight(new paper()));
    }

    public function testEmpatescissors()
    {
        $element = new scissors();
        $this->assertNull($element->fight(new scissors()));
    }


}