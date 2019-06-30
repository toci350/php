<?php
//チェックボックスの値を取得
$colo = $_POST["colors"];
//var_dump($colo);
?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>受信ページ</h1>
<h3>好きな色</h3>
<ul>
<?php foreach($colo as $var){ ?>
<li><?php echo htmlspecialchars($var, ENT_QUOTES, 'UTF-8'); ?></li>
<?php } ?>
</ul>

<p>好きな色は<?php echo implode('と',$colo); ?></p>
</body>

</html>