<?php
$connection = mysqli_connect('localhost','root');

set_error_handler(function(int $errno, string $errstr) {
    if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
        return false;
    } else {
        return true;
    }
}, E_WARNING);

if($connection){
    echo "";
}
else{
    echo "Connecting is not established";
}

mysqli_select_db($connection,'authentication');

$enrollment = $_POST['enrollment'];
$pass = $_POST['password'];
$conpass = $_POST['confirm_password'];

$data = "INSERT INTO credentials (ENROLL, PASSWD, CONPASS) VALUES ('$enrollment','$pass','$conpass')";

mysqli_query($connection, $data);

?>

<html>

<head>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign Up</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container log-in-container">
            <form action="signup.php" method="post">
                <h1>Sign Up</h1>
                <!-- <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
                </div> -->
                <!-- <span>or use your account</span> -->
                <input type="number" placeholder="Enrollment number" name="enrollment" />
                <input type="password" placeholder="Password" name="password" />
                <input type="password" placeholder="Confirm Password" name="confirm_password" />

                <!-- <a href="#">Forgot your password?</a> -->
                <button>Sign Up</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>myCV</h1>
                    <p>Make your account now.</P>
                </div>
            </div>
        </div>
    </div>
</body>

</html>