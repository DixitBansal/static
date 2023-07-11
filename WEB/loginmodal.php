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
            $showerror=TRUE;
        }
    }
?>




<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login to our website</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST">
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We will never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-success mt-1">Login</button>

    </form>
      </div>
    </div>
  </div>
</div>
<br><br>
<?php if($showerror){
        echo 
        '<div class="alert alert-danger mt-2" role="alert">
        <strong>ERROR!!!</strong> invalid credentials!!
      </div>';
      }
      ?>
