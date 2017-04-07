<?php
	$categories = App::getInstance()->getTable('Category')->all();

?>
<h1>Edition des Catégories</h1>
<a href="admin.php?p=categories.add">Ajouter Nouvel Catégorie</a>

<div class="row">
	<div class="col-md-8">
		<table class="table">
			<thead>
				<tr><hr>
					<td>Id</td>
					<td>Titre</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($categories as $category) : ?>
				<tr>
					<td><?= $category->id; ?></td>
					<td><?= $category->titre; ?></td>
					<td><a class="btn btn-primary" href="admin.php?p=categories.single&id=<?= $category->id; ?>">Edit</a>
					<form method="post" action="admin.php?p=categories.delete" style="display: inline-block;">
						<input type="hidden" name="id" value="<?= $category->id ?>">
						<input class="btn btn-danger" type="submit" name="OK" value="Delete">
					</form>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>