<?php

include 'homeDefoltSettings.php';

//проверка сессии поиска по фамилии и имени
if ($_SESSION["keys"] != 0) {
    $emplArr = $workers[$_SESSION["keys"]];
    $emplInfo = "$emplArr[lastname] $emplArr[firstname], adress: $emplArr[adress], tel: $emplArr[phoneNumbers], post: $emplArr[post], office: $emplArr[office]";
    echo "<ul>
             <li>$emplInfo</li>
          </ul><br /><br />";
}

//проверка сессии поиска по слову

if ($_SESSION["arrKey"] != 0) {
    $keyArray = $_SESSION["arrKey"];//получение массива ключей из сессии
    for ($j = 0; $j < count($keyArray); $j++) {
        for ($i = 0; $i < count($workers); $i++) {
            if ($i == $keyArray[$j]) {
                $emplArr = $workers[$keyArray[$j]];
                $emplInfo = "$emplArr[lastname] $emplArr[firstname], adress: $emplArr[adress], tel: $emplArr[phoneNumbers], post: $emplArr[post], office: $emplArr[office]";
                $emplArr = $emplInfo;
                echo "<ul>
             <li>$emplInfo</li>
          </ul><br /><br />";
            }
        }
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
    <div class="containerSearchResult">
    </div>
</form>
</body>
</html>