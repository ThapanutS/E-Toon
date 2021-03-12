<?php
  session_start();
  include_once '../../../Login/includes/dbh.inc.php';
  if(isset($_SESSION['userId']) && $_SESSION['type'] == 'admin'){
  }
  else {
    header("Location: ../../index.php");
    exit();
  }
  if(isset($_POST['submit-edit'])){
    $type_name = $_POST['typename'];

    $sql = "INSERT INTO typecartoon(type_cartoon) VALUES ('$type_name')";
    $result = mysqli_query($conn, $sql);
    header("Location: ../../../admin.php");
    exit();
  }
  if(isset($_POST['cancel'])){
    header("Location: ../../../admin.php");
    exit();
  }
