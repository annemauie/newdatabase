<?php
    include("dbconnect.php");

    if(isset($_POST['submits'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `signup` where username = '$username' and password = '$password'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count != 0)
        {
            header("Location:home.php");
        }
        else{
            echo '<script>
            window.location.href = "loginpage.php";
            alert("Login Failed. Invalid username or password!!!");
            </script>';
        }

    }
?>



