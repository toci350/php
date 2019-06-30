<?php

$at = 1;
//欠席は0,出席は1
$pl = "b";

if($at === 0){
    echo "欠席";
}elseif($at === 1){
    echo "出席";
    if($pl === "a"){
        echo "Aホテル";
    }elseif($pl === "b"){
        echo "B広場";
    }
}