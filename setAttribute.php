<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=sample;charset=utf8","user11","test");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,FALSE);
        print "데이터베이스 연결 성공";
        // $pde = NULL;
    }catch(PDOException $pe){
        die("접속 에러 : ".$pe->getMessage()); 
    }

?>