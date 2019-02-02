<?php

function getMonsters(){
	
$monsters=array();
$i=0;

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=monsterleague;charset=utf8', 'mehdi', 'zenmaines93');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT  * FROM monster');

while ($donnees = $reponse->fetch())
{ 
	$monster = new Monster($donnees['id'],$donnees['name'],$donnees['strength'],$donnees['life'],$donnees['type']);
	$monsters[$i]=$monster;
	$i=$i+1;

}
	return $monsters;
	
	
}


/**
 * Our complex fighting algorithm!
 *
 * @return array With keys winning_ship, losing_ship & used_jedi_powers
 */
function fight(array $firstMonster, array $secondMonster)
{
    $firstMonsterLife = $firstMonster['life'];
    $secondMonsterLife = $secondMonster['life'];

    while ($firstMonsterLife > 0 && $secondMonsterLife > 0) {
        $firstMonsterLife = $firstMonsterLife - $secondMonster['strength'];
        $secondMonsterLife = $secondMonsterLife - $firstMonster['strength'];
    }

    if ($firstMonsterLife <= 0 && $secondMonsterLife <= 0) {
        $winner = null;
        $looser = null;
    } elseif ($firstMonsterLife <= 0) {
        $winner = $secondMonster;
        $looser = $firstMonster;
    } else {
        $winner = $firstMonster;
        $looser = $secondMonster;
    }

    return array(
        'winner' => $winner,
        'looser' => $looser,
    );
}