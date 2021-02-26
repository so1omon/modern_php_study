<?php
    require_once('php_libs/smarty/libs/Smarty.class.php');

    $smarty= new Smarty();

    $smarty->template_dir="php_libs/smarty/templates";
    $smarty->compile_dir="php_libs/smarty/templates_c";
    $smarty->cache_dir="php_libs/smarty/cache";
    $smarty->config_dir="php_libs/smarty/configs";

    $smarty->assign('Name','smarty');
    $file="testTemplate.tpl";
    $smarty->display($file);
    

?>