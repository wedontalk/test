<?php
    function timgiatri($mang){
        for($i=0;$i<count($mang);$i++){
            for($j = $i; $j<count($mang);$j++){
                if($mang[$i]<$mang[$j]){
                    $tinhmang = 0;
                    $tinhmang = $mang[$i];
                    $mang[$i] = $mang[$j];
                    $mang[$j] = $tinhmang;
                }
            }
        }
        return array_slice($mang,0,5);
    }
// test case 2
    function timphantu($mang){
        $tinh=[];
        for($i=0;$i<count($mang);$i++){
            $tinh[$i] = 0;
            for($j=$i;$j<count($mang);$j++){
                $tinh[$i]++;
            }
        }
        //show số lần nhiều nhất
        for($i=0;$i<count($mang);$i++){
            if($tinh[$i] == 1){
                $layramang = '';
                $layramang = $mang[$i];

                if($mang[$i] === null){
                    $mang[$i] = 'null';
                }
                if($mang[$i] === true){
                    $mang[$i] = 'true';
                }
                if($mang[$i] == "hello"){
                    $mang[$i] = 'hello';
                }
                if($mang[$i] == "up"){
                    $mang[$i] = 'up';
                }
                if($mang[$i] == "down"){
                    $mang[$i] = 'down';
                }
                if($mang[$i] == "left"){
                    $mang[$i] = 'left';
                }
                if($mang[$i] == "right"){
                    $mang[$i] = 'right';
                }
                if($mang[$i] === false){
                    $mang[$i] = 'false';
                }
                return $mang[$i];
            }
        }
    }
?>