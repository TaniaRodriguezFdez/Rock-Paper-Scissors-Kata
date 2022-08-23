<?php

namespace Tests;

use App\Models\Scissors;
use PHPUnit\Framework\TestCase;

class RockTest extends TestCase
{
    /** @test */
    public function test_is_a_rock()
    {
        // Given
        $rock = new Scissors();
        // When
        $result = $rock->getType();
        // Then
        $this->assertEquals("Scissors",$result);
    }
    
}