<?php
$ar = array(

    0 => array(
    'name' => '鈴木',
    'hobby' => 'テニス',
    'em' => 'abc@com'
    ),
    1 => array(
    'name' => '山田',
    'hobby' => 'ゴルフ',
    'em' => 'abc@com'
    ),
    2 => array(
    'name' => '斎藤',
    'hobby' => '水泳',
    'em' => 'abc@com'
    )

);
//echo $ar[1]['name'];
?>

<html>
<body>
<table border="1">
<tr><th>名前</th><th>趣味</th><th>メール</th></tr>
<?php foreach($ar as $row){ ?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['hobby']; ?></td>
    <td><?php echo $row['em']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>