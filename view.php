<html>
    <head>
        <title>php 테스트</title>
    </head>
    <body>
<?php
    $user = "user1";
    $pw="test";
    
    $dbHost="localhost";
    $dbName="sample";
    $dbType="mysql";
    
    $dsn ="$dbType:host=$dbHost;dbname=$dbName;charset=utf8";
    
    
    //데이터베이스 접속
    try{
        $pdo = new PDO($dsn,$user,$pw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        
        print "데이터베이스 연결 성공!!<br/>";
    } catch (PDOException $pe) {
        die("접속오류 : ".$pe->getMessage());
    }
    
    //데이터 처리
    try{
        $pdo->beginTransaction();
        $sql="INSERT INTO member (name, age, email) VALUES(:name, :age, :email)";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindValue(':name',$_POST['name'],PDO::PARAM_STR);
        $stmt->bindValue(':age',$_POST['age'],PDO::PARAM_INT);
        $stmt->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
        
        $stmt->execute();
        $pdo->commit();
        
        print "데이터를 ".$stmt->rowCount()."건을 입력합니다.";
        
    } catch (PDOException $ex) {
        $pdo->rollBack();
        print "오류 : ".$ex->getMessage();
    }
?>
        <p>
        <a href ="form1.html">뒤로</a>
        </p>
        </body>
</html>
