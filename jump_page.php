<?php
$_SESSION["type"] = $_POST["type"];//從首頁接收到的變數，看是query/button決定要跳到哪一頁
// echo $_SESSION["type"];

if ($_SESSION["type"]=='Query'){
    //重定向瀏覽器 
    header("Location: http://127.0.0.1/clinic-system/freelancer/query_page.php"); 
    //確保重定向後，後續代碼不會被執行 
    exit;
}
else{
    //重定向瀏覽器 
    header("Location: http://127.0.0.1/clinic-system/freelancer/button_page.php"); 
    //確保重定向後，後續代碼不會被執行 
    exit;
}

?>