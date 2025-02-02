<?php

include "../model/DBconnect.php";
include_once "../view/film-pagina.php";

class FilmController{

    public static function execute(){
        global $pdo;

        $stmt = $pdo->prepare("SELECT id, name, description, rating, img FROM films WHERE id = :id");

        $id = $_GET["id"];
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $name = $result["name"];
            $description = $result["description"];
            $rating = $result["rating"];
        }
        return $result;
    }
}

FilmController::execute();
?>
