<?php
	$app = App::getInstance();

	if ($_POST) {
		if (!empty($_POST['id'] && $_POST['titre'] && $_POST['contenu'])) {
			$res = $app->getTable('post')->update($_POST['id'], ['titre'=>$_POST['titre'], 'contenu'=>$_POST['contenu']]);
			if ($res) {
				?>
					<div class="alert alert-success">Enregistrer</div>
				<?php

			}
		}
	}

	$post = $app->getTable('post')->find($_GET['id']);
	if ($post===false) {
		$app->notFound();
	}
	$app->titre = $post->titre;
?>

<h2>Modifier</h2>
<form method="post" action="admin.php?p=posts.single&id=<?= $post->id; ?>">
	<input type="hidden" name="id" value="<?= $post->id; ?>">
	<input type="text" class="form-control" name="titre" value="<?= $post->titre; ?>"><br>
	<textarea class="form-control" name="contenu"><?= $post->contenu; ?></textarea>
	<input type="submit" class="btn btn-primary">
</form>
