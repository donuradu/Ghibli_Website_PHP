
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

    <title>Login</title>

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
                <li><a href="signup_html.php">Sign Up</a></li>
                <li><a href="buy_html.php">Buy</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- Header Ends -->


<section id="login">
    <div class="content-box-lg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Wrapper -->
    
                    <div id="login-entry">
                        
                        <h1 class="text-center" id="login-text"><br><br><br>Log In</h1>

                        <!-- PHP POST method, transfers information via the HTTP header -->
                        <div class="col-md-12" id="login-mid">
                            <form class="" action="" method="POST" id ="login-form">

                                <!-- Could not connect to the database -->
                                <?php
                                if(login_user($connection) == -1){
                                    echo "<h6>It looks like something went wrong. Try again!</h6>";
                                }
                                ?>

                                <div class="form-group text-center"><label for="user_name">
                                        Username<input type="text" name="user_name" class="form-control"></label>
                                </div>

                                <div class="form-group text-center"><label for="user_pwd">
                                        Password<input type="text" name="user_pwd" class="form-control"></label>
                                </div>

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


<h6>Don't have an account? No problem! Sign up <a href="signup_html.php">Here.</a></h6>


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
