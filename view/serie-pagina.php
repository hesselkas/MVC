<?php

class SerieView
{
    public static function render($name, $episodes, $description, $rating, $img)
    {

        echo "<p>$name</p>";
        echo "<p>$episodes</p>";
        echo "<p>$description</p>";
        echo "<p>$rating</p>";

        if ($img) {
            $img_base64 = base64_encode($img);
            echo '<img src="data:image/jpeg;base64,' . $img_base64 . '" alt="Film Image" />';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

</body>
</html>
