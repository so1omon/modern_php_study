<?php
    session_start();
    require_once("dbCon.php");
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h3>수정 화면</h3>
        <?php
            $pdo=dbConnect();
            $id=1;
            $_SESSION['id']=$id;

            try{
                $sql="select * from member where id=:id";
                $stmt=$pdo->prepare($sql);
                $stmt->bindValue(':id',$id,PDO::PARAM_INT);
                $stmt->execute();
                $cnt=$stmt->rowCount();
            }catch(PDOException $ex){
                print "ERROR : ".$ex->getMessage();
            }

            if($cnt<1){
                print '수정할 데이터가 없습니다.!!<br/>';
            }else{
                $row=$stmt->fetch(PDO::FETCH_ASSOC);                
            }
        ?>
        <form name="form1" action="update.php" method="post">
            번호 : <?=htmlspecialchars($row['id'])?><br/>
            이름 : <input type="text" name="name" value="<?=htmlspecialchars($row['name'])?>"><br/>
            나이 : <input type="text" name="age" value="<?=htmlspecialchars($row['age'])?>"><br/>
            이메일 : <input type="text" name="email" value="<?=htmlspecialchars($row['email'])?>"><br/>
            <input type="submit" value="수정">
        </form>
        <?php



        ?>
    </body>
</html>