<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
/*define() 函數定義一個常量。
在設定以後，常量的值無法更改
常量名不需要開頭的美元符號 ($)
作用域不影響對常量的訪問
常量值只能是字符串或數字*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'testtest');
define('DB_NAME', 'test shit');
define('DB_PORT', '3306');
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// 輸入中文也OK的編碼
//mysqli_query($link, 'SET NAMES utf8');

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    return $link;
    //echo "Connection success!";
    /*
    $result = $link->query("SELECT * FROM department");
    if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "dname: " . $row["dname"]. " - dnumber: " . $row["dnumber"]. " " . $row["mgrssn"]. "<br>";
            }
        } 
        else {
            echo "0 results";
        }
    $link->close();
    */
}   
?>