<?php require_once('header.php'); ?>
<form method=post action=newuser.php>
	<div class=form-group>
		<label for='login'>Nom complet</label>
		<input class=form-control name=nom id=nom>
	</div>
	<div class=form-group>
		<label for='login'>Nom d'utilisateur</label>
		<input class=form-control name=login id=login>
	</div>
	<div class=form-group>
		<label for='pass'>Mot de passe</label>
		<input class=form-control id=pass name=pass>
	</div>
	<div class=form-group>
		<label for='pass2'>Confirmation du mot de passe</label>
		<input class=form-control id=pass2 name=pass2>
	</div>
	<button type=submit class='btn'>S'enregister</button>
</form>
<?php require_once('footer.php');
