<?php
include 'homeDefoltSettings.php';

if(isset($_POST['btnStartAddEmpl']))
{
    $firstName = $_POST['addFirstName'];
    $lastName = $_POST['addLastName'];
    $adress = $_POST['addAdress'];
    $phoneNumbers = $_POST['addPhoneNumbers'];
    $post = $_POST['addPost'];
    $office = $_POST['addOffice'];
    $dbEmpl->execute("INSERT INTO `employeetable` SET `firstname`='$firstName', `lastname`='$lastName', `adress`='$adress', `phoneNumbers`='$phoneNumbers', `post`='$post', `office`='$office'");
    echo "<script>alert('Employee successfully added!')</script>";
}
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
        <input type="text" class="addEmloyee" name="addFirstName" placeholder="First Name" value="">
        <input type="text" class="addEmloyee" name="addLastName" placeholder="Last Name" value="">
        <input type="text" class="addEmloyee" name="addAdress" placeholder="Adress" value="">
        <input type="text" class="addEmloyee" name="addPhoneNumbers" placeholder="Phone Numbers" value="">
        <input type="text" class="addEmloyee" name="addPost" placeholder="Post" value="">
        <input type="text" class="addEmloyee" name="addOffice" placeholder="Office" value="">
        <br />
        <button type="submit" class="btnStartAddEmpl" name="btnStartAddEmpl">ADD</button>
    </div>
</form>
</body>
</html>
