<?php

 // 1. Общие настройки
    ini_set("display_errors",1);
    error_reporting(E_ALL);
    session_start();

// 2. Подключение файлов системы
    define("ROOT", dirname(__FILE__));
    require_once ROOT."/components/autoload.php"; //it works on local server, but doesn't work on beget
   // require_once ROOT."/components/router.php";
    require_once ROOT."/components/db.php";
  //  require_once (ROOT."/views/indexShop.php");
// 3. Установка соединения с БД


// 4. Вызов роутер
    $router = new Router();
    $router->run();

?>
