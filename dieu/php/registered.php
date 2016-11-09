<?php
include_once "functions.php";
session_start();
function register()
{
    global $tableMemmber, $sessionAccountType;
    if ($_POST["userName"]) {
        $userName = $_POST["userName"];
        $email = $_POST["email"];
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

    $sql = "SELECT userName, email FROM ".$tableMemmber;
    $result = $conn->query($sql);
    $rowCount = 0;
    if (is_object($result))
    {
        $rowCount = $result->num_rows;
    }
    $isExistAccount = false;
    if ($rowCount > 0) {
       //  output data of each row
        while ($row = $result->fetch_assoc()) {
            if ($row["userName"]  == $userName)
            {
                echo "Tên đăng nhập đã tồn tại!";
                $isExistAccount = true;
                break;
            }
            if ( $row["email"]  == $email)
            {
                echo "Email đăng nhập đã tồn tại!";
                $isExistAccount = true;
                break;
            }
        }
    }
    if ($isExistAccount == false)
    {
        $sql =  "INSERT INTO ".$tableMemmber." (userName, email, password) VALUES ('".$userName."', '".$email."', '".$password."')";
        if (mysqli_query($conn, $sql)) {
            $sql = "SELECT ID, type FROM ".$tableMemmber." where userName = '".$userName."'";
            $result = $conn->query($sql);
            $timeLife =  time() + 24 * 3600;
            setcookie("ID",$row["ID"],$timeLife, "/");
            setcookie("userName", $userName, $timeLife, "/");
            $_SESSION[$sessionAccountType] = 0;
            echo "Tạo tài khoản thành công!";
        } else {
            echo "Lỗi tạo tài khoản: <br>" . mysqli_error($conn);
        }
    }
   
    $conn->close();
};

register();

?>