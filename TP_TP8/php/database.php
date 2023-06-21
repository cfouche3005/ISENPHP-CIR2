<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<?php
    include('constants.php');

    function dbConnect(){
        try {
            return new PDO('pgsql:dbname='.DB_NAME.';host='.DB_SERVER.';port='.DB_PORT, DB_USER, DB_PASSWORD);
            } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
            return null;
            }

    };

    function dbGetAuthorsNames($db){
        return $db->query('SELECT nom,prenom FROM auteur')->fetchAll(PDO::FETCH_ASSOC);
    };

    function dbGetQuotes($db){
        return $db->query('SELECT phrase FROM citation')->fetchAll(PDO::FETCH_ASSOC);
    };
    
    function dbGetCenturies($db){
        return $db->query('SELECT numero FROM siecle')->fetchAll(PDO::FETCH_ASSOC);
    };


    function getNumberofQuotes($db){
        try {
            $statement = $db->query('SELECT count(id) FROM citation');
            $result1 = $statement->fetch(PDO::FETCH_ASSOC);
            $result2 = $result1['count'];
        } catch (PDOException $exception) {
            error_log('Request error: ' . $exception->getMessage());
            return false;
        }
        return $result2;
    }

    function getRandomQuote($db){
        try {
            $statement = $db->prepare('SELECT id,phrase FROM citation WHERE id = :id');
            $statement->bindValue(':id', rand(1, getNumberofQuotes($db)));
            $statement->execute();
            $result1 = $statement->fetch(PDO::FETCH_ASSOC);
            $result2 = $result1['phrase'];
        } catch (PDOException $exception) {
            error_log('Request error: ' . $exception->getMessage());
            return false;
        }
        return $result2;
    }
?>