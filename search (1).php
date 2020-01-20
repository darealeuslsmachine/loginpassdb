<?php


    include("classDB.php");
    try{
        $dbEmpl = new Database();
    } catch(PDOException $e){
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }
    session_start();



    $workers = $dbEmpl->query("SELECT * FROM `employeetable`");//получение масиива из бд
    if(isset($_POST['btnSearch'])) {//если нажата кнопка
        $searchStr = $_POST['searchFIO'];//получение строки из инпута
        $word = explode(" ", $searchStr);//разделение строки на 2
        $word[0]=trim($word[0]);
        @$word[1]=trim($word[1]);//+
        $array1 = array_column($workers, 'firstname');
        $array2 = array_column($workers, 'lastname');        //получение ключа массива, в котором найдено совпадение
        $_SESSION["keys"] = 0;

        //поиск работников через чтолбец firstname(если первым было введено Имя)
        if (array_search($word[0], $array1) !== false) {
            $key = array_search($word[0], $array1);
            if (array_search($word[1], $array2) !== false) {
                $_SESSION["arrKey"] = 0;
                $_SESSION["keys"] = $key;//+
                header("location: searchResult.php");
            }
        }

        //поиск работников через чтолбец lasttname(если первым была введена Фамилия)
        if (array_search($word[0], $array2) !== false) {
            $key = array_search($word[0], $array2);
            if (array_search($word[1], $array1) !== false) {
                $_SESSION["arrKey"] = 0;
                $_SESSION["keys"] = $key;//+
                header("location: searchResult.php");
            }
        }

        //поиск по слову
        $searchStr = trim($searchStr); //+
        $numberOfArrayElements = count($workers);//+
        $arrKeys = array();
        for ($i = 0; $i < $numberOfArrayElements; $i++) {
            if (array_search($searchStr, $workers[$i]) !== false) {
                array_push($arrKeys, "$i");//+
            }
        }
        if (empty($arrKeys)){
            echo "<script>alert('The employee is not found!')</script>";
        }
        else{
            $_SESSION["arrKey"] = $arrKeys;
            header("location: searchResult.php");
        }
    }