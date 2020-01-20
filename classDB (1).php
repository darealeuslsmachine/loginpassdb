<?php

class Database{
    private $link;

    public function __construct() //конструктор срабатывает при создании класса
    {
        $this->connect();
        //echo "zbs";
    }
    private function connect() //устанавливает соединение с бд
    {
        $config = require_once 'config.php';

        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'].';';
        //$dsn = "mysql:host=localhost; dbname=bank; charset=utf8";

        $this->link = new PDO($dsn, $config['username'], $config['password']);

        return $this;
    }
    public function execute($sql)//подготавливает, возвращает идентификатор запроса
    {
        $sth = $this->link->prepare($sql);

        return $sth->execute();
    }

    public function query($sql) //выполняет sql запрос(получает ассоциативный массив или возвращает пустой)
    {
        $sth = $this->link->prepare($sql);

        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if($result === false){
            return [];
        }
        return $result;
    }
}

