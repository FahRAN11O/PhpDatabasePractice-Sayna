<?php
include('config.php');
include('connexion.php');

$query = 'SELECT * FROM users';
$stmt = $pdo->query($query);

//récupérer les resultats
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	//Utiliser les données récupérées
	echo $row('login');
}
