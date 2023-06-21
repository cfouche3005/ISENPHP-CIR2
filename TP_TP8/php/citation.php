<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link active" href="citation.php">Informations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="recherche.php">Recherche</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="modification.php">Navigation</a>
            </li>
        </ul>
    </div>
</nav>

<h1> La citation du jour </h1>
<hr>
<?php
require('database.php');
// Enable all warnings and errors.
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Database connection.
$db = dbConnect();
?>
<p> Il y'a
    <?php
    // Number of Quotes
    $nbQuotes = getNumberofQuotes($db);
    echo "<b> $nbQuotes </b> citations répértoriées </p>";
    
    // Random Quote
    $randomQuote = getRandomQuote($db);
    echo " <b> $randomQuote </b>";
    ?>