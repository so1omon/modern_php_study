<?php
    require_once("smartyDefault.php");

    $smarty=smartyDefault();
    
    $person= array('firstName'=>"길동","LastName"=>"김","email"=>"kkd@test.com");
    $smarty->assign('myPerson',$person);
    $smarty->display('foreachTemplate2.tpl');
?>