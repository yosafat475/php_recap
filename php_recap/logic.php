<?php

// var_dump(true && true);
// var_dump(true || false);
// var_dump(false || true);
// var_dump(true xor false);
// var_dump(true xor true);
// var_dump(true != 'true');
// var_dump(true !== 'true');
// var_dump(true ||(false || false));
// var_dump(true &&(false ||true)|| false or (1!='1'));


// if(true){
//     echo "he id budy";
// }else{
//     echo "he is noy Budui";
// }

// echo (true) ? "budi father'S" : "not budi father's";

// for($x=0;$x<10;$x++){
//     for($y=0;$y<10;$y++){
//         echo $x."x".$y."=".$x*$y."\t";
//     }
// }

foreach(range(1,10) as $num){
echo $num.PHP_EOL;
}

while(true){
    $num=rand(1,10);

    if($num==8){
        exit('Luck nine');
    }else{
        echo "Loser,you number is".$num.PHP_EOL;
    }
}
