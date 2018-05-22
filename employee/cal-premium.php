<section class="content-header">
  <h1>
    คำนวนค่าเบี้ยประกันภัย
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  </ol>
</section>

<section class="content">
<div class="box box-primary">
  <div class="box-header with-border">
      <h3 class="box-title">คำนวนค่าเบี้ยประกันภัย</h3>
  </div>
  <form class="form-group" action="index.php?menu=cal-premium&calculate=yes" method="post">
    <div class="box-body">
      <br>
      เลือกบริษัทประกัน
      <select name="" class="form-control" id="listInsuranceCompany">
        <option value="0">- - -</option>
        <?php 
        $sql = "SELECT * FROM tb_insurance_company";
        $query = $conn->query($sql);
        while($row = $query->fetch_array()){
        ?>
        <option value="<? echo $row['id'];?>"><? echo $row['insurance_name'];?></option>
        <?php
        }
         ?>
      </select>
      <br>
      เลือกรูปแบบประกัน
      <select name="id_insurance_type" class="form-control" id="listInsuranceType" >
        <option value="0">- - -</option>
      </select>
      <br>
      <input class="btn btn-primary" type="submit" value="คำนวน"> 
    </div>
  </form>
  <!-- /.box-body -->
</div>




<?php
          if(isset($_GET['calculate'])){
            $id_insurance_type = $_POST['id_insurance_type'];
            $sql = "SELECT * FROM tb_insurance_type WHERE id = '$id_insurance_type' ";
            $query = $conn->query($sql);
            
            
            if($query->num_rows > 0){
              while($row = $query->fetch_array()){

          ?>
            <div class="box box-primary">
          
          <!-- show search by car number -->
              
            <div class="box-header with-border">
                <h3 class="box-title"> ค่าเบี้ยประกันภัย: <strong><?php echo number_format($row['price_premium']) ?></strong> บาท</h3>
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

<script type="text/javascript">
$(document).ready(function () {
    var selectType = $('#listInsuranceType');
    var selectCom = $('#listInsuranceCompany');
    selectCom.change(function(){
      var id_insurance_companyData = $(this).val();
      console.log(id_insurance_companyData);
      
      selectType.empty();
      
      $.ajax({
          url: "cal-premium-jsonData-insuranceType.php",
          data: ({ id_insurance_company: id_insurance_companyData }),
          dataType: "json",
        success: function(json){
          
          $.each(json, function(index, value) {
            var key = value.id;
            var value = 'รูปแบบประกัน - '+value.level_name;
            selectType.append($("<option></option>").attr("value",key).text(value)); 
          });

        }
      });
           
    });
});
</script>
