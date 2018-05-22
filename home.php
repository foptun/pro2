  <!-- Content Header (Page header) -->
  <section class="content-header">

    <h1>
      ตรอ.
      <small>ตรวจสภาพรถเอกชน</small>
    </h1>
    <!-- <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol> -->
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12">
        <!-- <h1>Promotion</h1> -->


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">


<?php
        $sql = "SELECT * FROM tb_promotion";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
          if($no == 1){
            $no++;
?>

    <div class="item active">
      <center>
        <img src="data:image/jpeg;base64,<?=base64_encode($row['picture']);?>" >
      </center>
    </div>
<?php
          }else{
        ?>
    <div class="item">
      <center>
        <img src="data:image/jpeg;base64,<?=base64_encode($row['picture']);?>" >
      </center>
    </div>

  <?php
        }
    }
      ?>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



      </div>
    </div>

    <div class="row">


    </div>

    <br>

    <!-- /.row -->
    <!-- Main row -->
    <div class="row">

      <div class="col-md-1">
        <!-- Column วเว้นว่างเพื่อระยะห่าง่าง -->
      </div>

      <div class="col-md-10">
      
        <div class="box box-warning">
          
          <form class="form-group" action="index.php?menu=home&search=yes" method="post">
            <div class="box-body">
              <div class="box-header with-border">
                  <h3 class="box-title">ตรวจสอบข้อมูลรถ</h3>
              </div>
              <input class="form-control" type="text" name="car_number" placeholder="เลขทะเบียนรถ ตัวอย่าง กก-1234 มหาสารคาม">
              <br>
              <input class="btn btn-warning" type="submit" value="ค้นหา"> 
            </div>
          </form>

        </div>



        

        
            

            <?php
          if(isset($_GET['search'])){
            $car_number = $_POST['car_number'];
            $sql = "SELECT tb_customer.firstname, tb_customer.lastname, tb_customer.sex, tb_customer.address, tb_customer.tel, 
            tb_car.car_number, tb_category_car.category_car_name, tb_car.car_brand, tb_car.car_model, tb_car.car_serial,
            tb_insurance_company.insurance_name, tb_insurance_type.level_name, tb_insurance_type.price_premium,
            tb_category_car.price_check_car, tb_category_car.price_reg_renew, tb_category_car.price_service, 
            tb_order_service.service_date
            FROM tb_customer, tb_car, tb_category_car, tb_order_service, tb_insurance_company, tb_insurance_type
            WHERE tb_customer.id = tb_car.id_customer 
            AND tb_category_car.id = tb_car.id_car_category
            AND tb_car.id = tb_order_service.id_car
            AND tb_order_service.id_insurance_type = tb_insurance_type.id
            AND tb_insurance_type.id_insurance_company = tb_insurance_company.id
            AND tb_car.car_number LIKE '%$car_number%' ";
            $query = $conn->query($sql);
            
            
            if($query->num_rows > 0){
              while($row = $query->fetch_array()){

          ?>
            <div class="box box-primary">
          
          <!-- show search by car number -->
              
            <div class="box-header with-border">
                <h3 class="box-title"> เลขทะเบียน: <strong><?php echo $row['car_number']; ?></strong> </h3>
            </div>


            <table class="table table-bordered">
                <tbody>
                <tr>
                  <th>วันที่มาใช้บริการ</th>
                  <td><?php echo $row['service_date'] ?></td>
                </tr>

                <tr>
                  <th>ข้อมูลลูกค้า</th>
                  <td>
                      <strong>ชื่อลูกค้า: </strong><? echo $row['firstname'];?> <? echo $row['lastname'];?> <br>
                      <strong>เพศ: </strong><? echo $row['sex']; ?> <br>
                      <strong>ที่อยู่: </strong><? echo $row['address'];?> <br>
                      <strong>เบอร์โทร: </strong><? echo $row['tel'];?> <br>
                  </td>
                </tr>
                <tr>
                  <th>เลขทะเบียนรถ</th>
                  <td><?php echo $row['car_number']; ?></td>
                </tr>
                <tr>
                  <th>ประเภทรถ</th>
                  <td><?php echo $row['category_car_name']; ?></td>
                </tr>
                <tr>
                  <th>ยี่ห้อรถ</th>
                  <td><?php echo $row['car_brand']; ?></td>
                </tr>
                <tr>
                  <th>รถรุ่น</th>
                  <td><?php echo $row['car_model']; ?></td>
                </tr>
                <tr>
                  <th>เลขตัวถัง</th>
                  <td><?php echo $row['car_serial']; ?></td>
                </tr>
                <tr>
                  <th>ข้อมูลประกันภัย</th>
                  <td>
                      <strong>ชื่อบริษัทประกัน: </strong><? echo $row['insurance_name'];?> <br>
                      <strong>รูปแบบประกัน: </strong><? echo $row['level_name']; ?> <br>
                  </td>
                </tr>
                <tr>
                  <th>ค่าเบี้ยประกันภัย</th>
                  <td><?php echo number_format($row['price_premium']); ?> บาท</td>
                </tr>
                <tr>
                  <th>ค่าตรวจสภาพรถ</th>
                  <td><?php echo number_format($row['price_check_car']); ?> บาท</td>
                </tr>
                <tr>
                  <th>ค่าต่อทะเบียน</th>
                  <td><?php echo number_format($row['price_reg_renew']); ?> บาท</td>
                </tr>

                <tr>
                  <th>รวมค่าใช้จ่าย</th>
                  <td><strong><?php echo number_format($row['price_premium']+$row['price_check_car']+$row['price_reg_renew']); ?> บาท</strong></td>
                </tr>
                
                </tbody>
              </table>
              <!-- END show search by car number -->
              </div>


            <?php
                    }
                  }else{
                    echo 'ไม่พบข้อมูล';
                  }
                }
            ?>



        



      </div>

      <div class="col-md-1">
        <!-- Column วเว้นว่างเพื่อระยะห่าง่าง -->
      </div>

      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">

      </section>
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <section class="col-lg-5 connectedSortable">



      </section>



      





      <!-- right col -->
    </div>
    <!-- /.row (main row) -->

  </section>
  <!-- /.content -->
<!-- </div> -->
