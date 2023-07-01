
<?php
if(isset($_POST["submit"])){
    $username = $_POST["user"];
    $password= $_POST["pass"];
    $email = $_POST["email"];
    $contact= $_POST["contact"];
    
    if ( !empty($username) && !empty($password)&&!empty($email) && !empty($password)) {
        $conn = mysqli_connect("localhost:3325","root","","register");
        if($conn==false) {
            die(mysqli_connect_error());
        }
        $sql = "INSERT INTO login (username,email,contact,password) VALUES ( '$username','$email','$contact', '$password')";
        if(mysqli_query($conn,$sql)){
            echo"INSERTED SUCCESSFULLY";
            header("location:index.html");
        }else{
            echo"someting went wrong";
        }
    
    }
    else{
        echo"please provide all information";
    }
}
?>