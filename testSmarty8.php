<?php
    require_once("smartyDefault.php");

    $smarty=smartyDefault();
    
    
    $smarty->assign('contacts',array(
        array('phone'=>'111-222-3333',
        'fax'=>'222-333-2323',
        'home'=>"032-132-2452"),
        array('phone'=>'231-223-2433',
        'fax'=>'102-333-2323',
        'home'=>"032-142-2477")
    ));
    $smarty->display('foreachTemplate3.tpl');
?>