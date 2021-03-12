<?php
  session_start();
  include_once '../Login/includes/dbh.inc.php';
  if(isset($_SESSION['userId']) && $_SESSION['type'] == 'admin'){
  }
  else {
    header("Location: ../index.php");
    exit();
  }
  $id = $_GET['id'];
  $sql = "DELETE FROM cartoon WHERE cartoon_id=$id";
  $result = mysqli_query($conn, $sql);
  mysqli_close();
  header("Location: ../admin.php");
  exit();
?>
