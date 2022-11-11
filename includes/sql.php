<?php
    //Global Var
    $RowPerPage = 100; //Hány sor per oldal
    // Összes település
    function Pagination($RowPerPage){
        $con = Connect();
        $sql = "SELECT * FROM hnk";
        $result = mysqli_query($con,$sql);
        $NumRows = mysqli_num_rows($result);
        $NumPages = ceil($NumRows/$RowPerPage);
        mysqli_close($con);
        return $NumPages;
    }
    function All($RowPerPage){
        $con = Connect();
        if(!isset($_GET["page"])){
            $page = 1;
        } else {
            $page = $_GET["page"];
        }
        $Limit = ($page-1)*$RowPerPage;
        $sql = "SELECT * FROM hnk LIMIT ".$Limit.",".$RowPerPage;
        $result = mysqli_query($con,$sql);
        mysqli_close($con);
        return $result;
    }
    //Egy település lekérdése
    function Telepules(){
        $con = Connect();
        $id = $_GET["id"];
        $sql = "SELECT * FROM hnk WHERE ID=$id";
        $result = mysqli_query($con,$sql);
        mysqli_close($con);
        return $result;
    }

    //Települések ABC-ben
    function ABC(){
        $con = Connect();
        if(!isset($_GET["abc"])){
            $id = "a";
        } else {
            $id = $_GET["abc"];
        }
        $sql = "SELECT * FROM hnk WHERE helyseg LIKE '".$id."%'";
        $result = mysqli_query($con,$sql);
        mysqli_close($con);
        return $result;
    }

    //Község
    function Kozseg(){
        $con = Connect();
        $sql = "SELECT * FROM hnk WHERE jogallas='község' ";
        $result = mysqli_query($con,$sql);
        mysqli_close($con);
        return $result;
    }

    //Nagyközség
    function Nagykozseg(){
        $con = Connect();
        $sql = "SELECT * FROM hnk WHERE jogallas='nagyközség' ";
        $result = mysqli_query($con,$sql);
        mysqli_close($con);
        return $result;
    }
    //Város
    function Varos(){
        $con = Connect();
        $sql = "SELECT * FROM hnk WHERE jogallas LIKE '%város%' OR jogallas='megyeszékhely'";
        $result = mysqli_query($con,$sql);
        mysqli_close($con);
        return $result;
    }
?>