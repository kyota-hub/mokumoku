<?php
session_start();
function handle($params){
  require_once('./models/common.php');
  clearSession();
  return array();
}