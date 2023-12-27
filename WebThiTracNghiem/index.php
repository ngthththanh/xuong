<?php  
    //echo "Hello word";
   session_start();
    include "../model/pdo.php";
    include "../model/taikhoan.php";
    // header("Location:admin/index.php");
    if(isset($_SESSION['user'])){
        if($_SESSION['user']['role'] == "1"){
            header("Location:admin/index.php");
        }elseif($_SESSION['user']['role'] == "2") {
            header("Location:view/index.php");
        }
    }else {
        header("Location:view/index.php");
    }
?>