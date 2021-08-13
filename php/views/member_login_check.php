<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン確認</title>
</head>
<body>
<?php
if($rec == false)
    {
      echo 'メールアドレスかパスワードが間違っています。<br>';
      echo '<a href="member_login">戻る</a>';
      exit();  
    }
    else
    {
      session_start();
      $_SESSION['member_login'] = 1;
      $_SESSION['member_code'] = $code;
      $_SESSION['member_name'] = $name;
      header('Location:top');
      exit();
    }
?>
</body>
</html>