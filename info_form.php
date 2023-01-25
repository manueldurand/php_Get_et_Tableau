<?php
include_once 'personnes.php';
if(isset($_GET['ok'])){
    session_start();
$_SESSION['last_pseudo'] = $_GET['pseudo'];}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire de recherche</title>
</head>
<body>

<form action="info_form.php" method="get">
<label for="pseudo">Entrez le pseudo recherché :</label>
<input type="text" name="pseudo" value="<?= $_SESSION['last_pseudo'];?>"/>
<input type="submit" name="ok" value="ok">
</form>
<?php
if(isset($_GET['ok'])){
$pseudo = filter_input(INPUT_GET, 'pseudo');
if(array_key_exists($pseudo, $personnes)){
   echo "<br>";
   foreach($personnes[$pseudo] as $key => $value){
    echo $key." : ". $value. "<br>";
   }}
elseif(!array_key_exists($pseudo, $personnes)){
    echo "Désolé, votre pseudonyme n'est pas dans la liste<br> ";
   }

}

foreach($personnes as $key => $values):?>
<a href="page_pseudo.php?pseudo=<?=$key?>"><?= $key ?></a>
<?php endforeach;

?>
</body>
</html>