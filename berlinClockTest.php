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




}