<!DOCTYPE html>
    <html lang="kor">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PDO 접속 테스트</title>
    </head>
    <body>
        <?php
            $pdo = new PDO('mysql:host=localhost;dbname=sample;charset=utf8','user1', 'test');

            print "데이터베이스 연결 성공.";
            
            $pdo=NULL;
        ?>
    </body>
</html>