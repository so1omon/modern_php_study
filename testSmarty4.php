<?php
    require_once("smartyDefault.php");
    $smarty=smartyDefault();
    $smarty->assign(array('personInfo'=>
        array(
            array("FirstName"=>"길동","LastName"=>"김"),
            array("FirstName"=>"길서","LastName"=>"홍")
        )
    ));
    $smarty->display('testTemplate5.tpl');
?>