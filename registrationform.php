
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="regstyle.css">
</head>
<body>


    <div id="regform" >
            <h1 >
                REGISTRATION FORM
            </h1>
            <form name="regform" action="registration.php"  method="POST" class="formcon">
                <label>USERNAME:       
                <input type="text" id="user" name="user"><br><br>

                <label>EMAIL:         
                <input type="email" id="email" name="email"><br><br>
                
                <label>CONTACT NUMBER:        
                <input type="tel" id="contact" name="contact"><br><br>

                <label>PASSWORD</label>
                <input type="password" id="pass" name="pass"><br><br>

                <!-- <label>CONFIRM PASSWORD</label>
                <input type="password" id="pass" name="pswd1"><br><br>                  -->
                
                <div class="pbtn">
                <input type="submit" value="REGISTER" id="btn"  name="submit"/>
                </div>
            </form>
            <div class="loginpage">
                <p class="pc">login if already registered</p>
            <a class="loginlogo" href="loginforms.php">LOGIN</a>
            </div>
    </div> 



</body>
</html>