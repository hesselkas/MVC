<?php

require_once "../view/film-pagina.php";
include "../model/DBconnect.php";

class FilmController{
    public static function execute(){
        global $pdo;
//        NewsModel::initializeDatabase();
//        $latestNewsPost = NewsModel::getLatestNewsStory();

        $stmt = $pdo->prepare("SELECT name, description, rating FROM films WHERE id = :id");

        $id = $_GET["id"];
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $name = $result["name"];
            $description = $result["description"];
            $rating = $result["rating"];
        }

        FilmView::render("$name", "$description", "$rating", "jaws.jpg");
    }
}


FilmController::execute();