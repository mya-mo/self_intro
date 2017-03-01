<?php
session_start();  // セッション継続の定型文
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];

echo '<pre>';
echo var_dump($username);
echo '</pre>';

echo '<pre>';
echo var_dump($email);
echo '</pre>';

echo '<pre>';
echo var_dump($password);
echo '</pre>';

?>

<!-- <!DOCTYPE html>
<html lang="ja">
<head>
  <title>入力内容確認</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>入力内容確認</h1>
  $nickname = htmlspecialchars($_POST['nickname']);
  $email = htmlspecialchars($_POST['email']);
  $content = htmlspecialchars($_POST['content']);
  <p><?php echo $nickname_result; ?></p>
  <p><?php echo $email_result; ?></p>
  <p><?php echo $content_result; ?></p>
  <form method="post" action="thanks.php">
    <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="content" value="<?php echo $content; ?>">

    <input type="button" onclick="history.back()" value="戻る">
    <?php if ($nickname != '' && $email != '' && $content != ''): ?>
      <input type="submit" value="OK">
    <?php endif; ?>
  </form>
</body>
</html> -->