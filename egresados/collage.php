<?php
$dir = 'imagenespracticas/';
$images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Collage de Imágenes</title>
    <style>
        #collage {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            grid-auto-rows: 100px;
            grid-gap: 10px;
        }
        .img-collage {
            max-width: 200px;
            max-height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div id="collage">
        <?php foreach($images as $image): ?>
            <div class="img-container">
                <img src="<?php echo $image; ?>" class="img-collage">
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const images = document.querySelectorAll('.img-collage');
            images.forEach(img => {
                const rowSpan = Math.ceil(Math.random() * 2);
                const colSpan = Math.ceil(Math.random() * 2);
                img.parentElement.style.gridRowEnd = `span ${rowSpan}`;
                img.parentElement.style.gridColumnEnd = `span ${colSpan}`;
            });
        });
    </script>
</body>
</html>
