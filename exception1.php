<?php
    function checkNum($number){
        if($number>1){
            throw new Exception("숫자값이 1 이하여야 한다.");
        }
        return true;
    }
    try{
        checkNum(2);
        print "숫자값이 1이하이다.";
    } catch(Exception $exp){
        echo "ERROR : ".$exp->getMessage();
    }
?>
