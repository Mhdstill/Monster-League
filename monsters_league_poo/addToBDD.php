<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=monsterleague;charset=utf8', 'mehdi', 'zenmaines93');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO monster(name, strength, life,type) VALUES(:name, :strength, :life, :type)');
$req->execute(array(
	'name' => $_POST['name'],
	'strength' => $_POST['strength'],
	'life' => $_POST['life'],
	'type' => $_POST['type']
	));

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Monsters League</title>

        <!-- CSS files -->
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/inscription.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Monsters League</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
					
					<li class="nav-item active">
                        <a class="nav-link" href="index.php">Add Monster <span class="sr-only">(current)</span></a>
                    </li>
					
					<li>
                        <a class="nav-link" href="delmonster.php">Delete Monster<span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
					
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
		
		
		
		<div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">The monster has been added.</p>
            <hr class="my-4">
        </div>