<?php
include_once "header.php";
?>
<h1>Cadastro</h1>
<form action="verificar.php" method="post
">
<label for="">Login</label><br>
<input type="email" required name="txt_email">
<label for="">Senha</label>
<input type="text" required name="txt_senha">
<input type="submit" value="entrar">
</form>
<?php
include_once "footer.php";
?>