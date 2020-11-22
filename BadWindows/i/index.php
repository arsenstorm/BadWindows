<?php
  if (isset($_GET['reason'])) {
    if ($_GET['reason'] == 'dpi') {
      session_start();
      include_once '../includes/dbh.inc.php';

      $sql = "SELECT * FROM users";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['idUsers'];
          $sqlImg = "SELECT * FROM profileimg WHERE userid = '$id'";
          $resultImg = mysqli_query($conn, $sqlImg);
          $rowImg = mysqli_fetch_array($resultImg);
          $typeID = $id.$rowImg['type'];
        }
      }
      $file = "profile".$typeID;

      if (!unlink($file)) {
        header("Location: ../settings?DPI=Failed");
      } else {
        $sql = "UPDATE profileimg SET status=1 WHERE userid='$id'";
        mysqli_query($conn, $sql);
        header("Location: ../settings?DPI=Deleted");
      }

    } else if ($_GET['reason'] == 'abort') {
      header("Location: ../settings?action=aborted");
    } else {
      header("Location: ../settings?action=aborted");
    }
  } else {
    header("Location: ../settings?action=restricted");
  }

?>
