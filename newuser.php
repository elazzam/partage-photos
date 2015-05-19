<?php require_once('boot.php');
$q = $db->prepare('SELECT 1 FROM users WHERE login = ?');

$q->execute([$_POST['login']]);
if ($q->rowCount() == 1) {
	$_SESSION['flash'] = 'Ce nom d\'utitisateur est déjà pris';
	header('Location: /register.php');	
} else { //login dispo
	if ($_POST['pass'] == $_POST['pass2']) {
		$q = $db->prepare(' INSERT INTO users (nom, login, pass) VALUES(?, ?, ?) ');
		$q->execute([ $_POST['nom'], $_POST['login'], $_POST['pass'] ]);
		header('Location: /login.php');	
	} else {
		$_SESSION['flash'] = 'Les mots de passes ne correspondent pas';
		header('Location: /register.php');	
	}

}
