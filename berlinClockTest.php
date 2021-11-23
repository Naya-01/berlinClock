<?php

use PHPUnit\Framework\TestCase;
require "berlinClock.php";

class berlinClockTest extends TestCase{



    public function testSimpleMinute(): void{
        $berlin = new berlinClock();
        $this->assertEquals("OOOO", $berlin->getSimpleMinutes(10));
        $this->assertEquals("YOOO", $berlin->getSimpleMinutes(16));
        $this->assertEquals("YYOO", $berlin->getSimpleMinutes(22));
    }

    public function testFiveMinutes(): void{
        $berlin = new berlinClock();
        $this->assertEquals("YYOOOOOOOOO",$berlin->getFiveMinutes(12));
        $this->assertEquals("YYRYOOOOOOO",$berlin->getFiveMinutes(24));
        $this->assertEquals("YYRYYRYYRYY",$berlin->getFiveMinutes(56));
    }

    public function testSimpleHours(): void{
        $berlin = new berlinClock();
        $this->assertEquals("OOOO", $berlin->getSimpleHours(10));
        $this->assertEquals("ROOO", $berlin->getSimpleHours(16));
        $this->assertEquals("RROO", $berlin->getSimpleHours(22));
    }

    public function testFiveHours(): void{
        $berlin = new berlinClock();
        $this->assertEquals("RROO", $berlin->getFiveHours(10));
        $this->assertEquals("RRRO", $berlin->getFiveHours(16));
        $this->assertEquals("OOOO", $berlin->getFiveHours(1));
    }

    public function testSecond(): void{
        $berlin = new berlinClock();
        $this->assertEquals("O", $berlin->getSecond(1));
        $this->assertEquals("R", $berlin->getSecond(2));
    }

    public function testBerlinClock(): void{
        $berlin = new berlinClock();
        $this->assertEquals("R RROO RROO YYRYYOOOOOO YOOO",$berlin->getHorloge(12,26,12));
    }






}