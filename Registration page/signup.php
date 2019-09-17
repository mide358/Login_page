<?php 

require_once('insert.php');

if(!empty($_POST)){
  $insert->post($_POST);
  echo '<p style="font-size: 2em; color: green; opacity: 0.7;">Post Successfully Published</p>';
}

?>