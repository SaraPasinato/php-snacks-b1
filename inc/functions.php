<?php
//!functions 
/**
 * @param n:Integer max of elements
 * @return  Array:Integers from 1 to 100
 */
function getArrayRandNumber($n)
{
    $arr = [];
    $num_rand = 0;
    for ($i = 0; $i <= $n; $i++) {
        $num_rand = rand(1, 100);
        if (!in_array($num_rand, $arr)) {
            $arr[$i] = $num_rand;
        }
    }
    return $arr;
}

/**
 * @param arr:Array Integer 
 * @return Integer  Arihmetical-Mean
 */
function getMedia($arr)
{
    $len = count($arr);
    $sum = 0;
    for ($i = 0; $i < $len; $i++) {
        $sum += $arr[$i];
    }
    return round($sum / $len);
}
/**
 * @param $name String 
 * @param $mail String 
 * @param $age Int 
 * @return String 
 */
function chekEmail($name, $mail, $age)
{
    if (strlen($name) > 3 && strpos($mail, ".") && strpos($mail, "@")  && is_numeric($age)) {
        return "Accesso Riuscito";
    }
    return "Accesso negato";
}
/**
 * @param $name String 
 * @param $mail String 
 * @param $age Int 
 * @return String 
 */
function chekEmailStrict($name, $mail, $age)
{
    $str_err=" ";
    if(strlen($name)<=3) {
        $str_err="Err-name: nome non valido.\n";
    }
    if (!strpos($mail, ".")) {
        $str_err.="Err-email: email non valida manca . \n";
    }
    if (!strpos($mail, "@")){ 
        $str_err.="Err-email: email non valida manca @ \n";
    }
    if (!is_numeric($age)){
         $str_err.="Err-age: età non è un numero \n";
    }
  

    return $str_err;
}
