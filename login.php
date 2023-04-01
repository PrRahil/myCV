<html>

<head>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container log-in-container">
            <form action="loginauth.php" enctype="multipart/form-data" method="POST">
                <h1>Login</h1>
                <!-- <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
                </div> -->
                <!-- <span>or use your account</span> -->
                <input  type="number" placeholder="Enrollment number" name="enrollment" />
                <input type="password" placeholder="Password" name="password"  />
                <a href="#">Forgot your password?</a>
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>myCV</h1>
                    <p>Login now to make your CV.</P>
                </div>
            </div>
        </div>
    </div>
</body>

</html>