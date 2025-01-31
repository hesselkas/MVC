<?php

class FilmView{
    public static function render($titel, $description, $rating, $posterurl){
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="film-pagina.css">
            <title>Title</title>
        </head>
        <body>

        <img src="<?php echo $posterurl ?>" class="poster">

        <p><?php echo $titel ?></p>
        <br>
        <p><?php echo $description ?></p>
        <br>
        <p><?php echo $rating ?></p>

        </body>
        </html>
        <?php

    }
}

