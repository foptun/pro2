<?php
$id_category_car = $_GET['id_category_car'];
$sql = "SELECT * FROM tb_category_car WHERE id = '$id_category_car'";
$query = $conn->query($sql);
$row = $query->fetch_array();
?>
<section class="content-header">
  <h1>
    แก้ไขประเภทรถ
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  </ol>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">แก้ไขประเภทรถ</h3>
  </div>
  <form class="form-group" action="index.php?menu=category-car-editDB" method="post" enctype="multipart/form-data">
    <div class="box-body">
      <br>
      Name
      <input class="form-control" type="text" name="name" value="<?php echo $row['category_car_name'];?>" placeholder="Name">
      <br>
      <input type="hidden" name="id_category_car" value="<?php echo $row['id'];?>">
      <input class="btn btn-primary" type="submit" value="Edit"> 
      <a href="#" onclick="window.history.back();" class="btn btn-default">Cancel</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
