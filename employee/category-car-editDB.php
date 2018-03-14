
<section id="main-content">
   <section class="wrapper">
        <?php
                $name = $_POST['name'];
                $id_category_car = $_POST['id_category_car'];

                $sql = "UPDATE tb_category_car SET category_car_name='$name' WHERE id = '$id_category_car' ";

                $query = $conn->query($sql);


                if ($query) {
                    ?>
                    <script>
                        alert('Edit Success...!');
                        window.location = 'index.php?menu=category-car-show';
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert('Edit Fails!!!');
                        window.history.back();
                    </script>
                    <?php
                }
        ?>
   </section>
</section>