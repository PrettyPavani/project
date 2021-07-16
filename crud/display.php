<?php include'connect.php' ;?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>crud</title>
</head>
<body>
    <div class="container ">
        <button class="btn btn-primary my-5 "><a href ="user.php" class="text-light">Add user</a>    
    </button>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">S.no</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Password</th>
        <th scope="col">Operation</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $sql="select * from crud";
        $result=$mysqli->query($sql);
        if($result){ 
            $row = mysqli_fetch_assoc($result);
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['ID'];
                $name=$row['NAME'];
                $email=$row['EMAIL'];
                $mobile=$row['MOBILE'];
                $password=$row['PASSWORD'];
                echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$password.'</td>
                    <td>
                    <button class="btn btn-primary" ><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                    </td>
                </tr>';
            }        
        }
        ?>        
    </tbody>
    </table>
    </div>    
</body>
</html>