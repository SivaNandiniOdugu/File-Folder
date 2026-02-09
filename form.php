<?php
session_start();
$conn=new mysqli("localhost","root","","db");
if($_SERVER["REQUEST_METHOD"]==="POST"){
    if($_POST["action"]==="register"){
        $username=$_POST
    }
}