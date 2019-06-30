<?php


//postされたデータを取得
$lan = $_POST['num'];

if( $lan === 1 ){
    echo "1";
}elseif( $lan === 2 ){
    echo "2";
}elseif( $lan === 3 ){
    echo "3";
}else{
    echo "NG";
}