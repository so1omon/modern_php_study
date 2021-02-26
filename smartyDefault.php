<?php
require_once('php_libs/smarty/libs/Smarty.class.php');


function smartyDefault(){
    $smarty= new Smarty();
    $smarty->template_dir="php_libs/smarty/templates";
    $smarty->compile_dir="php_libs/smarty/templates_c";
    $smarty->cache_dir="php_libs/smarty/cache";
    $smarty->config_dir="php_libs/smarty/configs";
    return $smarty;
}
?>