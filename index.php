<?php

include_once 'personnes.php';
    // question 1 :les clés sont des string : mdupond, jm, toto, arn, email, dask; leur type est : tableau (array)
    //valeur de toto : array(4) { ["prenom"]=> string(3) "Tom" ["nom"]=> string(5) "Tonge" ["age"]=> int(18) ["ville"]=> string(6) "Epinay" } 
    echo "question 1 : <br>";
    foreach($personnes['toto'] as $key => $value){
        echo $key. " : ". $value."<br>";
    }
    // question 2
    echo " <br>question 2 : <br>";

    echo $personnes['arn']['age'];
    echo "<br>";
    echo $personnes['toto']['ville'];
    echo "<br>";
    foreach( $personnes['dask'] as $key => $value)
echo $key." : ". $value.", ";


//  Question 3

function afficheTableau(Array $arr){
    echo "<table border>";
    echo "<tr>";
    echo "<th>prenom</th>";
    echo "<th>nom</th>";
    echo "<th>age</th>";
    echo "<th>ville</th>";
    echo "</tr>";

    foreach($arr as $row_arr => $values){    
    echo "<tr>";
    echo "<td>".$values['prenom']."</td>";
    echo "<td>".$values['nom']."</td>";
    echo "<td>".$values['age']."</td>";
    echo "<td>".$values['ville']."</td>";
    echo "</tr>";
    }
    echo "</table>";
}
afficheTableau($personnes);

function affichePersonneDansVille(array $personnes, string $ville){
    echo "<br><b>Personnes du tableau habitant ".$ville." : </b><br>";
    foreach($personnes as $array => $values){
        if($values['ville'] == $ville){
            echo $values['prenom']. " " .$values['nom'].", ".$values['age']. " ans, ". $values['ville']."<br>";
        }
    }
}
affichePersonneDansVille($personnes, 'Paris');
affichePersonneDansVille($personnes, 'Epinay');
affichePersonneDansVille($personnes, 'Villetaneuse');

    