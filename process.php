<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$pp =$_POST["pp"];


    $conn = new mysqli('localhost','root','','tirthdata');

    if($conn->connect_error)
    {
        echo "connetion faild";
    }
    else{

        $stmt = $conn->prepare('insert into pdf(p)
        values(?)');
        $stmt->bind_param("s",$pp);
        $stmt->execute();
        echo "nice";
        $stmt->close();
        $conn->close();
        header('location:index.php');
    }


    ?>
</body>
</html>