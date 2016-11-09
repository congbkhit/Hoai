<?php
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "trunk"; 
    $tableMemmber = "memmber";
    $sessionAccountType = "asfsafdsgsdgsdgsdgsd";
    function encodePassword($password)
    {
        $stringAdd = "agddfhqqwertyioiupasdfghjklzxcvbnmwetasdfghjklyrutiy";
    
        $lenPass = strlen($password);
        $passwordNew = "";
        for ($indexChar = 0 ; $indexChar < $lenPass;$indexChar++)
        {
            $number1 = ord($password[$indexChar]);
            $number2 = ord($stringAdd[$indexChar]);
            $number1 = round(($number1 * 13 - 5) / 11);
            $number2 = round(($number2 * 9 - 3) / 7);
            if ($indexChar % 2)
                $passwordNew = $passwordNew.$number1.$number2;
            else  $passwordNew = $passwordNew.$number2.$number1;
        } 
        return $passwordNew;
    }
    function getDatabase()
    {
        global $dbServer, $dbUser, $dbPassword, $dbName;    
        $conn = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);
        mysqli_query($conn, "SET NAMES 'UTF8'");
       //  Check connection
        if ($conn->connect_error) {
            die("Database bị lỗi: " . $conn->connect_error);
             $conn->close();
            return null;
        }
        return $conn;
    }
?>