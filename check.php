<?php 
	// echo $_POST['nickname'];
	// echo '<br>';
	// echo $_POST['email'];
	// echo '<br>';
	// echo $_POST['content'];
	// echo '<br>';
	// echo '<br>';

// 入力チェック
	$nickname = htmlspecialchars($_POST['nickname']);
 	$email = htmlspecialchars($_POST['email']);
 	$content = htmlspecialchars($_POST['content']);

	if ($nickname == '') {
		$nickname_result = 'ニックネームを入力してください。';
	}else{
		$nickname_result = 'ようこそ'.$nickname.'様';
	}

	if ($email == '') {
		$email_result = 'メールアドレスを入力してください。';
	}else{
		$email_result = 'メールアドレス：'.$email;
	}

	if ($content == '') {
		$content_result = 'お問い合わせ内容を入力してください。';
	}else{
		$content_result = 'お問い合わせ内容：'.$content;
	}

 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <title>入力内容を確認します</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>入力内容確認</h1>
  <p><?php echo $nickname_result; ?></p>
  <p><?php echo $email_result; ?></p>
  <p><?php echo $content_result; ?></p>

  <form method="POST" action="thanks.php">
  	<input type="hidden" name="nickname" value=<?php echo $nickname ?>>
  	<input type="hidden" name="email" value=<?php echo $email ?>>
  	<input type="hidden" name="content" value=<?php echo $content ?>>

    <input type="button" value="戻る" onclick="history.back()">
    <?php if($nickname!='' && $email!='' && $content!=''): ?>
	  <input type="submit" value="送信">
	<?php endif; ?>
  </form>

</body>
</html>