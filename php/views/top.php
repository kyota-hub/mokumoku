<?php
if(isset($_SESSION['member_login'])==false)
{
  echo 'ようこそゲスト様　';
  echo '<br>';
  echo '<a href="register">新規会員登録</a>';
  echo '<br>';
  echo '<a href="member_login">ログイン</a><br>';
  echo '<br>';
}
else
{
  echo 'ようこそ';
  echo $_SESSION['member_name'];
  echo '様　';
  echo '<a href="member_logout">ログアウト</a><br>';
  echo '<br>';

}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トップページ</title>
</head>
<body>

<?php
require_once("models/common.php");
?>
</body>
</html>