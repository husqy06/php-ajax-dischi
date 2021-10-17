<?php
    include __DIR__ . "/data/database.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="./img/logo.png" alt="">
    </header>

    <main>
        <div class="container">
            <?php 
                foreach($db as $album) {
            ?>      
                    <div class="album-container">
                        <img src="<?php echo $album['poster'] ?>" alt="" srcset="">
                        <span class="title"><?php echo $album['title']?></span>
                        <span class="subtitle"><?php echo $album['author']?></span>
                        <span class="subtitle"><?php echo $album['year']?></span>
                    </div>
            <?php 
                }
            ?>
        </div>
    </main>
</body>
</html>