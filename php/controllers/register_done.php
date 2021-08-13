<?php
session_start();
function handle($params){
  require_once('./models/common.php');
  session_regenerate_id(true);

  try{
    $post = sanitize($_POST);
  
    $name = $post['name'];
    $email = $post['email'];
    $pass = $post['pass'];
    $sex = $post['sex'];
    $passcode = md5($pass);
    if($sex =='man') {$sex =1;}
    else{$sex =2;}

    $stmt = executeSql('INSERT INTO test_member (password,name,email,sex) VALUES (?,?,?,?)',"$passcode,$name,$email,$sex");
    
    $customer_mail = new Register_Mail('From: info@ohutondaisuki.co.jp');
    $customer_mail->makeMail('会員登録完了',$name);
    $customer_mail->sendMail($email);
  }catch(Exception $e){
    echo $e;
  }
  return array(
    'name' => $name,
    'email' => $email,
    'pass' => $pass,
    'pass2' => $pass2,
    'sex' => $sex,
    'okflg' => $okflg,
  );
}