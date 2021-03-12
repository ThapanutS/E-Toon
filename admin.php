<?php
  session_start();
  include_once 'Login/includes/dbh.inc.php';
  if(isset($_SESSION['userId']) && $_SESSION['type'] == 'admin'){
  }
  else {
    header("Location: index.php");
    exit();
  }
?>
<html>
<link rel="stylesheet" href="css/admin-style.css" type="text/css">
<head>
  <style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>

<a href="index.php" class="button">Home</a>

<section>
  <!--for demo wrap-->
  <h1>Admin E-TOON USER LIST</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>users_Id</th>
          <th>users_Name</th>
          <th>Users_Email</th>
          <th>ProfileImg</th>
          <th>Remove</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
          if($row['type_users'] != 'admin'){
            echo "<tr>";
            echo "<td>".$row['users_Id']."</td>";
            echo "<td>".$row['users_Name']."</td>";
            echo "<td>".$row['users_Email']."</td>";
            echo "<td>".$row['profileImg']."</td>";
            echo "<td><a href='add-edit-remove/delete-users.php?id=".$row['users_Id']."'>Delete</a></td>";
            echo "</tr>";
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</section>

<section>
  <!--for demo wrap-->
  <h1>Admin E-TOON CARTOON LIST</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>cartoon_id</th>
          <th>cartoon_name</th>
          <th>Link_Episode</th>
          <th>img</th>
          <th>type</th>
          <th>Add/Edit/Remove</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php
        $sql = "SELECT * FROM cartoon";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['cartoon_id']."</td>";
            echo "<td>".$row['cartoon_name']."</td>";
            echo "<td>".$row['linkEP']."</td>";
            echo "<td>".$row['img']."</td>";
            echo "<td>".$row['type']."</td>";
            echo "<td><a href='add-edit-remove/delete-cartoon.php?id=".$row['cartoon_id']."'>Delete</a>   <a href='add-edit-remove/edit-form/edit-cartoon.php?id=".$row['cartoon_id']."'>Edit</a></td>";
            echo "</tr>";
        }
        echo "<tr>";
        echo "<td>-</td>";
        echo "<td>-</td>";
        echo "<td>-</td>";
        echo "<td>-</td>";
        echo "<td>-</td>";
        echo "<td><a href='add-edit-remove/edit-form/add-cartoon.php'>Add</a></td>";
        echo "</tr>";
        ?>
      </tbody>
    </table>
  </div>
</section>

<section>
  <!--for demo wrap-->
  <h1>Admin E-TOON TYPE CARTOON LIST</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>type_id</th>
          <th>type_name</th>
          <th>Add/Edit/remove</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php
        $sql = "SELECT * FROM typecartoon";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['type_id']."</td>";
            echo "<td>".$row['type_cartoon']."</td>";
            echo "<td><a href='add-edit-remove/delete-type.php?id=".$row['type_id']."'>Delete</a>   <a href='add-edit-remove/edit-form/edit-typecartoon.php?id=".$row['type_id']."'>Edit</a></td>";
            echo "</tr>";
        }
        echo "<tr>";
        echo "<td>-</td>";
        echo "<td>-</td>";
        echo "<td><a href='add-edit-remove/edit-form/add-typecartoon.php'>Add</a></td>";
        echo "</tr>";
        ?>
      </tbody>
    </table>
  </div>
</section>

<section>
  <!--for demo wrap-->
  <h1>Admin E-TOON EPISODE LIST</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>episode_id</th>
          <th>episode_number</th>
          <th>cartoon_id</th>
          <th>link</th>
          <th>Add/Edit/remove</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php
        $sql = "SELECT * FROM episode";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['episode_id']."</td>";
            echo "<td>".$row['episode_number']."</td>";
            echo "<td>".$row['id_cartoon']."</td>";
            echo "<td>".$row['link']."</td>";
            echo "<td><a href='add-edit-remove/delete-episode.php?id=".$row['episode_id']."'>Delete</a>   <a href='add-edit-remove/edit-form/edit-episode.php?id=".$row['episode_id']."'>Edit</a></td>";
            echo "</tr>";
        }
        echo "<tr>";
        echo "<td>-</td>";
        echo "<td>-</td>";
        echo "<td>-</td>";
        echo "<td>-</td>";
        echo "<td><a href='add-edit-remove/edit-form/add-episode.php'>Add</a></td>";
        echo "</tr>";
        ?>
      </tbody>
    </table>
  </div>
</section>


<!-- follow me template -->
<script src="js/admin-js.js"></script>
</html>
