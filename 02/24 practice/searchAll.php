<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL data</title>
</head>
<body>
    <h2>모든 데이터 목록</h2>
<?php
    require_once("dbConnect.php");

    $pdo=dbConnect();

    $sql="select * from member";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    
    print "총 ".$stmt->rowCount()."건의 데이터가 있습니다.<br/><br/>";
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
    <a href="searchDB.html">돌아가기</a>
        
<?php
?>

</body>
</html>