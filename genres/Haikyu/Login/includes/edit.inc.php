<?php
session_start();
include_once 'dbh.inc.php';
$Uid = $_SESSION['userId'];

$newName = $_POST['name'];
$newPass = $_POST['new_pass'];
$newrePass = $_POST['re_pass'];

if (isset($_POST['save'])) {
  if ($newPass !== $newrePass) {
    header("Location: ../../profile-setting.php?error=passcheck");
    exit();
  } else {
    $hashednewPwd = password_hash($newPass, PASSWORD_DEFAULT);
    $sql = "UPDATE users SET users_Name='$newName', users_Pw ='$hashednewPwd' WHERE users_Id='$Uid'";
    $result = mysqli_query($conn, $sql);
    $_SESSION['uName'] = $newName;
    header("Location: ../../profile-setting.php?edit=success");
    exit();
  }
} else if(isset($_POST['cancel'])) {
  header("Location: ../../profile.php");
  exit();
}
