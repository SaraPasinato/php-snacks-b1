<?php
//!functions 
/**
 * @param n:Integer max of elements
 * @return  Array:Integers from 1 to 100
 */
function getArrayRandNumber($n){
    $arr=[];
    $num_rand=0;
    for( $i=0; $i<=$n; $i++){
        $num_rand=rand(1,100);
        if(!in_array($num_rand,$arr)){
            $arr[$i]=$num_rand;
        }
    }
    return $arr;
}

/**
 * @param arr:Array Integer 
 * @return Integer  Arihmetical-Mean
 */
function getMedia($arr){
    $len=count($arr);
    $sum=0;
    for($i=0; $i<$len; $i++){
        $sum+=$arr[$i];

    }
     return floor($sum /$len);
    
}
