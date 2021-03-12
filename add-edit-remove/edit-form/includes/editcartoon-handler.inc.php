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
    $name = $_POST['cartoonname'];
    $link = $_POST['linkepisode'];
    $img = $_POST['imgname'];
    $typeid = $_POST['type_id'];
    if (!preg_match("/^[0-9]*$/", $typeid)) {
      header("Location: editcartoon-handler.inc.php?errorType=".$typeid);
      exit();
    }

    $sql = "UPDATE cartoon SET cartoon_name='$name', linkEP='$link', img='$img', type='$typeid' WHERE cartoon_id = $id";
    $result = mysqli_query($conn, $sql);
    header("Location: ../../../admin.php");
    exit();
  }
  if(isset($_POST['cancel'])){
    header("Location: ../../../admin.php");
    exit();
  }
