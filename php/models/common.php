<?php

function gestOrMember($session)
{
  if(isset($session['member_login'])==false)
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
  echo $session['member_name'];
  echo '様　';
  echo '<a href="member_logout">ログアウト</a><br>';
  echo '<br>';

}

}

function clearSession()
{
  $_SESSION = array();
if(isset($_COOKIE[session_name()])==true)
{
  setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
}


class Register_Mail{
  public $email;
  public $title;
  public $header;
  public $honbun;
  public $footer;

  public function __construct($header)
  {
    $this->header = $header;
    $this->footer = "□□□□□□□□□□□□□\n";
    $this->footer .= "  〜ベジシェア〜\n";
    $this->footer .= "\n";
    $this->footer .= "電話 090-1919-4545\n";
    $this->footer .= "□□□□□□□□□□□□□\n";
  }

  public function makeMail($title, $onamae)
  {
    $this->title = $title;
    $this->honbun = $onamae."様\n\n会員登録が完了しました。\n\n";
    $this->honbun .= $this->footer;
  }

  public function sendMail($email)
  {
    $this->honbun = html_entity_decode($this->honbun, ENT_QUOTES,'UTF-8');
    mb_language('Japanese');
    mb_internal_encoding('UTF-8');
    mb_send_mail($email,$this->title,$this->honbun,$this->header);
  }
}


function executeSql($sql,$data)
{
  $dsn = 'mysql:dbname=pinokio0507_mokumoku;host=localhost;charset=utf8';
  $user = 'pinokio0507_moku';
  $password = '1234567890';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $stmt = $dbh->prepare($sql);
  if($data != ""){
    $data = explode(",",$data);
    $stmt->execute($data);
  }
  else
  {
    $stmt->execute();
  }
  return $stmt;
}

function sanitize($before)
{
  foreach($before as $key => $value)
  { 
    $after[$key] = htmlspecialchars($value,ENT_QUOTES,'UTF-8');
  }
  return $after;
}

