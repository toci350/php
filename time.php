<?php

$s = mt_rand(0,100);
echo $s."<br>";
if($s >= 0 && $s < 60){
    echo "平均以下";
}elseif($s >= 60 && $s < 80){
    echo "平均越え";
}elseif($s >= 80 && $s < 100){
    echo "優秀";
}elseif($s === 100){
    echo "満点です";
}else{
    echo "NG";
}