<html>
<head>
    <title>personalized greeting form</title>
</head>
<body>
    <?php if(!empty($_POST['name'])) {
      echo "greeting, {$_POST['name']}, and welcome";
    } ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        enter your name: <input type="text" name="name"/>
        <input type="submit"/>
    </form>
</body>
</html>