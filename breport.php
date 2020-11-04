<?php

$username = htmlspecialchars($_POST["username"]);
$bug = htmlspecialchars($_POST["bug"]);
$email = htmlspecialchars($_POST["mail"]);
$report = htmlspecialchars($_POST["report"]);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=supremod;charset=utf8', 'supremod', '');
} catch (Exception $e) {
    die('Erreur ! ' . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO `bugReport` (id, player, type, email, report) VALUES (DEFAULT, ?, ?, ?, ?)');
$res = $req->execute(array($username, $bug, $email, $report));
echo "Signalement pris en compte ! <a href=\"./index.php\">Retourner à l'accueil</a>";
?>