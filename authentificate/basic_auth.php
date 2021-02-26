<?php
    if(empty($_SERVER['PHP_AUTH_USER'])||empty($_SERVER['PHP_AUTH_PW'])){
        header("WWW-Authenticate:Basic realm=\'Member Only\'");
        header("HTTP/1.0 401 Unauthorized");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basic 인증 테스트</title>
</head>
<body>
    <h3>Basic 인증 테스트</h3>
    취소 되었습니다.
</body>
</html>
<?php
    }else{
        if($_SERVER['PHP_AUTH_USER']=="test"&&$_SERVER['PHP_AUTH_PW']=="1234"){
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basic 인증 테스트</title>
</head>
<body>
    <h3>Basic 인증 테스트</h3>
    인증 되었습니다. <?=$_SERVER['PHP_AUTH_USER']?>님 안녕하세요
</body>
</html>
<?php
        }else{
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basic 인증 테스트</title>
</head>
<body>
    <h3>Basic 인증 테스트</h3>
    사용자 ID와 패스워드가 일치하지 않습니다.. 
</body>
</html>      
<?php      
        }
        
    }
?>