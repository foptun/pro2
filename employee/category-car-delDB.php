<section class="content">

  <?php
  $sql = "DELETE FROM tb_category_car WHERE id ='" . $_REQUEST['id_category_car'] . "' ";

  $query = $conn->query($sql);
  if ($query) {

        ?>
        <script type="text/javascript">
           window.location = "index.php?menu=category-car-show";
        </script>
        <?php
  }
  ?>

</div>
