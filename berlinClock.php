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

    public function getFiveMinutes($minute){
        $compteur=0;
        $block5Min=$minute/5;
        $ligneMinute="";
        for($i=1;$i<=11;$i++){
            if($i<=$block5Min){
                $compteur++;
                if($compteur%3==0)$ligneMinute .= "R";
                else $ligneMinute .= "Y";

            }else{
                $ligneMinute .= "O";
            }
        }
        return $ligneMinute;
    }

    public function getSimpleHours($hours){
        $ligneHours ="";
        $block1Hours=$hours%5;

        for($i=1;$i<=4;$i++){
            if($i<=$block1Hours) $ligneHours .= "R";
            else $ligneHours .= "O";
        }
        return $ligneHours;
    }
}