<?php
require_once '../connect/connect.php';

$data = array();
if(isset($_GET['id_insurance_company'])){
  $id_insurance_company = $_GET['id_insurance_company'];
  $sql = "SELECT * FROM tb_insurance_type WHERE id_insurance_company = '$id_insurance_company' ";
  $query = $conn->query($sql);

  while($row = $query->fetch_assoc()){
    $data[] = $row;
  }

  
}

echo json_encode($data);
?>