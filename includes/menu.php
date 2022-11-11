<?php
    $content = "includes/mainpage.php";

    if(isset($_GET["p"])){
        switch($_GET["p"]){
            case "all":
                $content = "includes/all.php";
                break;
            case "abc":
                $content = "includes/abc.php";
                break;
            case "kozseg":
                $content = "includes/kozseg.php";
                break;
            case "nagykozseg":
                $content = "includes/nagykozseg.php";
                break;
            case "varos":
                $content = "includes/varos.php";
                break;
            //Ez nem memü item, hanem egy város linkjéhez kell
            case "adatlap":
                $content = "includes/adatlap.php";
                break;
        }
    }
?>