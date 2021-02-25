<?php
    session_start();
    require_once("dbCon.php");
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DB 수정</title>
    </head>
    <body>
        <?php
            $pdo=dbConnect();
            $id=$_SESSION['id'];
            try{
                $pdo->beginTransaction();
                $sql="update member SET name=:name, age=:age, email=:email where id=:id";
                $stmt=$pdo->prepare($sql);
                $stmt->bindValue(':name',$_POST['name'],PDO::PARAM_STR);
                $stmt->bindValue(':age',$_POST['age'],PDO::PARAM_INT);
                $stmt->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
                $stmt->bindValue(':id',$_SESSION['id'],PDO::PARAM_INT);
                $stmt->execute();
                $pdo->commit();
                echo "수정 완료!";
            }catch(PDOException $ex){
                $pdo->rollback();
                echo "ERROR : ".$ex->getMessage();
            }

            $_SESSION=array();
            session_destroy();

        ?>
    </body>
</html>