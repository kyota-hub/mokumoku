<?php

function handle($params){
  try{
    require_once('./models/common.php');

    $post = sanitize($_POST); 
    $member_email = $post['email'];
    $member_pass = md5($post['pass']);
    
    $stmt = executeSql('SELECT code,name FROM test_member WHERE email=? AND password=?',"$member_email,$member_pass");
    
    
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    $data['rec'] = $rec;
  }  
  catch (Exception $e)
  {
    echo $e;
  }
  
  return array(
    'rec' =>$data,
    'code' => $rec['code'],
    'name' => $rec['name']
  );
}