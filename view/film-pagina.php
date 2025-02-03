

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="nav">
    <a href="index.html" class="navid">home</a>
    <a href="films.html" class="navid">Films</a>
    <a href="serie.php" class="navid">Series</a>
    <a href="profiel.html">
        <img class="profiel" src="foto\pfp placeholder.jpg">
    </a>
</div>

<?php
include '../controller/filmcontroller.php';

$data = FilmController::execute();
?>

    <div class="tekst">
        <?php if ($data): ?>
            <h1><?php echo htmlspecialchars($data['name']); ?></h1>
            <p><?php echo htmlspecialchars($data['description']); ?></p>
            <p>Rating: <?php echo htmlspecialchars($data['rating']); ?></p>
            <div class='product-img'><img src='../view/foto/<?php echo $data["id"]; ?>.jpg'
                                          alt='Product Image'></div>
        <?php else: ?>
            <p>Film not found.</p>
        <?php endif; ?>
    </div>

</body>
</html>

