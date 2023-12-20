<?php


session_start();
// if(empty($_SESSION['sname']))
// {
// echo"<script>window.location='login.php';</script>";
// }
if(isset($_SESSION['sname'])){
$name = $_SESSION['sname'];
// echo $name;
}else{
    echo"<script>window.location='index.php';</script>";
}
?>