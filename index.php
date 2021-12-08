<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    align-items:center;
    background-color:rgb(131, 2, 252);
    justify-content:center;
}
form{
    background-color:azure;
    box-sizing: border-box;
    max-width: 350px;
    min-height: 40vh;
    padding: 2rem;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0);
}
form input[type="text"],
[type="password"]{
    margin: 5px;
    padding: auto;
    height: 15px;

}

</style>
</head>
<body>
<form action="login.php" method="post">
    <input type="text" name="login"><br>
    <input type="password" name="senha"><br>
    <input type="submit" name="acao" value="enviar">
</form>

</body>
</html>