<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>삭제 처리</title>
</head>
<body>
    <?php
    require_once("dbConnect.php");
    $pdo=dbConnect();
    if(isset($_GET['action'])&&$_GET['action']=='delete'&&$_GET['id']>0){
        try{
            $pdo->beginTransaction();
            $id=$_GET['id'];
            $sql="DELETE FROM MEMBER WHERE id=:id";
            $stmt=$pdo->prepare($sql);
            $stmt->bindValue(':id',$id,PDO::PARAM_INT);

            $stmt->execute();
            $pdo->commit();

            print $id."번 데이터를 삭제하였습니다.<br/>";
        }catch(PDOException $ex){
            $pdo->rollback();
            echo "ERROR  : ".$ex->getMessage();
        }
    }
    try {
        $sql="SELECT * FROM MEMBER";
        $stmt=$pdo->query($sql);
        $count=$stmt->rowCount();

        print "총 회원 수는 ".$count."명입니다.<br/>";

    } catch (PDOException $ex) {
        echo "ERROR  : ".$ex->getMessage();
    }
    if($count<1) print "회원이 존재하지 않습니다.";
    else {
        ?>
        <h3>삭제 후 리스트</h3>
        <table width="400" border="1" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <th>번호</th>
                    <th>이름</th>
                    <th>나이</th>
                    <th>이메일</th>
                </tr>
                <?php
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)){                    
                ?>
                <tr>
                    <td align="center"><?=htmlspecialchars($row['id'])?></td>
                    <td align="center"><?=htmlspecialchars($row['name'])?></td>
                    <td align="center"><?=htmlspecialchars($row['age'])?></td>
                    <td align="center"><?=htmlspecialchars($row['email'])?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <?php
    }
    ?>
</body>
</html>