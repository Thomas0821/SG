<?php
	$this->assign('title','Detail');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$price = $_GET['price'];
		$name = $_GET['name'];
		$text  =$_GET['text'];
	}
?>


<div class="container">
	<h2><?= h($name) ?></h2> 
	<img>
	<p><?= h($price)  ?></p>
	<p><?=  h($text) ?></p>

	<!-- <form action="Menus/confirm" type="post">
	<input href="Menus/confirm?id=<?= $menu->id?>&price=<?= $menu->price ?>&text=<?= $menu->text ?>&name=<?= $menu->name ?>">GIFTを送る</a>

 -->
	<a href="form" >確認</a>
 </div>
