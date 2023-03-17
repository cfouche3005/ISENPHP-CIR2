<h1>TP1</h1>

<hr>
<h2>Ex 1</h2>

<h3>1</h3>

<?php echo "J'ai l'esprit large et je n'admets pas qu'on dise le contraire. Citation de Coluche" ?>

<h3>2</h3>

<?php echo "<i>J'ai l'esprit large et je n'admets pas qu'on dise le contraire.</i> Citation de Coluche" ?>

<h3>4</h3>

<?php echo "J'ai l'esprit large et je n'admets pas qu'on dise le contraire. <strong>Citation de Coluche</strong>" ?>

<h3>5</h3>

<?php 
    echo "J'ai l'esprit large et je n'admets pas qu'on dise le contraire. ".strtoupper("Citation de Coluche");
?>

<hr>
<h2>Ex 2</h2>

<h3>1</h3>

<?php 
    $citation = "J'ai l'esprit large et je n'admets pas qu'on dise le contraire.";
    $auteur =  "Citation de Coluche";
    echo "$citation ".strtoupper($auteur);
?>

<h3>2</h3>

<?php 
    $citation = "J'ai l'esprit large et je n'admets pas qu'on dise le contraire.";
    $auteur =  "Citation de Coluche";
    echo "citation : ".var_export(isset($citation), true)."<br>";
    echo "auteur : ".var_export(isset($auteur), true)."<br>";
    echo "$citation ".strtoupper($auteur);
?>

<h3>3</h3>

<?php 
    $citation = "J'ai l'esprit large et je n'admets pas qu'on dise le contraire.";
    define("AUTEUR","Citation de Coluche");
    echo "citation : ".var_export(empty($citation), true)."<br>";
    echo "auteur : ".var_export(empty(AUTEUR), true)."<br>";
    echo "$citation ".strtoupper(AUTEUR);
?>

<h3>4</h3>

<?php 
    $citation = "J'ai l'esprit large et je n'admets pas qu'on dise le contraire.";
    $auteur =  "Citation de Coluche";
    echo "citation : ".var_export(isset($citation), true)."<br>";
    echo "auteur : ".var_export(isset($auteur), true)."<br>";
    echo "$citation ".strtoupper($auteur)."<br>";
    unset($citation);
    unset($auteur);
    echo "citation : ".var_export(isset($citation), true)."<br>";
    echo "auteur : ".var_export(isset($auteur), true)."<br>";
?>

<hr>
<h2>Ex 3</h2>

<h3>1</h3>

<?php 
    print_r($_SERVER,false);
    echo "<br>";
    echo "<br>";
    print_r($GLOBALS,false);
?>

<h2>Ex </h2>

<h3>1</h3>

<?php
    ini_set('display_errors',"On");
    $ini = ini_get("display_errors");
    echo "$ini";
?>