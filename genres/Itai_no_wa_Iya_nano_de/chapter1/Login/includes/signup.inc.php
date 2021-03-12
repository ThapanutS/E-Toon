<?php
if(isset($_POST['signup'])){

  require 'dbh.inc.php';

  $uname = $_POST['name'];
  $uemail = $_POST['email'];
  $upass = $_POST['pass'];
  $urepass = $_POST['re_pass'];

  if (empty($uname) || empty($uemail) || empty($upass) || empty($urepass)) {
    header("Location: ../register.php?error=emptyfields&name=".$uname."&email=".$uemail);
    exit();
  }
  elseif (!filter_var($uemail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
    header("Location: ../register.php?error=invalidemailname");
    exit();
  }
  elseif (!filter_var($uemail, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../register.php?error=invalidemail&name=".$uname);
    exit();
  }
  elseif (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
    header("Location: ../register.php?error=invalidname&email=".$uemail);
    exit();
  }
  elseif ($password !== $$urepass) {
    header("Location: ../register.php?error=passcheck=".$uname."&email=".$uemail);
    exit();
  }
  else {

    $sql = "SELECT emailUsers FROM users WHERE emailUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../register.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $uemail);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("Location: ../register.php?error=usertaken&email=".$uemail);
        exit();
      }
      else {

        $sql = "INSERT INTO users(name, emailUsers, pwdUsers) values (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../register.php?error=sqlerror");
          exit();
        }
        else {
          $hashedPwd = password_hash($upass, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "sss",$uname , $uemail, $hashedPwd);
          mysqli_stmt_execute($stmt);
          header("Location: ../register.php?signup=success");
          exit();
        }

      }
    }

  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else {
  header("Location: ../register.php?");
  exit();
}
