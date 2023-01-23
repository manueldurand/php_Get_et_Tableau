<?php
include 'personnes.php';

$pseudo = filter_input(INPUT_GET, 'pseudo');
if(array_key_exists($pseudo, $personnes)){
   echo "<br>";
   foreach($personnes[$pseudo] as $key => $value){
    echo $key." : ". $value. "<br>";
   }}
elseif(!array_key_exists($pseudo, $personnes)){
    echo "Désolé, votre pseudonyme n'est pas dans la liste<br> ";
   }

