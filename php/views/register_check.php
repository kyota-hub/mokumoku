<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>会員登録確認</title>
</head>
<body>

<?php
if(!$name)
{
  echo 'お名前が入力されていません。<br><br>';
  $okflg = false;
}
else
{
  echo 'お名前:<br>'.$name.'<br><br>';
}

if(preg_match('/\A[\w\-\.]+\@[\w\-\.]+\.([a-z]+)\z/',$email) == 0)
{
  echo 'メールアドレスを正確に入力してください。<br><br>';
  $okflg = false;

}
else
{
  echo 'メールアドレス:<br>'.$email.'<br><br>';
}


if(!$pass)
{
  echo 'パスワードが入力されていません。';
  $okflg = false;
}

if($pass != $pass2)
{
  echo 'パスワードが一致しません。';
  $okflg = false;
}

echo '性別<br>';
if($sex == 'man')
{
  echo '男性';
}
else
{
  echo '女性';
}
echo '<br><br>';


if($okflg == true)
{
  echo '<form method="post" action="register_done">';
  echo '<input type="hidden" name="name" value="'.$name.'">';
  echo '<input type="hidden" name="email" value="'.$email.'">';
  echo '<input type="hidden" name="pass" value="'.$pass.'">';
  echo '<input type="hidden" name="sex" value="'.$sex.'">';
  echo '<input type="button" onclick="history.back()" value="戻る">';
  echo '<input type="submit" value="OK"><br>';
  echo '</form>';
}
else
{
  echo '<form>';
  echo '<input type="button" onclick="history.back()" value="戻る">';
  echo '</form>';
}


?>
</body>
</html>