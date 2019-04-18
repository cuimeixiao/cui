<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 2019/4/18
 * Time: 8:41
 */
function GetUglyNumber_Solution($sun){
     while ($sun = $sun%2){
         $sun = $sun/2;
         echo 2;
    }
    while ($sun = $sun%3){
         $sun = $sun/3;
         echo 3;
    }
    while ($sun = $sun%5){
         $sun = $sun/5;
         echo 5;
    }
    if($sun = 1){
         echo "是丑数";
    }
    else
    {
        echo "不是丑数";
    }

}
return GetUglyNumber_Solution(5);
