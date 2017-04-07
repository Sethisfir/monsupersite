<?php
	$app = App::getInstance();

	if ($_POST) {
		if (!empty($_POST['titre'] && $_POST['contenu'])) {
			$res = $app->getTable('post')->create(['titre'=>$_POST['titre'], 'contenu'=>$_POST['contenu']]);
			if ($res) {
				/// message flash
				header('location: admin.php?p=posts.edit');
			}
		}
	}
?>

<h2>Créer Nouvel Article</h2>
<form method="post">
	<input type="text" class="form-control" name="titre" value="" placeholder="Merci de mettre un titre"><br>
	<textarea class="form-control" name="contenu" placeholder="Merci de remplir le contenu de l'article"></textarea>
	<input type="submit" class="btn btn-primary">
</form>
