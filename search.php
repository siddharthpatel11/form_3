<?php

    $con =mysqli_connect("localhost","root","","siddharth");

    if(isset($_POST['submit']))
    {
        $id=$_POST['id'];
        //$addrese=$_POST['address'];


        $search="SELECT * FROM `form` WHERE `id`='$id'";


        $result=mysqli_query($con,$search);

        $row=mysqli_fetch_assoc($result);
        $tru=mysqli_num_rows($result);

        if($tru>0)
        {
            $name=$row['name'];
            $email=$row['email'];
            $password=$row['password'];
            $contact=$row['contact'];
        }
        else
        {
            echo"not found";
        }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" align="center">
                <input type="text" name="id">
                  <input type="submit" name="submit">
    </form>
    <table border="1" align="center">
   
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>CONTACT</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        <tr>        <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['contact'];?></td>
                    <td><a href="edit.php?id=<?php echo $row['id']?>">EDIT</a>
                    <td><a href="delete.php?id=<?php echo $row['id']?>">DELETE</a>
                </tr>
    </table>
</body>
</html>
