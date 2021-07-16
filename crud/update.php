<?php 
  include 'connect.php';
    $id=$_GET['updateid'];
    $sql="select * from crud where id =$id";
// $result=mysqli_query($mysqli,$sql);
// $row=mysqli_fetch_array($result);
//     $name=$_row['name'];
//     $email=$_row['email'];
//     $mobile=$_row['mobile'];
//     $password=$_row['password'];
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];
        $sql="update crud set ID=$id,NAME=$name,EMAIL=$email,MOBILE=$mobile,PASSWORD=$password where id=$id";
        $result=mysqli_query($mysqli,$sql);
        if($result){
            echo "updated success";
                //('location:display.php');
        }else{
          die(mysqli_error($mysqli));
        }
      }
?>
<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>crud operations</title>
  </head>
  <body>
    <div class="container my-5" >
    <form method ="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder ="Enter your name" name ="name" 
    autocomplete="off"  value=<?php echo $name;?>>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder ="Enter your email" name ="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder ="Enter your Mobile Number" name ="mobile" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder ="Enter your Password" name ="password" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div> 
</body>
</html>