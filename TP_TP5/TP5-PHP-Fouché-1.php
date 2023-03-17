<h1>TP5</h1>

<hr>
<h2>Ex 1</h2>

<h3>3</h3>

<?php
    if(null!=($_GET['temperature-get'])){
        echo "<div>La valeur en degré (GET) : ".(($_GET['temperature-get']-32)*5/9)."</div>";
    }
    if(null!=($_POST['temperature-post'])){
        echo "<div>La valeur en degré (POST) : ".(($_POST['temperature-post']-32)*5/9)."</div>";
    }
?>