<?php
	$app = App::getInstance();

	if ($_POST) {
		if (!empty($_POST['titre'])) {
			$res = $app->getTable('category')->create(['titre'=>$_POST['titre']]);
			if ($res) {
				/// message flash
				header('location: admin.php?p=categories.edit');
			}
		}
	}
?>

<h2>Créer une nouvelle Catégorie</h2>
<form method="post">
	<input type="text" class="form-control" name="titre" value="" placeholder="Merci de mettre un titre">
	<input type="submit" class="btn btn-primary">
</form>
