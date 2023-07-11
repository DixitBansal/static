<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==TRUE){
    $loggedin=TRUE;
}
else{
    $loggedin=FALSE;
}
?>
<?php
    $showalert=FALSE;
    $showerror=FALSE;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include 'user_connection.php';
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $username_query="SELECT name FROM `users` WHERE email='$email' AND password='$password' ";
        $username=mysqli_query($con,$username_query);
        $user_login="SELECT email,password FROM `users`WHERE email='$email' AND password='$password' ";
        $user_login_result=mysqli_query($con,$user_login);
        $row=mysqli_num_rows($user_login_result);
        if($row==1){
            $login=TRUE;
            session_start();
            $_SESSION['loggedin']=TRUE;
            $_SESSION['useremail']=$email;
            $_SESSION['password']=$password;
            header("location: welcome.php");
        }
        else{
            $showerror="invalid credentials";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Login</title>
</head>

<body style="background: url('https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940') no-repeat;width: 100%;height:100%;">
    <?php
    require 'navbar.php';
    ?>
    <br><br><br>
    <?php
    if($showerror){
        echo '<div class="alert alert-danger" role="alert">
            <strong>ERROR!!!</strong> invalid credentials!!
          </div>';
    }
    else{
        echo "";
    }
    ?>
    
    <br><br><br>
<div class="cont container-fluid">
    <div class="card text-white login-panel" style="max-width: 25rem;">
        <div class="card-header"><h3>Login</h3></div>
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="Password">Password</label>
                  <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-success mt-3">Login</button>
              </form>
        </div>
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
</body>

</html>