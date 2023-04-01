<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD HERE!</title>
    <style>

body{
    display : flex;
    align-items: center;
    justify-content : center;
    flex-direction : column;
}
#card{
    height:320px;
    width:300px;
    background-color: gray;
    border-radius:20px;
    box-shadow : 0px 0px 10px white;
    display:flex;
    align-items: center;
    justify-content:center;

}
#card #ol{
    color:white;
}
#card #ul{
    margin-top:20px;
    padding: 10px 30px;
    background-color:white;
    border-radius:20px;
}
#card input{
    color : white;
}

        </style>


</head>
<body>

<div>
    
            <h2>ENTER YOUR RESUME HERE!!</h2>

<!-- /* <BR>
<BR>
<BR> */ -->
  <DIV id ="card">
    <form action="process.php" method="post">
        <input id="ol" type="file" name="pp">
        <BR>
        <input id= "ul" type ="submit">UPLOAD NOW
</DIV>


</form>
</div>

</body>
</html>