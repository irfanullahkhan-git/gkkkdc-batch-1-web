<html>
    <head>
        <style>
            h1{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php
            $college_name = "Govt Khushal College";
            $address = "Akora Khattak";
            $district = "Nowshera";
            $total_blocks = 3;
            $total_teachers = 20;
            $is_cafe_available = false;
            $transport_available = true;
            $total_area = 16005.365;        
        ?>
        <h1>Welcome to <?php echo $college_name?></h1>
        <h2>Address: <?php echo $address." - ".$district ?></h2>
        <h3>Total Blocks: <?php echo $total_blocks?></h3>
        <h3>Total Area: <?php echo $total_area?> Sqft</h3>
        <h3>Total Teachers: <?php echo $total_teachers?></h3>

        <?php if($is_cafe_available){?>
            <h3>Cafe Avaialable</h3>
        <?php }?>
        
        <?php if($transport_available):?>
            <h3>Transport Facility is Avaialable</h3>
        <?php endif;?>
        <hr>
        <hr>
        <ul>
            <li><a href="/college/admission_form.php" >Apply for Admission</a></li>
        </ul>
        
    <script>
        alert("Welcome Page");
    </script>
    </body>
</html>