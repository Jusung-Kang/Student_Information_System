<html>
    <head>
        <title>Student Information Records</title>
    </head>
    
    <body bgcolor="powderblue">
        
            <table align='center' width='1000' border='1'>
                <th colspan='20' align='center' bgcolor='lightgrey'>
                    Student's Information Records
                </th>
                <tr align='center'>
                    <td>Sequence</td>
                    <td>Student Name</td>
                    <td>B Number</td>
                    <td>Student Date of Birth</td>
                    <td>Delete</td>
                    <td>Edit</td>
                </tr>
                
                <?php
                    $con = mysqli_connect("localhost:3308", "root", "", "sis_fa2021");
                    $que = "SELECT * FROM student";
                    $run = mysqli_query($con, $que);
                    
                    $i=1;
                    while($row = mysqli_fetch_array($run)){
                        $stu_id = $row['seq'];
                        $stu_name = $row['name'];
                        $stu_b = $row['bnum'];
                        $stu_dob = $row['dob'];
                ?>
                <tr>
                    <td><?php echo $i; $i++; ?></td>          
                    <td><?php echo $stu_name; ?></td>
                    <td><?php echo $stu_b; ?></td>
                    <td><?php echo $stu_dob; ?></td>
                    <td><a href="sis_del.php?del=<?php echo $stu_id;?>">delete</a></td>
                    <td><a href="sis_edit.php?update=<?php echo $stu_id;?>">Edit</a></td>
                </tr>
                <?php
                    }//while
                ?>
            </table>
        <?php echo @$_GET['deleted']; ?>
        <?php echo @$_GET['login']; ?>
        <?php echo @$_GET['updated']; ?>
        <br>
        <br>
        <a href="sis_reg.php">registration</a><br>
        <a href="sis_logout.php">logout</a><br>
        
        

    </body>
</html>