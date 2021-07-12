
<?php

//helper functions
function redirect($location) {
    return header("Location: $location ");
}

//connect to the database
function query($sql) {
    global $connection;
    return mysqli_query($connection, $sql);
}

//confirm the result
function confirm($result) {
    global $connection;
    if(!$result) {
        die("QUERY FAILED " . mysqli_error($connection));
    }
}

//will help escape db statements, in order to prevent SQL injections
function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}


//helper functions - END


function login_user($conn) {

    if(isset($_POST['submit'])) {

        //protected against SQL injections
        $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $user_pwd = mysqli_real_escape_string($conn, $_POST['user_pwd']);

        $query = query("SELECT * FROM users WHERE user_name = '$user_name' AND user_pwd = '$user_pwd'");
        confirm($query);

        //return the number of rows
        if(mysqli_num_rows($query) == 0 ) {
            //WRONG
            return -1;
        } else {
            //RIGHT
            //Change user_logged_in to 1
            $sql = "UPDATE users SET user_logged_in = 1 WHERE user_name = '$user_name';";
            $query = query($sql);
            confirm($query);
        }
    }
}

function sign_up($conn){

    if(isset($_POST['submit'])) {

        //protected against SQL injections
        $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $user_pwd = mysqli_real_escape_string($conn, $_POST['user_pwd']);

        //must be bigger than 3, and no spaces allowed in the user name or password
        if(strlen($user_name) > 3 && !strpos($user_name, ' ') && !strpos($user_pwd, ' ')) {

            //check if the username is taken
            $query = query("SELECT * FROM users WHERE user_name = '$user_name'");
            confirm($query);

            if(mysqli_num_rows($query) == 0) {
                //username is not taken, add to db
                $sql = "INSERT INTO users (user_name, user_pwd, user_logged_in, user_netflix, user_hbo_max, user_movies)
                VALUES ('$user_name', '$user_pwd', '0', '0', '0', '0')";

                $query = query($sql);
                confirm($query);
                return 1;

            } else {
                //username is taken
                return -1;
            }

        } else if (!(strlen($user_name) > 3 && !strpos($user_name, ' ') && !strpos($user_pwd, ' ')) ){
            return 10;
        }


    }

}


?>