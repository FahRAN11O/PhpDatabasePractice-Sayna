<?php
include('config.php');
include('connexion.php');

$query = "UPDATE users SET login=:login where id=:id";
$stmt =  $pdo->prepare($query);

$id=3;
$login ='USER04';

//Liaison des valeurs avec les paramètres
$stmt->bindParam(':login', $login);
$stmt->bindParam(':id', $id);

//Execution de la requête
$stmt->execute();


$query = 'SELECT * FROM users';
$stmt = $pdo->query($query);

//récupérer les resultats
echo '<table>';
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	//Utiliser les données récupérées
	echo '<tr><td>'.$row['login'].'</td><td>'.$row['password'].'</td></tr>';
}

echo '</table>';
