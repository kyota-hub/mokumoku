<?php
function handle($params){
  require_once('./models/common.php');

  $post = sanitize($_POST);

  $name = $post['name'];
  $email = $post['email'];
  $pass = $post['pass'];
  $pass2 = $post['pass2'];
  $sex = $post['sex'];

  $okflg = true;

  return array(
    'name' => $name,
    'email' => $email,
    'pass' => $pass,
    'pass2' => $pass2,
    'sex' => $sex,
    'okflg' => $okflg,
  );
}