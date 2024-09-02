
<?php
include_once "header.php";
?>
<h1>Resultado</h1>
<?php
$n=$_GET["num_tab"];
tabuada($n);

function tabuada($n){
    for($i=1;$i<=10;$i++){
     $resultado=$n*$i;
     echo"<br><tr><td>$n*$i=$resultado</td></tr>";
    }
    return $resultado;
}
?>
<br>
<a href="index.php">voltar</a>
<?php
include_once "footer.php";
?>