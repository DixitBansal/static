
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=TRUE){
    header("location:login.php");
    exit;
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
        <?php echo "WELCOME";?>
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
include 'navbar.php';
?>
    <div class="container-fluid cnt-margin">
        <div class="card-deck ">
          <div class="card">
            <img class="card-img-top"
              src="https://www.skechers.in/pub/media/catalog/product/cache/e0bd5efef78fc56dd78ccf66b83d6a45/5/5/55100_char_1.jpg"
              alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title  text-center">MENS GO RUN FAST</h5>
              <p class="text-muted text-center card-text">MRP RS 4999/-<br><small>(incl. of all taxes)</small></p>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Add to cart</button>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top"
              src="https://www.skechers.in/pub/media/catalog/product/cache/e0bd5efef78fc56dd78ccf66b83d6a45/5/5/55100_bkw_1.jpg"
              alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title  text-center">MENS GO RUN FAST</h5>
              <p class="text-muted text-center card-text">MRP RS 3999/-<br><small>(incl. of all taxes)</small></p>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Add to cart</button>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top"
              src="https://www.skechers.in/pub/media/catalog/product/cache/e0bd5efef78fc56dd78ccf66b83d6a45/5/5/55100_bkbl_1.jpg"
              alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title  text-center">MENS GO RUN FAST</h5>
              <p class="text-muted text-center card-text">MRP RS 2999/-<br><small>(incl. of all taxes)</small></p>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Add to cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="container cnt-margin">
        <div class="card-deck ">
          <div class="card">
            <img class="card-img-top"
              src="https://www.skechers.in/pub/media/catalog/product/cache/e0bd5efef78fc56dd78ccf66b83d6a45/5/5/55103_nvor_2.jpg"
              alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title  text-center">MENS GO RUN FAST-VALOR</h5>
              <p class="text-muted text-center card-text">MRP RS 5599/-<br><small>(incl. of all taxes)</small></p>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Add to cart</button>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top"
              src="https://www.skechers.in/pub/media/catalog/product/cache/e0bd5efef78fc56dd78ccf66b83d6a45/2/3/232064_nvgy_1.jpg"
              alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title  text-center">MENS EQUALIZER 4.0</h5>
              <p class="text-muted text-center card-text">MRP RS 3299/-<br><small>(incl. of all taxes)</small></p>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Add to cart</button>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top"
              src="https://www.skechers.in/pub/media/catalog/product/cache/e0bd5efef78fc56dd78ccf66b83d6a45/2/3/232064_bbk_1.jpg"
              alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title  text-center">MENS EQUALIZER 4.0</h5>
              <p class="text-muted text-center card-text">MRP RS 2999/-<br><small>(incl. of all taxes)</small></p>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Add to cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="container cnt-margin">
        <div class="card-deck ">
          <div class="card">
            <img class="card-img-top"
              src="https://www.skechers.in/pub/media/catalog/product/cache/e0bd5efef78fc56dd78ccf66b83d6a45/5/5/55504_khk_2.jpg"
              alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title  text-center">MENS EQUALIZER 4.0 REVIVIFY</h5>
              <p class="text-muted text-center card-text">MRP RS 3999/-<br><small>(incl. of all taxes)</small></p>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Add to cart</button>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top"
              src="https://www.skechers.in/pub/media/catalog/product/cache/e0bd5efef78fc56dd78ccf66b83d6a45/2/4/243041_nvy.jpg"
              alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title  text-center">MENS GO WALK 5 MERRITT</h5>
              <p class="text-muted text-center card-text">MRP RS 2999/-<br><small>(incl. of all taxes)</small></p>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Add to cart</button>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top"
              src="https://www.skechers.in/pub/media/catalog/product/cache/e0bd5efef78fc56dd78ccf66b83d6a45/2/3/237199_bbk.jpg"
              alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title  text-center">MENS SWIFTERS</h5>
              <p class="text-muted text-center card-text">MRP RS 3999/-<br><small>(incl. of all taxes)</small></p>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Add to cart</button>
            </div>
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