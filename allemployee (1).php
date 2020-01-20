<?php
include 'homeDefoltSettings.php';

for($i=0;$i<count($workers);$i++){
$buttonNameUpdate = 'btnUpdate'."$i";
if(isset($_POST[$buttonNameUpdate])){
    $emplArr = $workers[$i];
    $_SESSION["empUpdate"]=$i;
    echo "<script>window.location.href='updateemployee.php'</script>";
}
}

for($i=0;$i<count($workers);$i++){
$buttonName = 'btnDelete'."$i";
if(isset($_POST[$buttonName])){
    echo "<script>
    var cf=confirm();
    if(cf==false)
    { 
    break;
    };
    </script>";
    $emplArr = $workers[$i];
    $empId="$emplArr[id]";
    $deleteWorkers = $dbEmpl->query("DELETE FROM `employeetable` WHERE `id`='$empId'");//удаление строки из массива
    echo "<script>location.reload();</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script></head>
<body>
<form class="" action="" method="post">
    <div class="containerSearchResult"><?php
    $numberOfArrayElements = count($workers);
for ($i=0;$i<$numberOfArrayElements;$i++){
    $emplArr = $workers[$i];
    $emplInfo = "$emplArr[lastname] $emplArr[firstname], adress: $emplArr[adress], tel: $emplArr[phoneNumbers], post: $emplArr[post], office: $emplArr[office]";
    $buttonName = 'btnDelete'."$i";
    $buttonNameUpdate = 'btnUpdate'."$i";
    echo "<ul><li>$emplInfo<button type=submit class=btnUpdate name=$buttonNameUpdate>Update</button><button type=submit class=btnRemove name=$buttonName>Remove</button></li></ul><br /><br />";
}
    ?></div>
</form>
</body>
</html>