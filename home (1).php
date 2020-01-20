<?php
include 'homeDefoltSettings.php';
// <div class="containerHome">
//    <input type="button" class="btn2" name="addEmployee" OnClick="location.href='addemployee.php'" value="Add Employee"></input>
//</div>
//$db->execute("INSERT INTO `employeetable` SET `firstname`='', `lastname`='', `adress`='', `phoneNumbers`='', `post`='', `office`=''");
//$db->execute("INSERT INTO `employeetable` SET `firstname`='', `lastname`='', `adress`='', `phoneNumbers`='', `post`='', `office`=''");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css"></head>
<body>
<form class="" action="" method="post">
     <div class="containerHome">
            <input type="button" class="btn2" name="allEmployee" OnClick="location.href='allemployee.php'" value="Show All Workers"></input>
            <input type="button" class="btn2" name="addEmployee" OnClick="location.href='addemployee.php'" value="Add Employee"></input>
     </div>
</form>
</body>
</html>
