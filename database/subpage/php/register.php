<?php

session_start();

$conn = require_once("./config.php");

/* test POST
foreach ($_POST as $key => $value) {
    echo "<tr>";
    echo "<td>";
    echo $key." : ";
    echo "</td>";
    echo "<td>";
    echo $value;
    echo "</td>";
    echo "</tr>";
    echo "<br>";
}
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_REQUEST["username"];
    $password = $_POST["password"];
    $mail = $_POST["mail"];

    echo "<script type='text/javascript'>alert('username = $username, password = $password, mail = $mail');</script>";

    $check = "SELECT * FROM user WHERE userAccount='" . $username . "'";
    if (mysqli_num_rows(mysqli_query($conn, $check)) == 0) {
        $sql = "INSERT INTO user (userId, userAccount, userPassword, email, storeUrl)
            VALUES(NULL,'" . $username . "','" . $password . "','" . $mail . "','www.temp.com')";

        if (mysqli_query($conn, $sql)) {
            echo "註冊成功!3秒後將自動跳轉頁面<br>";
            echo "<a href='index.php'>未成功跳轉頁面請點擊此</a>";
            header("refresh:32;url=../index.php");
            exit;
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }
    } else {
        echo "該帳號已有人使用!<br>3秒後將自動跳轉頁面<br>";
        echo "<a href='register.html'>未成功跳轉頁面請點擊此</a>";
        header('HTTP/1.0 302 Found');
        header("refresh:3;url=../register.html",true);
        exit;
    }
    
}
mysqli_close($conn);

/*
function function_alert($message) {
    // Display the alert box  
    echo "<script>alert('$message');
    window.location.href='index.php';
    </script>";
    return false;
}
*/

?>