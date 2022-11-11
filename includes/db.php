<?php
    function Connect(){
        $szerver = "localhost";
        $user    = "root";
        $pass    = "";
        $dbname  = "telepulesek";

        $con = mysqli_connect($szerver,$user,$pass,$dbname);

        if(!$con){
            die("Nem sikerült csatlakozni");
        } /*else {
            echo "Sikerült csatalkozni";
        }*/
        return $con;
    }
?>