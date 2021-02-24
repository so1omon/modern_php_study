<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Result</title>
</head>
<body>
    <h2>수정 결과</h2>
<?php
    require_once("dbConnect.php");

    $id=$_POST['id'];
    $name=htmlspecialchars($_POST['name']);
    $age=htmlspecialchars($_POST['age']);
    $email=htmlspecialchars($_POST['email']);
    if(mb_strlen($name)<1){
        print "이름을 1글자 이상 입력해주세요.<br/>";
    }elseif($age<0){
        print "나이를 1 이상의 값으로 입력해주세요.<br/>";
    }elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
        print "알맞은 이메일 형식으로 입력해주세요.<br/>";
    }else{

        $pdo=dbConnect();
        try{
            $pdo->beginTransaction();
            $sql="update member set name=:name,age=:age,email=:email where id=:id";
            $sthl=$pdo->prepare($sql);
            $sthl->bindValue(':id',$id,PDO::PARAM_INT);
            $sthl->bindValue(':name',$name,PDO::PARAM_STR);
            $sthl->bindValue(':age',$age,PDO::PARAM_INT);
            $sthl->bindValue(':email',$email,PDO::PARAM_STR);

            $sthl->execute();
            $pdo->commit();
        }catch(PDOException $ex){
            $pdo->rollBack();
            echo "ERROR : ".$ex->getMessage();
        }
        print "다음과 같이 수정하였습니다.<br/>";
?>
    <table width="500" border="1" cellspacing="0" cellpadding="0">
        <tbody align=center>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>email</th>
            </tr>
            <tr>
                <td><?=$id?></td>
                <td><?=$name?></td>
                <td><?=$age?></td>
                <td><?=$email?></td>
            </tr>
        </tbody>
    </table>
    <br/>
<?php
    }
?>
    <a href="searchDB.html">돌아가기</a>
</body>
</html>