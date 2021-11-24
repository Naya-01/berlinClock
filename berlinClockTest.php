<?php

use PHPUnit\Framework\TestCase;
require "berlinClock.php";

class berlinClockTest extends TestCase{



    public function testSimpleMinute(): void{
        $berlin = new berlinClock();
        $this->assertEquals("YYOO", $berlin->getSimpleMinutes(22));
    }

    public function testSimpleMinuteLampeEteinte():void{
        $berlin = new berlinClock();
        $this->assertEquals("OOOO", $berlin->getSimpleMinutes(10));
    }

    public function testSimpleMinute1LampeAllume():void{
        $berlin = new berlinClock();
        $this->assertEquals("YOOO", $berlin->getSimpleMinutes(16));
    }

    public function testFiveMinutes0LampeAllume(){
        $berlin = new berlinClock();
        $this->assertEquals("OOOOOOOOOOO",$berlin->getFiveMinutes(02));
    }

    public function testFiveMinutes2LampeAllume(){
        $berlin = new berlinClock();
        $this->assertEquals("YYOOOOOOOOO",$berlin->getFiveMinutes(12));
    }

    public function testFiveMinutes4LampeAllume(){
        $berlin = new berlinClock();
        $this->assertEquals("YYRYOOOOOOO",$berlin->getFiveMinutes(24));
    }

    public function testFiveMinutesToutesAllume(): void{
        $berlin = new berlinClock();
        $this->assertEquals("YYRYYRYYRYY",$berlin->getFiveMinutes(56));
    }

    public function testSimpleHoursToutesEteint(): void{
        $berlin = new berlinClock();
        $this->assertEquals("OOOO", $berlin->getSimpleHours(10));
    }

    public function testSimpleHours1LampeAllume():void{
        $berlin = new berlinClock();
        $this->assertEquals("ROOO", $berlin->getSimpleHours(16));
    }

    public function testSimpleHours2LampesAllumee(): void{
        $berlin = new berlinClock();
        $this->assertEquals("RROO", $berlin->getSimpleHours(22));
    }

    public function testFiveHours2LampesAllumee(): void{
        $berlin = new berlinClock();
        $this->assertEquals("RROO", $berlin->getFiveHours(10));
    }

    public function testFiveHours3LampesAllumee(): void{
        $berlin = new berlinClock();
        $this->assertEquals("RROO", $berlin->getFiveHours(10));
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