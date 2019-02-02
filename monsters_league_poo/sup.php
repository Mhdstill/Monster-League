<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=monsterleague;charset=utf8', 'mehdi', 'zenmaines93');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('DELETE FROM monster WHERE id=\'' . $_GET['id'] . '\'');


$reponse->closeCursor();

header('Location:index.php');
?>