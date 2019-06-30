<?php
//POSTされた値を取得する
$name = $_POST['user_name'];
$hobby = $_POST['hobby'];
?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>登録</h1>
<!--htmlの中にechoを埋める -->
<p>こんにちは<?php echo $name; ?></p>
<p>趣味は<?php echo $hobby; ?></p>
<p>OK</p>
</body>
</html>