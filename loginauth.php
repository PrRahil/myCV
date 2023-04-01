<?php
    $connection = mysqli_connect('localhost','root', '', 'authentication');
    if($connection){
        echo "Connecting is established";
    }
    else{
        echo "Connecting is not established";
    }

    mysqli_select_db($connection, 'authentication');
    $enrollment = $_POST['enrollment'];
    $password = $_POST['password'];

    $query = "SELECT * FROM credentials WHERE ENROLL = '$enrollment' AND PASSWD = '$password'";
    $results = mysqli_query($connection, $query);
    $_SESSION['ENROLL'] = $enrollment;
    $_SESSION['success'] = "You are logged in successfully";
    echo "Your credentials";

?>