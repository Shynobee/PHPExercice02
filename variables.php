<?php 

$nom = "khouaji";
$prenom = "walid";
$age = 28;
$fav = 42;
$result = $age+$fav;

?> 

<h1><?php echo("Bonjour " . $nom . " " . $prenom . " , tu as " . $age . " ans") ?></h1>

<?php 

$add = 3+4;
$mult = 5*20;
$div = 45/5; 

$res = $add+$mult+$div;

?>

<h2><?php echo($res) ?></h2>
<h2><?php echo($add) ?></h2>
<h2><?php echo($mult) ?></h2>
<h2><?php echo($div) ?></h2>

