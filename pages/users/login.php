<?php
use Core\Auth\DBAuth;

$app2 = App::getInstance();
$auth2 = new DBAuth($app2->getDb());

if ($auth2->logged()) {
	header('location: admin.php');
}
?>
<h2>Connexion</h2>
<br>
<form method="post" action="admin.php">
	<div class="col-md-4">
	<input class="form-control" type="text" name="username" placeholder="Nom d'Utilisateur"><br>
	<input class="form-control" type="password" name="password" placeholder="Mot de Passe"><hr>
	<input class="btn btn-primary" type="submit">
	</div>
</form>