<?php
if(isset($_POST["submit"])){
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $rooms = $_POST["rooms"];
    if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($phone) && !empty($rooms)) {
        $conn = mysqli_connect("localhost:3325","root","","register");
        if($conn==false) {
            die(mysqli_connect_error());
        }
        $sql = "INSERT INTO users (first_name, last_name, email,phone, rooms) VALUES ('$first_name', '$last_name', '$email','$phone', '$rooms')";
        if(mysqli_query($conn,$sql)){
            // echo"INSERTED SUCCESSFULLY";
            // location
            header("location:feedback.html");
        }else{
            echo"someting went wrong";
        }

    }else{
        echo"please provide all information";
    }
}
?> 