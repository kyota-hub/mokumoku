<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規会員登録</title>
</head>
<body>
  お客様情報を入力してください。<br>
  <form action="register_check" method="post">
  お名前<br>
  <input type="text" name="name" style="width: 200px"><br>
  メールアドレス<br>
  <input type="text" name="email" style="width: 200px"><br>
  パスワードを入力してください。 <br>
  <input type="password" name="pass" style="width: 100px"><br>
  パスワードをもう一度入力してください。<br>
  <input type="password" name="pass2" style="width: 100px"><br>
  性別<br>
  <input type="radio" name="sex" value="man" checked>男性<br>
  <input type="radio" name="sex" value="woman" checked>女性<br>
  <br>
  <br>
  
  <input type="button" onclick="history.back()" value="戻る">
  <input type="submit" value="OK"><br>
  </form>
</body>
</html>