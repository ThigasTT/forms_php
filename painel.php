<?php
    include_once "header.php";
    echo"<span>login efetuado</span>";
    session_start();
    $_SESSION["nome"]="Mirosmar";
    echo"<a href='exibir.php' target='_blank'>link</a>";
    include_once "footer.php";
?>