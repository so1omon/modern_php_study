<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>검색하기</title>
    </head>
    <body>
    <?php
        $user = "user1";
        $pw="test";
        
        $dbHost="localhost";
        $dbName="sample";
        $dbType="mysql";
        
        $dsn ="$dbType:host=$dbHost;dbname=$dbName;charset=utf8";
        
        try{
            $pdo=new PDO($dsn,$user,$pw);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
            print "데이터 접속 성공!<br/>";
        }catch(PDOException $pe){
            die("error message : ".$pe->getMessage());
        }

        $searchWorld='%'.$_POST['searchName'].'%';

        try{
            $sql="SELECT * FROM member where name LIKE :name";
            $stmt=$pdo->prepare($sql);
            $stmt->bindValue(':name',$searchWorld,PDO::PARAM_STR);
            $stmt->execute();
            $count=$stmt->rowCount();
            print "검색 결과는 총 ".$count."건입니다.<br/>";
        }catch(PDOException $pe){
            print "오류 : ".$ex->getMessage();
        }


        if($count<1){
            print "검색 결과가 없습니다.<br/>";
        }else{
    ?>
        <h3>검색결과 리스트</h3>
        <table width="500" border="1" cellspacing="0" cellpadding="0">
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
                    <td align=center><?=htmlspecialchars($row['id'])?></td>
                    <td align=center><?=htmlspecialchars($row['name'])?></td>
                    <td align=center><?=htmlspecialchars($row['age'])?></td>
                    <td align=center><?=htmlspecialchars($row['email'])?></td>
                </tr>
<?php            
            }
        }
?>
        </table>
        <a href="search.html">뒤로가기</a>


    </body>
</html>