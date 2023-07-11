<?php
    $showalert=FALSE;
    $showerror=FALSE;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include 'user_connection.php';
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $name=mysqli_real_escape_string($con,$_POST['name']);
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $contact=mysqli_real_escape_string($con,$_POST['contact']);
        $address=mysqli_real_escape_string($con,$_POST['address']);
        $city=mysqli_real_escape_string($con,$_POST['city']);
        $user_registration_query="INSERT INTO users(email,name,password,contact,address,city) values('$email','$name','$password','$contact','$address','$city')";
        $user_query="SELECT email FROM `users`WHERE email='$email' ";
        $user_query_result=mysqli_query($con,$user_query);
        $row=mysqli_num_rows($user_query_result);
        if($row==0){
            $data_submit=mysqli_query($con,$user_registration_query);
        }
            if($data_submit){
                $showalert=TRUE;
            }
            else{
                $showerror="Email already registered";
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

    <title>signup</title>
</head>

<body>
    <?php
    require 'navbar.php';
    ?>
    <?php
     if($showalert){
        echo '<div class="alert alert-success" role="alert">
        <strong>SUCCESS!!!</strong>Your account is now created and you can login
      </div>';
    }
    elseif($showerror){
        echo '<div class="alert alert-danger" role="alert">
            <strong>ERROR!!!</strong>Email already registered!!
          </div>';
    }
    else{
        echo "";
    }
    ?>
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-6"><img
                    src="https://www.alpha.gr/-/media/alphagr/images/retail/e-banking/myalpha-new/keyvisuals/05_en.png"
                    alt="this is an image"></div>
            <div class="col-6">
                <h2>CONTACT US</h2>
                <form  method="POST">
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control mt-3" id="name" placeholder="Name" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="email" class="form-control mt-3" id="email" placeholder="Email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="password" class="form-control mt-3" id="password" placeholder="Password" name="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="tel" class="form-control mt-3" id="contact" placeholder="Contact" name="contact" required pattern="\d{10}$">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control mt-3" id="city" placeholder="City" name="city" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control mt-3" id="address" placeholder="Address" name="address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 ">
                            <button type="submit" class="btn btn-primary mt-3">Sign Up</button>
                            <button type="reset" class="btn btn-secondary mt-3">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br>
<?php
include 'footer.php';
?>
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