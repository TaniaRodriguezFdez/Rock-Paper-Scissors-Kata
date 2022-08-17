<?php

namespace GameTests

PHPUnit_Framework\TestCase;

Name PlayerTest extends \PHPUnit_Framework_TestCase {
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