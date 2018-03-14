
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    จัดการลูกค้า
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->

  <!-- Main row -->
  <div class="row">

    <section class="content">
      <div class="row">
        <div class="col-xs-12">

<!-- ccccc -->





<div class="box">

  <div class="box-header">
    <a href="index.php?menu=customer-addForm" class="btn btn-info">เพิ่มลูกค้า</a>
    <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>วันที่มาใช้บริการ</th>
        <th>เลขบัตรประชาชน</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>ที่อยู่</th>
        <th>เบอร์โทร</th>
        <th>เลขทะเบียนรถ</th>
        <th>Edit</th>
        <th>Del</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM tb_customer";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['id_card_number']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['tel']; ?></td>
        <td><?php echo $row['car_number']; ?></td>
        <td>
          <a href="index.php?menu=customer-editForm&id_customer=<?php echo $row['id'];?>" class="btn btn-primary"> Edit </a>
        </td>
        <td>
          <a href="index.php?menu=customer-delDB&id_customer=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Confirm Delete!');"> Del </a>
        </td>
      </tr>
      <?php
    }
      ?>
      </tbody>
      <tfoot>
      <tr>
        <th>No.</th>
        <th>วันที่มาใช้บริการ</th>
        <th>เลขบัตรประชาชน</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>ที่อยู่</th>
        <th>เบอร์โทร</th>
        <th>เลขทะเบียนรถ</th>
        <th>Edit</th>
        <th>Del</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->






 <!-- ccc -->



        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

  </div>
  <!-- /.row (main row) -->

</section>
<!-- /.content -->
<!-- </div> -->