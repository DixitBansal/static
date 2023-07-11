<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=TRUE){
    header("location:login.php");
    exit;
}
?>
<?php
    $showalert=FALSE;
    $showpasserror=FALSE;
    $oldpasserror="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include 'user_connection.php';
        $oldpass=mysqli_real_escape_string($con,$_POST['oldpass']);
        $useremail=$_SESSION['useremail'];
        $newpass=mysqli_real_escape_string($con,$_POST['newpass']);
        $renewpass=mysqli_real_escape_string($con,$_POST['renewpass']);
        if($oldpass==$_SESSION['password'] && $newpass==$renewpass){
            $showalert=TRUE;
            $updatequery="UPDATE `users` SET `password`='$newpass' WHERE email='$useremail' ";
            $updatequery_result=mysqli_query($con,$updatequery);
        }
        elseif($oldpass != $_SESSION['password'] || $newpass != $renewpass ){
            $showpasserror=TRUE;
        }
        else{
            $oldpasserror="Create a new password that is not your old password!!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8a2471f937.js" crossorigin="anonymous"></script>

    <title>
        Setting
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include 'navbar.php';
?>
    <?php
     if($showalert){
        echo '<div class="alert alert-success" role="alert">
        <strong>SUCCESS!!!</strong>Your password has been changed!
      </div>';
    }
    elseif($showpasserror){
        echo '<div class="alert alert-danger" role="alert">
            <strong>ERROR!!!</strong>Password do not match!!
          </div>';
    }
    else{
        echo $oldpasserror;
    }
    ?>
    <div class="cont container-fluid">
    <div class="card text-white login-panel" style="max-width: 25rem; margin-top: 200px;">
        <div class="card-header"><h3>Change Password</h3></div>
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                  <input type="password" class="form-control" id="oldpass" name="oldpass" placeholder="Old Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="newpass" name="newpass" placeholder="New Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="renewpass" name="renewpass" placeholder="Re-type New Password">
                </div>
                <button type="submit" class="btn btn-success mt-3">Change</button>
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