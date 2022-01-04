<html>
    <head>
        <title>Student's information form</title>
    </head>
    
    <body bgcolor="powderblue">
        <form method='post' action='sis_reg.php'>
            <table border='1' width='500' align='center'>
                <tr>
                    <th bgcolor='lightgrey' colspan='5'>Student's Information form</th>
                </tr>
                <tr>
                    <td>Student's Name</td>
                    <td><input type='text' name='stu_name'> </td>
                </tr>
                <tr>
                    <td>B Number</td>
                    <td><input type='text' name='stu_b'> </td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td> 
                        <select name='stu_dob'>
                            <option value="null">Year</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                        </select>
                    </td>
                </tr>
                <tr align='center'>
                    <td colspan='5'><input type='submit' value='submit' name='submit'></td>
                </tr>
            </table>
        </form>
        
        <?php
            $con = mysqli_connect("localHost:3308", "root", "", "sis_fa2021");
            
            if(isset($_POST['submit'])){
                echo $student_name = $_POST['stu_name']; echo "<br>";
                echo $student_b = $_POST['stu_b']; echo "<br>";
                echo $student_dob = $_POST['stu_dob']; echo "<br>";
                
                $que = "INSERT INTO student(name, bnum, dob) VALUES('$student_name','$student_b','$student_dob')";
                
                if(mysqli_query($con, $que)){
                    echo 'data has successfully registered';
                    
                }//if query
            }//if(isset)
        
        
        ?>
        
        <br>
        <a href="sis_view.php">Records</a><br>
    </body>
</html>
