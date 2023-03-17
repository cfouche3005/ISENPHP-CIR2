<h1>TP5</h1>

<hr>
<h2>Ex 1</h2>

<h3>1</h3>

<a href="TP5-PHP-Fouché.php?Fahrenheit=156,2">Lien pour valeur en degré</a>

<h3>2</h3>

<?php
    if(null!=($_GET['Fahrenheit'])){
        echo "<div>La valeur en degré ".(($_GET['Fahrenheit']-32)*5/9)."</div>";
    }
?>

<h3>3</h3>

<form action="TP5-PHP-Fouché-1.php" method="get">
    Valeur en Fahrenheit (GET): <input type="text"name="temperature-get"/>
    <input type="submit"value="Valider"/>
</form>

<form action="TP5-PHP-Fouché-1.php" method="post">
    Valeur en Fahrenheit (POST): <input type="text"name="temperature-post"/>
    <input type="submit"value="Valider"/>
</form>

<hr>
<h2>Ex 2</h2>

<h3>1</h3>

<form action="TP5-PHP-Fouché.php" method="post">
    Nom : <input type="text" name="name-ex2"/> Prénom : <input type="text" name="firstname-ex2"/>
    <br>
    Débutant : <input type="radio" id="lvl" name="lvl" checked> Avancé : <input type="radio" id="lvl" name="lvl">
    <br>
    <input type="reset"value="Effacer"/> <input type="submit"value="Valider"/>
</form>

<?php
    if(null!=($_POST['name-ex2']) && null!=($_POST['firstname-ex2']) && null!=($_POST['lvl'])){
        echo "<div>Bonjour ".($_POST['name-ex2'])." ".($_POST['firstname-ex2']).". Vous avez un niveau ".($_POST['lvl']).".</div>";
    }
?>

<hr>
<h2>Ex 3</h2>

<h3>1</h3>

<form action="TP5-PHP-Fouché.php" method="post">
    Nom : <input type="text" name="name-ex3"/> Prénom : <input type="text" name="firstname-ex3"/> Age : <input type="text" name="age-ex3">
    <br>
    Langues pratiquées (choisir au minimum 2) :
    <br>
    <select name="lang[]" multiple size="4">
            <option value="fr">French</option>
            <option value="en">English</option>
            <option value="es">Spanish</option>
            <option value="de">German</option>
    </select>

<h2>Ex 4</h2>

<h3>1</h3>

<?php
    $tab = array("Raphaël" => "Reviser, c'est douter de ses capacités",
                "Renaud" => "c'est pas l'homme qui prend la mer, c'est la mère qui prend l'homme",
                "Ryan" => "Je vais dormir",
                "Tchoupi" => "Salut, c'est moi, Tchoupi",
                "Macron" => "Parce-que c'est NOTRE PROJET",
                "Marine" => "Il sont partout, dans les villes, dans les campagnes");
    echo "<h4>a)</h4>";

    foreach($tab as $cit){
        echo "$cit<br/>";
    }

    echo "<h4>b)</h4>";
    
    foreach($tab as $aut => $cit){
        echo "$aut => $cit<br/>";
    }
?>

<h2>Ex 5</h2>

<form action="./TP5-PHP-Fouché.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image1"><br><br>
    <input type="file" name="image2"><br><br>
    <input type="submit" value="Envoi">
</form>


<?php 
    echo "error : ".($_FILES['image1']['error']);
    echo $_FILES['image2']['tmp_name'];
    move_uploaded_file($_FILES['image1']['tmp_name'], "imga.png");
    move_uploaded_file($_FILES['image2']['tmp_name'], "imgb.png");
    echo '<img src="imga.png">';
    echo '<img src="imgb.png">';
?>




<h2>Ex 6</h2>

<h3>1</h3>

<?php
    $int = 97;
    function isPrime($nb){
        for ($i=2;$i<$nb;$i++){
            if($nb%$i==0){
                return false;
            }
        }
        return true;
    }
    for ($i=2;$i<$int+1;$i++){
        if (isPrime($i)){
            echo "$i ";
        }
    }
?>

<h2>Ex 7</h2>

<h3>1</h3>

<?php
    function convert($input){
        echo "$input = ".substr($input,0,-1);
        $inputType = substr($input,-1);
        switch ($inputType) {
            case "T":
                echo " x 1024";
            case "G":
                echo " x 1024";
            case "M":
                echo " x 1024";
            case "K":
                echo " x 1024<br/>";
                break;
            }
    }
    convert("150K");
    convert("400M");
    convert("5G");
    convert("2T");
?>


