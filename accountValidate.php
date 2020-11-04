<?php

$username = htmlspecialchars($_POST["username"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);
$retypePassword = htmlspecialchars($_POST["retypePass"]);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=supremod;charset=utf8', 'supremod', '');
} catch (Exception $e) {
    die('Erreur ! ' . $e->getMessage());
}
if($password != $retypePassword) {
    die("Les mots de passes ne correspondent pas ! <a href=\"./account.html\">Retour à la page d'inscription</a>")
}
$req = $bdd->prepare('INSERT INTO `users` (id, username, password, email) VALUES (DEFAULT, ?, ?, ?)');
$res = $req->execute(array($username, $email, $password));
echo "Votre compte a bien été créé ! <a href=\"./index.php\">Retourner à l'accueil</a>";
?>