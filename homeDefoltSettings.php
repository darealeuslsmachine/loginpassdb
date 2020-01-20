<?php
include 'search.php';

if (isset($_SESSION["newsession"]) and ($_SESSION["newsession"] != 0)){
}
else{
    header("location: index.php");
}
if (isset($_POST['btnLogOut'])) {
    $value = 0;
    $_SESSION["newsession"] = $value;
}
//$removeEmployee = '<form method="post"><input type="button" class="btnRemove" name="removeEmployee" value="Remove Employee"/></form>';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css"></head>
<body>
<form class="" action="" method="post">
    <div class="containerSearch" id="containerSearchID">
        <input type="text" class="inputSearch" name="searchFIO" placeholder="Search:" value="">
        <button type="submit" class="btnSearch" name="btnSearch">GO</button>
        <input type="button" value="Log Out" class="btnLogOut" name="btnLogOut" onclick="location.href='index.php'"></input>
        <input type="button" value="HOME" class="btnHome" name="btnHome" onclick="location.href='home.php'"></input>
    </div>
</form>
</body>
</html>
