<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>

<div id="form" >
        <h1 >
            LOGIN 
        </h1>
    <form name="form" action="loginl.php" onsubmit="return isvalid()" method="POST">
        <label>USERNAME:        
        <input type="text" id="user" name="user"><br><br>
        <label>PASSWORD</label>
        <input type="password" id="pass" name="pass"><br><br>
        <div class="logbtn"><input type="submit" value="login" id="btn" name="submit"/></div>
    </form>
</div> 
<script>
    function isvalid(){
        var user = document.form.user.value;
        var pass = document.form.pass.value;
    
    if(user.length==0 && pass.length==0){
        alert("username and password field is empty!!!!");
        return false
    }
    else{
        if(user.length==0 ){
        alert("username a field is empty!!!!");
        return false
        }

        if(pass.length==0 ){
        alert(" password field is empty!!!!");
        return false
        }
    }
}
    </script>
</body>
</html>