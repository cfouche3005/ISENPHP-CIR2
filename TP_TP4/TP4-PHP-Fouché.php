<h1>TP4</h1>

<hr>
<h2>Ex 1</h2>

<h3>1</h3>

<?php 
    echo "<br/><b>EN: </b>".date('l j F Y');
    setlocale(LC_TIME,"fr_FR.UTF-8");
    echo "<br/><b>FR: </b>".strftime("%A %e %B %Y");
    echo "<br/><b> Date et heure </b>".date("d/m/Y H:i:s");
    echo "<br/>Il est passé ".time()." depuis UNIX"
?>

<hr>
<h2>Ex 2</h2>

<h3>1</h3>

<?php 
    $birthdate = new DateTime('31-07-1991');
    echo "<br/><b>Date de naissance: </b>".$birthdate->format('d-m-Y');
    setlocale(LC_TIME,"fr_FR.UTF-8");
    echo "<br/><b>FR: </b>".strftime("%A %e %B %Y");
    echo "<br/><b> Date et heure </b>".date("d/m/Y H:i:s");
    echo "<br/>Il est passé ".time()." depuis UNIX"
?>


<hr>
<h2>Ex 3</h2>

<h3>1</h3>

<?php 
    $identite = array('alain', 'basile', 'David', 'Edgar');
    $age = array(1, 15, 35, 65);
    $mail = array('penom.nom@gtail.be', 'truc@bruce.zo','caro@caramel.org', 'trop@monmel.fr');

    function extractor($mail){
        $domain = substr(strstr($mail,'@'),1);
        $tld = substr(strstr($domain,'.'),1);
        return array($domain,$tld);
    }

    function affichage($identite,$age,$mail){
        $index = rand(0,count($identite)-1);
        $anstr = " ans";
        if ($age[$index] < 10){
            $anstr = " an";
        }
        echo "<br/>Je me nomme ".ucfirst($identite[$index]).", j'ai ".$age[$index].$anstr." et mon mail est ".$mail[$index]." du
        domaine ".extractor($mail[$index])[0]." avec l'extension ".extractor($mail[$index])[1];
    }

    affichage($identite,$age,$mail);
?>

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

<h3>1</h3>

<?php
    $table = rand(0,100);
    echo "<table><thead><tr><th colspan='2'>Table de $table</th></tr></thead><tbody>";
    for ($i=1;$i<11;$i++){
        echo "<tr><td>$i*$table</td><td>".($i*$table)."</td></tr>";
    }
    echo "</tbody></table>"
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

t