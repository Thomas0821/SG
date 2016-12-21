<?php
	$lastName = $_POST['lastname'];
	$firstName = $_POST['first'];
	$phoneNumber = $_POST['phonenumber'];
	$mail = $_POST['mail'];
	$message = $_POST['message'];
?>

<div class="container">
	<h2>入力内容確認</h2>
	<h3>お名前</h3>
	<?php echo $lastName; ?>
	<?php echo $firstName; ?><br>
	<h3>電話番号</h3>
	<?php echo $phoneNumber; ?><br>
	<h3>メールアドレス</h3>
	<?php echo $mail; ?><br>
	<h3>添付メッセージ</h3>
	<?php echo $message; ?>
</div>