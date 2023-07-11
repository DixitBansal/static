<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==TRUE){
    $loggedin=TRUE;
    $page="welcome.php";
}
else{
    $loggedin=FALSE;
    $page="index.php";
}
echo '
<script src="https://kit.fontawesome.com/8a2471f937.js" crossorigin="anonymous"></script>';
include 'loginmodal.php';
echo '

    <div class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark nav-color">
        <div class="container-fluid">
            <a class="navbar-brand" href=" '; echo $page; echo' ">
                <img src="../img/2mfPiy4.png" width="35" height="35" class="d-inline-block align-top" alt=""><i style="color: #b3bfd1;">VARIETY STORE</i></a>
            <ul class="nav justify-content-end">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav-margin" id="navbarSupportedContent">';
                if($loggedin==FALSE){ echo '
                    <li class="nav-item">
                        <a class="nav-link nav-col" href="signup.php"><i class="fas fa-user">Sign Up</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-col" href="login.php" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-sign-in-alt"> Login</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-col" href="aboutus.php"><i class="fas fa-bars"> About Us</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-col" href="contactus.php"><i class="fas fa-mobile-alt"> Contact Us</i></a>
                    </li>';}
                else{ echo '
                    <li class="nav-item">
                    <a class="nav-link nav-col" href="cart.php"><i class="fas fa-shopping-cart"> Cart</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-col" href="setting.php"><i class="fas fa-user-cog"> Setting</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-col" href="logout.php"><i class="fas fa-sign-out-alt">
                            Logout</i></a>
                </li>
                    ';}
            echo '
                </div>
            </ul>
        </div>
    </nav>
</div>

';

                
?>