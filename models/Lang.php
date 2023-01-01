<?php
    class Lang {
        public static function checkLang(){
            if(file_exists(ROOT."/lang/config.php")){
              $langArr = require_once ROOT."/lang/config.php";
            } else {
              $langArr = ['default' => 'en'];
            }
            //$defaultLang = 'ru';
            
            if(!isset($_SESSION['langarr'])) $_SESSION['langarr']=$langArr;
            if(!isset($_SESSION['lang'])) $_SESSION['lang']=$langArr['default'];
            if(!file_exists(ROOT."/lang/".$_SESSION['lang'].".php")) {
              $_SESSION['lang']=$langArr['default'];
              // включить массив с ошибками, на случай если нет языкового файла соответствующего пункту в языково конфигурации
            }
        /*
            if(isset($_SESSION['lang'])){
              if(!in_array($_SESSION['lang'],$langArr)) $_SESSION['lang'] = $defaultLang;
              $_SESSION['lang'] = $defaultLang; 
              return true; 
            } else {
              $_SESSION['lang'] = $defaultLang;
              return true;
            }
           */ 
        }
    }