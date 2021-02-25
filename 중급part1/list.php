<?php
    session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 테스트</title>
</head>
<body>
    <h3>회원 리스트</h3>
    <hr size="1" noshade>
    <a href="insertForm.html">회원 등록</a><br/>
    
    <form name="form1" method="post" action="list.php">
        이름 : <input type="text" name="searchWord"/> <input type="submit" value="검색">
    </form>
    <?php
        require_once("dbConnect.php");
        $pdo=dbConnect();
        //입력
        if(isset($_POST['action'])&&$_POST['action']=='insert'){
            try{
                $pdo->beginTransaction();
                $sql="INSERT INTO member(name,age,email) VALUES(:name,:age,:email)";
                $stmt=$pdo->prepare($sql);
                $stmt->bindValue(':name',$_POST['name'],PDO::PARAM_STR);
                $stmt->bindValue(':age',$_POST['age'],PDO::PARAM_INT);
                $stmt->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
                
                $stmt->execute();
                $pdo->commit();

                print "데이터를 입력하였습니다.";
            }catch(PDOException $ex){
                $pdo->rollback();
                echo "ERROR : ".$ex->getMessage();
            }
        }
        //수정
        if(isset($_POST['action'])&&$_POST['action']=="update"){
            $id=$_SESSION['id'];
            try{
                $pdo->beginTransaction();
                $sql="UPDATE member SET name=:name, age=:age, email=:email where id=:id";
                $stmt=$pdo->prepare($sql);
                $stmt->bindValue(':name',$_POST['name'],PDO::PARAM_STR);
                $stmt->bindValue(':age',$_POST['age'],PDO::PARAM_INT);
                $stmt->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
                $stmt->bindValue(':email',$id,PDO::PARAM_INT);
                
                $stmt->execute();
                $pdo->commit();

                print "데이터를 수정하였습니다.";
            }catch(PDOException $ex){
                $pdo->rollback();
                echo "ERROR : ".$ex->getMessage();
            }
            unset($_SESSION['id']);
        }
        //삭제
        if(isset($_GET['action'])&&$_GET['action']=='delete'&&$_GET['id']>0){
            try{
                $pdo->beginTransaction();
                $sql="DELETE FROM member where id=:id";
                $stmt=$pdo->prepare($sql);
                $stmt->bindValue(':id',$_GET['id'],PDO::PARAM_STR);
                
                $stmt->execute();
                $pdo->commit();

                print "데이터를 삭제하였습니다.";
            }catch(PDOException $ex){
                $pdo->rollback();
                echo "ERROR : ".$ex->getMessage();
            }
        }
        //검색
        try{
            if(isset($_c)&&$_POST['searchWord']!=""){
                $searchWord='%'.$_POST['searchWord'].'%';
                $sql="SELECT * FROM member WHERE name LIKE :name";
                $stmt=$pdo->prepare($sql);
                $stmt->bindValue(':id',$_GET['id'],PDO::PARAM_STR);
                
                $stmt->execute();
                $pdo->commit();
                print "데이터를 삭제하였습니다.";
            }else{
                $sql="SELECT FROM member";
                $stmt=$pdo->query($sql);
            }
            $count=$stmt->rowCount();
            if($count<1){
                print "검색 결과가 없습니다.";
            }else{
                ?>
                <table></table>


                <?php
            }
        }catch(PDOException $ex){

        }
    ?>
</body>
</html>