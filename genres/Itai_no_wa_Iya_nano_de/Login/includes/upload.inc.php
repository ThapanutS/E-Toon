<?php
session_start();
include_once 'dbh.inc.php';
$Uid = $_SESSION['userId'];

if(isset($_POST['submit'])){
  $file = $_FILES['file'];

  $fileName = $file['name'];
  $fileTmpName = $file['tmp_name'];
  $fileSize = $file['size'];
  $fileError = $file['error'];
  $fileType = $file['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 1000000) {
        $tmp = "profile".$Uid;
        $fileNameNew = "profile".$Uid.".".$fileActualExt;
        $fileDestination = 'profile-picture/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        $sql = "UPDATE users SET profileImg='$tmp' WHERE users_Id='$Uid';";
        $result = mysqli_query($conn, $sql);
        $_SESSION['proImg'] = $tmp;
        header("Location: ../../profile.php");
      } else {
        header("Location: ../../edit-picture.php?error=fileoutOfsize");
      }
    } else {
      header("Location: ../../edit-picture.php?error=failupload");
    }
  } else {
    header("Location: ../../edit-picture.php?error=InvalidTypeFile");
  }
}
