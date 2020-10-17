<?php

$data_type_scalar=[
    "Magang TOP",
    168,
    12.6,
    true,
    false
];
foreach($data_type_scalar as $key){
    if(is_scalar($key)){
        echo gettype($key). " Scalar Type". PHP_EOL;
    }
}
// Ternary
echo isset($data_type_scalar) ? "Ditemukan" : "Tidak Ditemukan";
// if logic
if(isset($data_type_scalar)){
    echo "Ditemukan";
}else{
    echo "Tidak Ditemukan";
}

echo PHP_EOL;

$empty_data=[
    "",
    "0",
    0,
    0.0,
    [],
    false,
    NULL
];
foreach($empty_data as $key){
    if(empty($key)){
        echo gettype($key)." is emty" .PHP_EOL;
    }
}

echo PHP_EOL;

//============================ constan ========================\\

// niilai nya mutlak/mutable & immutable/kekal gak bisa dirubah

define ("VERSION","v-1.0");

const AUTHOR="venom";

$nama="hello";

$nama="world";

echo VERSION;

echo AUTHOR;

var_dump(defined("AUTHOR"));

defined("AUTOR") or exit("not found");//ini akan keluar jika ada yg disalah kan
//ternyata exit pinya status

?>