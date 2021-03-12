<?php

if (isset($_POST['sign-in'])){

  require 'dbh.inc.php';

  $mailuid = $_POST['email'];
  $userpwd = $_POST['your_pass'];

  if (empty($mailuid) || empty($userpwd)) {
    header("Location: ../login.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE users_Email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../login.php?error=sqlerror");
      exit();
    }
    else {

      mysqli_stmt_bind_param($stmt, "s", $mailuid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwd = password_verify($userpwd, $row['users_Pw']);
        if ($pwd == false) {
          header("Location: ../login.php?error=wrongpassword");
          exit();
        }
        else if ($pwd == true) {
          session_start();
          $_SESSION['userId'] = $row['users_Id'];
          $_SESSION['userEid'] = $row['users_Email'];
          $_SESSION['uName'] = $row['users_Name'];
          $_SESSION['proImg'] = $row['profileImg'];
          $_SESSION['type'] = $row['type_users'];

          header("Location: ../../index.php");
          exit();
        }
        else {
          header("Location: ../login.php?error=wrongpassword");
          exit();
        }
      }
      else {
        header("Location: ../login.php?error=nouser");
        exit();
      }

    }
  }

}
else {
  header("Location: ../login.php");
  exit();
}
