<h1>view</h1>

<ul>
	<?php foreach ($shops as $shop) : ?>
		<li><?= h($shop->name); ?></li>
	<?php endforeach; ?> 
</ul>