<?php
session_start();
try {
	$db = new PDO('mysql:dbname=photos;host=127.0.0.1', 'root', '');
} catch (Exception $e) {
	echo 'Erreur de connexion à la base de données:', $e->getMessage();
}
