<html>
    <head>
        <script>
        </script>
        <title>Admin Login Form</title>
    </head>
    <body bgcolor="powderblue">
        
        <form method='post' action="sis_log.php">
                <table border='1' width='500' align='center'>
                    <tr>
                        <th bgcolor='lightgrey' colspan='4'>Admin's Login Form</th>
                    </tr>
                    <tr>
                        <td>Admin Name:</td>
                        <td><input type='text' name='admin_id'> </td>
                    </tr>
                    <tr>
                        <td>Admin Password:</td>
                        <td><input type='password' name='admin_pw'> </td>
                    </tr>
                    <tr align='center'>
                        <td colspan='4'><input type='submit' value='Login' name='login'></td>
                    </tr>
                </table>
        </form>
        <?php
            $con = mysqli_connect("localHost:3308", "root", "", "sis_fa2021");
            
            if(isset($_POST['login'])){
                echo $admin_id = $_POST['admin_id']; echo "<br>";
                echo $admin_pw = $_POST['admin_pw']; echo "<br>";
                
                $que = "SELECT * from admin where id='$admin_id' AND pw='$admin_pw'";
                
                $result = mysqli_query($con, $que);
                
                if(mysqli_num_rows($result) == 1){
                    echo "<script>window.open('sis_view.php?login=logged in successfully!','_self')</script>";
                }//if query
                else{
                    echo "<script>alert('invalid input.. try again later!')</script>";
                }
            }//if(isset)
        
        
        ?>
    </body>
</html>
