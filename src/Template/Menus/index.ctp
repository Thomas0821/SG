<h1>Menu List</h1>
<div class="container">
<ul>
	<?php foreach($menus as $menu) : ?>
		<li>
		<a href="Menus/detail?id=<?= $menu->id?>&price=<?= $menu->price ?>&text=<?= $menu->text ?>&name=<?= $menu->name ?>">
		<?= h($menu->name) ?>

		<?= h($menu->price) ?><br>
		<?= h($menu->text) ?>
			
		</a>
		</li>
	<?php endforeach  ?>
</ul>
</div>