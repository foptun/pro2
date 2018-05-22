<section class="content-header">
  <h1>
    คำนวนค่าบริการ
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  </ol>
</section>

<section class="content">
<div class="box box-warning">
  <div class="box-header with-border">
      <h3 class="box-title">คำนวนค่าบริการ</h3>
  </div>
  <form class="form-group" action="index.php?menu=cal-service&calculate=yes" method="post">
    <div class="box-body">
      <br>
      เลือกประเภทรถ
      <select name="id_category_car" class="form-control">
        <?php 
        $sql = "SELECT * FROM tb_category_car";
        $query = $conn->query($sql);
        while($row = $query->fetch_array()){
        ?>
        <option value="<? echo $row['id'];?>"><? echo $row['category_car_name'];?></option>
        <?php
        }
         ?>
      </select>
      <br>
      <input class="btn btn-warning" type="submit" value="คำนวน"> 
    </div>
  </form>
  <!-- /.box-body -->
</div>




<?php
          if(isset($_GET['calculate'])){
            $id_category_car = $_POST['id_category_car'];
            $sql = "SELECT * FROM tb_category_car WHERE id = '$id_category_car' ";
            $query = $conn->query($sql);
            
            
            if($query->num_rows > 0){
              while($row = $query->fetch_array()){

          ?>
            <div class="box box-warning">
          
          <!-- show search by car number -->
              
            <div class="box-header with-border">
                <h3 class="box-title"> ค่าบริการ: <strong><?php echo number_format($row['price_service']) ?></strong> บาท</h3>
            </div>


              <!-- END show search by car number -->
              </div>


            <?php
                    }
                  }else{
                    echo 'ไม่พบข้อมูล';
                  }
                }
            ?>




</section>
