<?php


class berlinClock{

    public function __construct(){
    }

    public function getSimpleMinutes($minute){
        $ligneMinute="";
        $block1Min=$minute%5;

        for($i=1;$i<=4;$i++){
            if($i<=$block1Min){
                $ligneMinute .= "Y";
            }else $ligneMinute .= "O";
        }
        return $ligneMinute;
    }
}