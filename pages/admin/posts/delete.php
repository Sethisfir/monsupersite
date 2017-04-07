<?php
	$app = App::getInstance();

	if ($_POST) {
		if (!empty($_POST['id'])) {
			$res = $app->getTable('post')->delete($_POST['id']);
			if ($res) {
				/// message flash
				header('location: admin.php?p=posts.edit');
			}
		}
	}