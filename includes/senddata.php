<?php
include('../autoload.php');
include('conn.php');
$admin = new AdminData();
if(isset($_POST['submit'])){
  $admin->for_post = mysqli_real_escape_string($conn, filter_input(INPUT_POST, "idd"));
  $admin->name = mysqli_real_escape_string($conn, filter_input(INPUT_POST, "name"));
  $admin->comment = mysqli_real_escape_string($conn, filter_input(INPUT_POST, "comment"));
  $admin->comment();
}



?>