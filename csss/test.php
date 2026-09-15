<?php
$dir = 'imagenespracticas/';
$images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Flexbin &mdash; Flexible &amp; Pure CSS Gallery Layout Like Google Images and 500px.com</title>
        <meta name="viewport" content="width:device-width, initial-scale=1" />
        <link href="flexbin.css" type="text/css" rel="stylesheet" media="all" />
        <style>
            body {
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div class="flexbin flexbin-margin">
        <?php foreach($images as $image): ?>
            <div class="img-container">
                <img src="<?php echo $image; ?>" class="img-collage">
            </div>
        <?php endforeach; ?>
        </div>
    </body>
</html>
