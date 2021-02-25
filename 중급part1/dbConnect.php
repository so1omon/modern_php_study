<?php
    function dbConnect(){
        $db_user = "user1";
        $db_pw="test";
        
        $db_Host="localhost";
        $db_Name="sample";
        $db_Type="mysql";
        
        $dsn ="$db_Type:host=$db_Host;dbname=$db_Name;charset=utf8";
        
        try{
            $pdo=new PDO($dsn,$db_user,$db_pw);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
            print "데이터 접속 성공!<br/>";
        }catch(PDOException $pe){
            die("error message : ".$pe->getMessage());
        }
        return $pdo;
    }


?>