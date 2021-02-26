<?php
    require_once('php_libs/smarty/libs/Smarty.class.php');

    $smarty= new Smarty();

    $smarty->template_dir="php_libs/smarty/templates";
    $smarty->compile_dir="php_libs/smarty/templates_c";
    $smarty->cache_dir="php_libs/smarty/cache";
    $smarty->config_dir="php_libs/smarty/configs";

    $smarty->assign("Name","김솔민");
    $smarty->assign(array(
        "FirstName"=>"솔민",
        "LastName"=>"김",
        "Address"=>"서울",
        "Age"=>27
    ));
    $file="testTemplate3.tpl";
    $smarty->display($file);
?>