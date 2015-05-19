<?php require_once('boot.php');
$q = $db->prepare('SELECT nom FROM users WHERE login = ? AND pass = ?');
$q->execute([$_POST['login'], $_POST['pass']]);
if ($q->rowCount() == 1) {
	$_SESSION['logged'] = TRUE;
	$_SESSION['nom'] = $q->fetch()['nom'];
	header('Location: /index.php');	
}else {
	header('Location: /login.php');	
}
