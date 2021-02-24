<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB search result</title>
</head>
<body>
    <h2>검색결과</h2>
<?php
    $type=$_POST['type'];
    if(mb_strlen(htmlspecialchars($_POST['data']))<1&&$type=='name'){
        echo "검색어를 1글자 이상 입력하세요. <br/>";
?>
<?php
    }elseif($_POST['data']<1&&$type="age"){
        echo "나이는 1살 이상으로 입력해야 합니다. <br/>";
    }else{
        require_once("dbConnect.php");
        
        $data=htmlspecialchars($_POST['data']);

        $pdo=dbConnect();

        if($type=="name"){
            $sql="select * from member where name like :name";
            $stmt=$pdo->prepare($sql);
            $str="%".$data."%";
            $stmt->bindValue(':name',$str,PDO::PARAM_STR);
        }elseif($type="age"){
            $sql="select * from member where age=:data";
            $stmt=$pdo->prepare($sql);
            $stmt->bindParam(':data',$data,PDO::PARAM_INT);
        }

        $stmt->execute();
        
        print "총 ".$stmt->rowCount()."건의 검색 결과입니다.<br/><br/>";
    ?>
        
        <table width="500" border="1" cellspacing="0" cellpadding="0">
            <tbody align=center>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>age</th>
                    <th>email</th>
                    <th>update</th>
                </tr>
    <?php
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
                <tr>
                <form action="update.php" method="post">
                    <input type="hidden" name="id" value="<?=$row['id']?>">
                    <input type="hidden" name="name" value="<?=$row['name']?>">
                    <input type="hidden" name="age" value="<?=$row['age']?>">
                    <input type="hidden" name="email" value="<?=$row['email']?>">
                    <td><?=$row['id']?></th>
                    <td><?=$row['name']?></th>
                    <td><?=$row['age']?></th>
                    <td><?=$row['email']?></th>
                    <td>
                        <input type="submit" value="수정">
                    </td>
                </form>
                </tr>
    <?php
        }
    ?>

            </tbody>
        </table>
        
        <br/>    
<?php
    }
?>
    <a href="searchDB.html">돌아가기</a>
        
<?php
?>

</body>
</html>