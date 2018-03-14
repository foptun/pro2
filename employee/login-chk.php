<?php
session_start();
//error_reporting(0);
require_once '../connect/connect.php';
require_once '../model/EmployeeModel.php';

$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);

$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

$sql = "SELECT * FROM tb_employee WHERE username='$username' AND password='$password' ";


$query = $conn->query($sql);
$row = $query->fetch_array();

if ($query->num_rows > 0) {
   $employee = new EmployeeModel();
   $employee->id = $row['id'];
   $employee->name = $row['name'];
   $employee->username = $row['username'];
   $employee->password = $row['password'];
   $employee->firstname = $row['firstname'];
   $employee->lastname = $row['lastname'];
   $employee->email = $row['email'];

   $_SESSION['LOGIN_EMPLOYEE'] = serialize($employee);


      ?>
      <script type="text/javascript">
         window.location = "index.php";
      </script>
      <?php

} else {
   ?>
   <script type="text/javascript">
      alert("Login Fails!!!");
      history.back();
   </script>
   <?php

}
?>
