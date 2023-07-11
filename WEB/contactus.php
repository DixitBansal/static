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
    <title>contactus</title>
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container">
        <div class="row abt-cnt-margin">
            <div class="col-sm-8">
                <h2>LIVE SUPPORT</h2>
                <h4 style="color: rgb(66, 65, 65);">24 hours | 7 days a week | 365 days a year live technical support
                </h4>
                <p style="color: rgb(66, 65, 65); ;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum eius
                    dolor totam, quidem ex veritatis distinctio. Totam, ratione consectetur consequuntur doloribus illum
                    repudiandae molestiae tempore neque nobis pariatur incidunt architecto.
                    Expedita cupiditate quo porro voluptate! Tenetur dicta quaerat unde ad ratione molestiae, veritatis,
                    autem cumque iste porro itaque fugit facere possimus enim voluptate tempora sequi soluta eius
                    aliquid repudiandae inventore.</p>
            </div>
            <div class="col-sm-4"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqjjtk5I3wrMnwjG3y3GilSrccmm83wrnDAf-t4SPKJEbnaKAtoccJFPDMiNYCLI2gh9E&usqp=CAU"
                    alt="contactus_image"></div>
            <div class="row">
                <div class="col-sm-8">
                    <h2>CONTACT US</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="messege">Messege:</label>
                            <textarea class="form-control" id="messege" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary mt-2">Submit</button>
                        </div>

                    </form>
                </div>
                <div class="col-sm-4">
                    <h2>Company Information</h2>
                    <p style="color:rgb(66, 65, 65) ;">500 lorem ipsum Dolor sit,<br>22-23-3-5 sit
                        amit,lorem,<br>USA<br>phone:(00)-748474849<br>fax:(000)-00000<br>Follow on: <a
                            href="www.facebook.com" target="_blank" style="color: indigo; ">Facebook</a> <a
                            style="color: indigo;" href="www.twitter.com" target="_blank">Twitter</a></p>
                   <iframe width="350" height="430" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/8e4f1013-e44f-449a-86c6-7168ce20ad2c"></iframe>

                </div>
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