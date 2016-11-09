<?php
include_once "functions.php";
session_start();
function login()
{
    global $dbServer, $dbUser, $dbPassword, $dbName;
    global $tableMemmber, $sessionAccountType;
    if ($_POST["userName"]) {
        $userName = $_POST["userName"];
        $password  = encodePassword($_POST["password"]);
    }
    else
    {
        echo "Gửi dữ liệu bị lỗi!";
        return ;
    }
  
    $conn = getDatabase();
    if ($conn == null) {
        echo "Lỗi kết nối database";
        return;
    }

    if (strrpos($userName, "@") != false)
    {
        $sql = "SELECT ID, userName, type, password FROM ".$tableMemmber." where email = '".$userName."'";
    }
    else
    {        
        $sql = "SELECT ID, userName, type, password FROM ".$tableMemmber." where userName = '".$userName."'";
    }
    $result = $conn->query($sql);
    if (is_object($result))
    {
        $rowCount = $result->num_rows; 
        if ($rowCount > 0) {
        //  output data of each row
            $row = $result->fetch_assoc();
            if ($row["password"] == $password)
            {
                
        echo "cps";
                echo "Đăng nhập thành công!";
                $timeLife =  time() + 24 * 3600;
                setcookie("ID",$row["ID"],$timeLife, "/");
                setcookie("userName", $row["userName"], $timeLife, "/");
                $_SESSION[$sessionAccountType] = $row["type"];
                $conn->close();
                return;
            }
        }
    }
    echo "Tên hoặc mật khẩu đăng nhập không đúng!";
    $conn->close();
};
login();
?>