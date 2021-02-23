<!DOCTYPE html>
<html lang="kor">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mysql 접속 테스트</title>
    </head>
    <body>
        <?php
            $mysqli= new mysqli("localhost","user1","test","sample");

            if($mysqli->connect_error){
                die("Connect Error : ( ".$mysqli->connect_errno.")".$mysqli->conncet_error); 
            }

            print "데이터베이스에 연결되었습니다.";
            $mysqli->close();
        ?>
    </body>
</html>