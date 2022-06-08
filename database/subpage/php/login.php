<?php

function function_alert($message) { 
        
    // Display the alert box  
    echo "<script>alert('$message');
    
    </script>"; //window.location.href='index.php';
    return false;
} 

// Include config file
$conn=require_once "config.php";

// Define variables and initialize with empty values
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username=$_POST["username"];
    $password=$_POST["password"];

    echo "<script type='text/javascript'>alert('username = $username, password = $password');</script>";

    
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql = "SELECT * FROM user WHERE userAccount ='".$username."'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1 && $password==mysqli_fetch_assoc($result)["userPassword"]){
            session_start();
            // Store data in session variables
            $_SESSION["loggedin"] = true;
            //這些是之後可以用到的變數
            $_SESSION["id"] = mysqli_fetch_assoc($result)["userID"];
            $_SESSION["username"] = mysqli_fetch_assoc($result)["userAccount"];
            header("location: /sql-project/database/welcome.php");
        }else{
                function_alert("帳號或密碼錯誤"); 
                //sleep(5);
                //header("Location: /sql-project/database/subpage/login.html");
                //exit();
            }
    }
        else{
            function_alert("Something wrong"); 
        }

        // Close connection
        mysqli_close($link);
    
}
?>
