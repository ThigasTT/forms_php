<?php
if(isset($_POST["txt_email"],$_POST["txt_senha"])){
$email=$_POST["txt_email"];
$senha=$_POST["txt_senha"];
if($email=="naruto@uol.com" && $senha=="hokage"){
    header("Location:index.php");
   
}else{
    header("Location:index2.php");
}
}
?>