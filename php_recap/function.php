<?php

function sayName($name="Gaess"){
    echo "hello".$name.PHP_EOL;

}

sayName();
sayName("Ariel");

call_user_func('satName','John Doe');

call_user_func_array('sayName',['Jane Doe']);

//Anonimus function (Clouse)

$soldier=function($name){echo $name.PHP_EOL;};

$soldier('Captain Price');

// $result=fn($x)=>$x*2;

// echo $result(19);

function getLastName($name){
    $real_name=explode(" ",$name);
    $getLastIndex=count($real_name)-1;

    if($real_name[$getLastIndex]!="Doe"){
        return"you not Doe ";
        // echo "you not Doe ";//ini jika echo kena semua maka digunakan returen
        //bisa juga dibatasi denga else
    }
    echo $real_name[$getLastIndex].PHP_EOL;
}
// echo getLastName("Jane Doe");

getLastName("Jane Doe proo");