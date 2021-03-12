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
    $ep_name = $_POST['episodenum'];
    $idcartoon = $_POST['idcart'];
    $link = $_POST['linkep'];

    $sql = "INSERT INTO episode(episode_number, id_cartoon, link) VALUES ('$ep_name', '$idcartoon', '$link')";
    $result = mysqli_query($conn, $sql);
    header("Location: ../../../admin.php");
    exit();
  }
  if(isset($_POST['cancel'])){
    header("Location: ../../../admin.php");
    exit();
  }
