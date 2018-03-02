  <!-- Content Header (Page header) -->
  <section class="content-header">

    <!-- <h1>
      Home
      <small>Control panel</small>
    </h1> -->
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
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">

      <div class="col-md-12">
        
      </div>

      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">

asdas
      </section>
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <section class="col-lg-5 connectedSortable">

asdasdasdas

      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->

  </section>
  <!-- /.content -->
<!-- </div> -->
