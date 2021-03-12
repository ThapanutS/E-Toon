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
    $id = $_GET['id'];
    $name = $_POST['typename'];

    $sql = "UPDATE typecartoon SET type_cartoon='$name' WHERE type_id = $id";
    $result = mysqli_query($conn, $sql);
    header("Location: ../../../admin.php");
    exit();
  }
  if(isset($_POST['cancel'])){
    header("Location: ../../../admin.php");
    exit();
  }
