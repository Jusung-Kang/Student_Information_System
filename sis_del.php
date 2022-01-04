<html>
    <head>
        <title></title>
    </head>
    <body>
        
        
        <?php
            $con = mysqli_connect("localhost:3308", "root", "", "sis_fa2021");
            $del_rec = $_GET['del'];
            $que = "DELETE from student where seq='$del_rec'";
            if(mysqli_query($con, $que)){
                echo "<script>window.open('sis_view.php?deleted=data has been successfully deleted', '_self') </script>";
                
            }
        ?>
    </body>
</html>

