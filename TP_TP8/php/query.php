<?php
    include('database.php');
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $db = dbConnect();
    $auteur = dbGetAuthorsNames($db);
    for($i=0;$i<count($auteur);$i++){
        echo $auteur[$i]['prenom']." ".$auteur[$i]['nom']."<br/>";
    };

    $quotes = dbGetQuotes($db);
    for($i=0;$i<count($quotes);$i++){
        echo $quotes[$i]['phrase']."<br/>";
    };

    $century = dbGetCenturies($db);
    for($i=0;$i<count($century);$i++){
        echo $century[$i]['numero']."<br/>";
    }

?>