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
?>