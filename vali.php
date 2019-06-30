<?PHP
//ポストの内容を取得し、入力内容が正しいかチェックする。
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