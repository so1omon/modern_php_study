<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h2>수정하기</h2>
    <form action="updateResult.php" method="post">
<?php
        $id=$_POST['id'];
        $name=$_POST['name'];
        $age=$_POST['age'];
        $email=$_POST['email'];

        // print_r($_POST);

?>  
    id : <?=$id?><br/><br/>
    이름 : <input type="text" name="name" value="<?=$name?>"><br/><br/>
    나이 : <input type="text" name="age" value="<?=$age?>"><br/><br/>
    이메일 : <input type="text" name="email" value="<?=$email?>"><br/><br/>
    <input type="hidden" name="id" value="<?=$_POST['id']?>">
    <input type="submit" value="저장">
    </form>
    
</body>
</html>