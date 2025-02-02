<?php

require_once "../view/film-pagina.php";
include "../model/DBconnect.php";

class FilmController{
    public static function execute(){
        global $pdo;

        $stmt = $pdo->prepare("SELECT name, episodes, description, rating, img FROM series WHERE id = :id");

        $id = $_GET["id"];
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $name = $result["name"];
            $episodes = $result["episodes"];
            $description = $result["description"];
            $rating = $result["rating"];
            $img = $result["img"];
        }

        FilmView::render("$name",  "$description", "$rating", "$img", $episodes);
    }
}


FilmController::execute();
?>
