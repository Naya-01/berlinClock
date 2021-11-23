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




}