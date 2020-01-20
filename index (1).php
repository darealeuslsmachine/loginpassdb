<?php
include("classDB.php");//подключение класса баз данных
session_start();
$value = 0;
$_SESSION["newsession"]=$value;
//создание экземпляра класса
try{
    $db = new Database();
} catch(PDOException $e){
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}
$users = $db->query("SELECT * FROM `login`");//инициализация массива с данными о юзерах
if(isset($_POST['log']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username!="" && $password!="") {
        if(array_search($username, array_column($users, 'login'))===false){


            echo "<script>alert('Invalid login or password!')</script>";

        }
        else{
            $key = array_search($username, array_column($users, 'login'));
            if (array_search($password,$users[$key])===false){
                echo "<script>alert('Invalid login or password!')</script>";
            }
            else{
                session_start();
                $value = 1;
                $_SESSION["newsession"]=$value;
                header("location: home.php");
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css"></head>
<body>
<form class="" action="" method="post">
    <div class="containerLogin">
        <label for="" class="labelLogin">Login</label>
        <input type="text" name="username" placeholder="Username" value="">
        <input type="password" name="password" placeholder="Password" value="">
        <button type="submit" class="btn" name="log">GO</button>
    </div>
</form>
</body>
</html>

