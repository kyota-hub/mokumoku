<?php
  $params = explode('/', $_GET['url']);
  $model = array_shift($params);
  
  include ('./controllers/'.$model.'.php');
  $ret = handle($params);
  
  extract($ret);
  include ('./views/'.$model.'.php');
?>