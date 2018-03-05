<section class="content-header">
  <h1>
    เพิ่มประเภทรถ
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  </ol>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">เพิ่มประเภทรถ</h3>
  </div>
  <form class="form-group" action="index.php?menu=category-car-addDB" method="post" enctype="multipart/form-data">
    <div class="box-body">
      <br>
      ชื่อประเภทรถ
      <input class="form-control" type="text" name="name" placeholder="ชื่อประเภทรถ">
      <br>
      <input class="btn btn-success" type="submit" value="Add"> 
      <a href="#" onclick="window.history.back();" class="btn btn-default">Cancel</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
