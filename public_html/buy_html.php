
<?php
    require_once '../resources/config.php';
?>

<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Buy</title>

    <!-- Add BootStrap -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <!-- Add CSS -->

    <!-- used to be "style-2.css" -->
    <link rel="stylesheet" href="css/style.css">

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
                    <li><a href="signup_html.php">Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->

    <div class="content-box-md" id="buy-content-box">
        <div class="container-fluid">
            <div class="row" id="main-content" style="padding-bottom: 15px;">

                <div class="col-md-12" style="padding: 0 0 19px 231px;">
                    <h4 id="buy-instruction" style="color: rgb(105, 196, 243); font-weight: 600">Select Which Items You Want to Buy:</h4>
                </div>

                <div class="col-md-9">
                    <div class="row" id="db-movies">
                            <?php
                                $query = "SELECT * FROM items_to_buy;";
                                $send_query = mysqli_query($connection, $query);

                                if(!$send_query) {
                                    die("QUERY FAILED" . mysqli_error($connection));
                                }

                                while($row = mysqli_fetch_array($send_query)) {
                                    echo "
                                    <button id='db-movies-btn' style='width: 301px; height: 70px;'><div class='col-md-12'><p class='list-group-item' id='btn-para' 
                                    style='font-size: 12px;'>
                                    {$row['title']}<br></p></div></button>";
                                }
                            ?>
                    </div>

                </div>

                <div class="col-md-3">

                    <div id="totoro-img">
                        <img src="img/ghibli/totoro-right-black.png" alt="Totoro Right" class="img-responsive img-fluid">
                    </div>

                </div>

            </div>

            <br><br><br><br><br><br>

        </div>

    </div>

    <!-- Footer -->
    <footer class="text-center" style="padding: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; 2020 All Rights Reserved by <span>Studio Ghibli Inc.</span></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Ends -->

</body>

</html>

