<?php
include 'homeDefoltSettings.php';

$emplArr = $workers[$_SESSION["empUpdate"]];

$emplFirstName = "$emplArr[firstname]";
$emplLastName = "$emplArr[lastname]";
$emplAdress = "$emplArr[adress]";
$emplPhoneNumbers = "$emplArr[phoneNumbers]";
$emplPost = "$emplArr[post]";
$emplOffice = "$emplArr[office]";

if(isset($_POST['btnStartUpdateEmpl'])){
    $firstName = $_POST['addFirstName'];
    $lastName = $_POST['addLastName'];
    $adress = $_POST['addAdress'];
    $phoneNumbers = $_POST['addPhoneNumbers'];
    $post = $_POST['addPost'];
    $office = $_POST['addOffice'];
    
    $dbEmpl->execute("UPDATE `employeetable` SET `firstname`='$firstName', `lastname`=' $lastName', `adress`='$adress', `phoneNumbers`='$phoneNumbers', `post`='$post', `office`='$office' WHERE `id` = '$emplArr[id]'");
    
    echo "<script>alert('Employee successfully update!')</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
<form class="" action="" method="post">
    <div class="containerHome">
        <input type="text" class="addEmloyee" name="addFirstName" placeholder="First Name" value="<?php echo $emplFirstName; ?>">
        <input type="text" class="addEmloyee" name="addLastName" placeholder="Last Name" value="<?php echo $emplLastName; ?>">
        <input type="text" class="addEmloyee" name="addAdress" placeholder="Adress" value="<?php echo $emplAdress; ?>">
        <input type="text" class="addEmloyee" name="addPhoneNumbers" placeholder="Phone Numbers" value="<?php echo $emplPhoneNumbers; ?>">
        <input type="text" class="addEmloyee" name="addPost" placeholder="Post" value="<?php echo $emplPost; ?>">
        <input type="text" class="addEmloyee" name="addOffice" placeholder="Office" value="<?php echo $emplOffice; ?>">
        <br />
        <button type="submit" class="btnStartAddEmpl" name="btnStartUpdateEmpl">UPDATE</button>
    </div>
</form>
</body>
</html>