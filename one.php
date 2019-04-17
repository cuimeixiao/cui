<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 2019/4/17
 * Time: 8:39
 */

function calFn($a,$b){
    //定义和为0；
    $sum = 0;
//for循环判断
    for ($i=$a;$i<=$b;$i++){
        //判断个位为1的个数
        if($i%10 == 1){
            $sum ++;
        }
        //判断十位为1的个数
        if(floatval($i/10%10 == 1)){
            $sum++;
        }
    }
    print_r($sum);
}
return calFn(1,13);

