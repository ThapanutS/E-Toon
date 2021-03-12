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
    $epname = $_POST['episodenum'];
    $linke = $_POST['linkep'];

    $sql = "UPDATE episode SET episode_number='$epname', link='$linke' WHERE episode_id=$id";
    $result = mysqli_query($conn, $sql);
    header("Location: ../../../admin.php");
    exit();
  }
  if(isset($_POST['cancel'])){
    header("Location: ../../../admin.php");
    exit();
  }
