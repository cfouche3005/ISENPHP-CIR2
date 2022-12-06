<h1>TP2</h1>

<hr>
<h2>Ex 1</h2>

<h3>1</h3>

<?php 
    $age = rand(0,100);
    echo $age;
    if ($age <= 12){
        echo " -> enfant";
    }elseif($age <= 19){
        echo " -> ado";
    }elseif($age < 49){
        echo " -> adulte";
    }elseif($age <= 69){
        echo " -> senior";
    }else{
        echo " -> agé";
    }
?>

<h3>2</h3>

<?php 
    $age = rand(0,100);
    echo $age;
    switch ($age) {
        case $age <= 12:
            echo " -> enfant";
            break;
        case $age <= 19:
            echo " -> ado";
            break;
        case $age < 49:
            echo " -> adulte";
            break;
        case $age < 69:
            echo " -> senior";
            break;
        default:
            echo " -> agé";
        }
?>

<hr>
<h2>Ex 2</h2>

<h3>1</h3>

<?php 
   $fibonnaci = array(0,1);
   $num = 1;
   while($num != 20){
        $num++;
        $fibonnaci[$num] = $fibonnaci[$num-1] +$fibonnaci[$num-2] ;
   }
   print_r($fibonnaci);
?>

<h3>2</h3>

<?php 
    $fibonnaci = array(0,1);
    $num = 1;
    do{
        $num++;
        $fibonnaci[$num] = $fibonnaci[$num-1] +$fibonnaci[$num-2] ;
    }while($num != 30);
    print_r($fibonnaci);
    echo "<br/>";
    echo 'Fn+1 / Fn = '.(($fibonnaci[$num] +$fibonnaci[$num-1])/$fibonnaci[$num]);
?>

<hr>
<h2>Ex 3</h2>

<h3>1</h3>

<?php 
    function euler($n){
        $sum = 0;
        for ($i=1;$i<$n+1;$i++){
            $sum = $sum + (1/pow($i,2));
        }
        return sqrt($sum*6);
    }
    echo "pi for 15 = ".euler(15)."<br/>";
    echo "pi for 150 = ".euler(150)."<br/>";
    echo "pi for 1500 = ".euler(1500)."<br/>";
    echo "pi for 15000 = ".euler(15000)."<br/>";
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
    echo "<table style='border: 1px solid #333;'><thead><tr><th style='border: 1px solid #333;' colspan='2'>Table de $table</th></tr></thead><tbody>";
    for ($i=1;$i<11;$i++){
        echo "<tr><td style='border: 1px solid #333;'>$i*$table</td><td style='border: 1px solid #333;'>".($i*$table)."</td></tr>";
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