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
