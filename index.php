<?php
include('config.php');
include('connexion.php');

$query = "INSERT INTO users (login,password) VALUES (:login, :password)";
$stmt =  $pdo->prepare($query);

$login ='user04';
$password='user04';

//Liaison des valeurs avec les paramètres
$stmt->bindParam(':login', $login);
$stmt->bindParam(':password', $password);

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
