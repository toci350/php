<?PHP
//ポストの内容を取得し、入力内容が正しいかチェックする。
$movie = "";

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $movie = $_POST['movie'];

    if(mb_strlen($movie) === 0){
        $err = "文字を入力してください";
    }elseif(mb_strlen($movie) > 20){
        $err = "20文字以内で入力してください";
    }
}
?>

<html>
<head>
<style type="text/css">
.center{text-align:center;}
input{margin:5px}
</style>
</head>
<body>
<div class="center">
<h1>入力フォームを検証</h1>
<p>
<?php
//誤りがあれば、エラー、正しければ、「あなたの好きな映画：」
if(isset($err)){
    echo $err;
}else{
    echo "あなたの好きな映画は：".$movie;
}
?>
</p>
<form action="" method="POST">
<label>好きな映画</label>
<input type="text" name="movie"><br>
<input type="submit">
</form>
</div>
</body>
</html>