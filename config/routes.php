<?php
// пары в массиве  состоят из запросов "news" и строка где обрабатываем запрос
return array (//возвращаем в файле массив позже будет понятно зачем
/*    "product/([0-9]+)" => "product/view/$1",
    "product" => "product/view",
    "catalog" => "catalog/index",
    "category/([0-9]+)/page-([0-9]+)" => "catalog/category/$1/$2",
    "category/([0-9]+)" => "catalog/category/$1",
    "news/([0-9]+)" => "news/view/$1",
    "news" => "news/list",
*/
    "cnc" => "cnc/schedule",
    "input" => "works/input",
    "edit" => "works/edit",
    "schedule" => "works/schedule",
    "works" => "works/list",
    "user/list"=>"user/index",
    "user/create"=>"user/create",
    "user/store"=>"user/store",
    "login" => "user/login",
    "logout" => "user/logout",
    "denied" => "user/denied",
    "files" => "files/index",
    "draw" => "draw/index",
    "langchng/([a-z]+)" => "lang/change/$1",
    "([A-z,.,0-9]+)" => "site/greet",
    "" => "site/greet"
    );
?>
