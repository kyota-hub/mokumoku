<?php
session_start();
function handle($params){
  require_once('./models/common.php');
  session_regenerate_id(true);
  return array();
}