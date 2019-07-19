<?php
if (isset($_GET['message'])) {
// load
$font = 'times';
$size = 12;
$im = ImageCreateFromPNG('button.png');
$tsize = imagettfbbox($size,0,$font,$_GET['message']);


$dx = abs($tsize[2]-$tsize[0]);
$dx = abs($tsize[5]-$tsize[3]);
$x = (imagesx($im) - $dx ) / 2;
$y = (imagesy($im) - $dy ) / 2 + $dy;

// draw
$black =ImageColorAllocate($im,0,0,0);
ImageTTFText($im, $size, 0, $x, $y, $black, $font, $_GET['message']);

header('content-type: image/png');
ImagePNG($im);
exit;
}
?>
<html>
    <head><title>button form</title></head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" metod="GET">
          enter message to apper on button:
          <input type="text" name="message" /><br />
          <input type="submit" value="create button" />
        </form>
    </body>
</html>