<?php

$username = htmlspecialchars($_POST["username"]);
$reportedPlayer = htmlspecialchars($_POST["rUsername"]);
$email = htmlspecialchars($_POST["mail"]);
$report = htmlspecialchars($_POST["report"]);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=supremod;charset=utf8', 'supremod', '');
} catch (Exception $e) {
    die('Erreur ! ' . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO `playerReport` (id, player, reportedPlayer, email, report) VALUES (DEFAULT, ?, ?, ?, ?)');
$res = $req->execute(array($username, $reportedPlayer, $email, $report));
echo "Signalement pris en compte ! <a href=\"./index.php\">Retourner à l'accueil</a>";
?>