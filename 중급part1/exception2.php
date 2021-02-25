<?php
    class customException extends Exception{
        public function errorMsg(){
            $errMsg = "에러 발생 라인 : ".$this->getLine(). "<br/>에러 파일 : ".$this->getFile()
                ."<br/>에러 메세지 : ".$this->getMessage()."<br/>잘못된 이메일 형식입니다.";
            return $errMsg;
        }
    }
    $email = "sss@ex......co.kr";

    try{
        if(filter_var($email,FILTER_VALIDATE_EMAIL)==FALSE){
            throw new customException("이메일 형식이 아닙니다.<br/>");
        }
        print "email : ".$email;

    }
    catch(customException $ex){
        echo $ex->errorMsg();
    }
?>