
<?php
require_once '../resources/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

<!-- Header-->
<header class="fixed-top">
    <div class="container-fluid">
        <img src="img/ghibli/ghibli-logo-white.png" alt="Logo" class="logo img-fluid" id="header-logo-img">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login_html.php">Log In</a></li>
                <li><a href="buy_html.php">Buy</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- Header Ends -->


<section id="signup">
    <div class="content-box-lg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Wrapper -->
                    <div id="signup-entry">
                        <h1 class="text-center" id="signup-text"><br><br><br>Sign Up</h1>

                        <div class="col-md-12" id="signup-mid">
                            <form class="" action="" method="post">

                                <?php

                                $result_temp = sign_up($connection);

                                if($result_temp == -1){
                                    echo "<h6>It looks like that username is already taken. Try another!</h6>";
                                } else if ($result_temp == 1) {
                                    //Successfully signed up
                                    echo "<h6>Congrats! You've successfully opened up your account!</h6>";
                                } else if ($result_temp == 10) {
                                    echo "<h6>Usernames need to be longer than 3 characters, and there should be no spaces anywhere.</h6>";
                                }
                                ?>

                                <div class="form-group text-center"><label for="user_name">
                                        Username<input type="text" name="user_name" class="form-control"></label>
                                </div>

                                <div class="form-group text-center"><label for="user_pwd">
                                        Password<input type="text" name="user_pwd" class="form-control"></label>
                                </div>

                                <!-- Button -->
                                <div class="form-group text-center">
                                    <input type="submit" name="submit" class="btn btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<h6>Already have an account? Login in <a href="login_html.php">Here.</a></h6>

<!-- Footer -->
<footer class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; 2020 All Rights Reserved by <span>Studio Ghibli Inc.</span></p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Ends -->



<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap/bootstrap.min.js"></script>

<script src="js/script.js"></script>

</body>

</html>
