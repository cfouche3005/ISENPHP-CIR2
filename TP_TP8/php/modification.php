<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="citation.php">Informations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="recherche.php">Recherche</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="modification.php">Navigation</a>
            </li>
        </ul>
    </div>
</nav>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Nom de l'auteur: <br>
    <input type="text" name="nom" />
    <br>
    Prénom de l'auteur: <br>
    <input type="text" name="prenom" />
    <br>
    Siecle: <br>
    <input type="text" name="siecle" />
    <br>
    Citation: <br>
    <input type="text" name="citation" />
    <br>
    <br>
    <input type="submit" value="Ajouter" />
</form>

<?php  
    require('database.php');
    
    $db = dbConnect();

    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['siecle']) && isset($_POST['citation'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $siecle = $_POST['siecle'];
        $citation = $_POST['citation'];
        try {
            $statement = $db->prepare("INSERT INTO auteur (nom, prenom) VALUES (:nom, :prenom");
            $statement->bindParam(':nom', $nom);
            $statement->bindParam(':prenom', $prenom);
            $statement->execute();


        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

?>