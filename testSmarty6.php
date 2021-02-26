<?php
    require_once("smartyDefault.php");

    $smarty=smartyDefault();
    
    $arr=array('red','green','blue');
    $smarty->assign('myColors',$arr);
    $smarty->display('foreachTemplate1.tpl');

?>