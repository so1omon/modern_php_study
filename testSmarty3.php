<?php
    require_once('smartyDefault.php');
    $smarty=smartyDefault();
    $smarty->assign("FirstName",array("길동","길서","길남","길북"));
    $smarty->assign("LastName",array("김","홍","이","박"));
    $smarty->display("testTemplate4.tpl");
?>