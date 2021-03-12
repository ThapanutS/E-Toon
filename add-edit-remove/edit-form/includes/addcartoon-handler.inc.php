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
    $cartoon_name = $_POST['cartoonname'];
    $linkEP = $_POST['linkepisode'];
    $img = $_POST['imgname'];
    $type_id = $_POST['type_id'];

    $sql = "INSERT INTO cartoon(cartoon_name, linkEP, img, type) VALUES ('$cartoon_name', '$linkEP', '$img', '$type_id')";
    $result = mysqli_query($conn, $sql);
    header("Location: ../../../admin.php");
    exit();
  }
  if(isset($_POST['cancel'])){
    header("Location: ../../../admin.php");
    exit();
  }
