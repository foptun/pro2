
<section id="main-content">
   <section class="wrapper">
        <?php
            $name = $_POST['name'];
            $name = $conn->real_escape_string($name);
            

            $sql = "INSERT INTO tb_category_car(category_car_name) VALUES('$name') ";

            $query = $conn->query($sql);


            if ($query) {
                ?>
                <script>
                    alert('Insert Success...!');
                    window.location = 'index.php?menu=category-car-show';
                </script>
                <?php
            }else{
                //echo $sql;
                ?>
                <script>
                    alert('Insert Fails!!!');
                    //window.location = 'index.php?menu=promotion-addForm';
                </script>
                <?php
            }

        ?>
   </section>
</section>