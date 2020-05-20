<?php include 'includes/header.php'; ?>

<?php include "usuarios.php";
	session_start();
    unset($_SESSION['userID']);
    unset($_SESSION['email']);
	
	$myuser = new usuarios();
	
	if(isset($_POST['f_mail']) and isset($_POST['f_senha'])){
		$myuser->setEmail($_POST['f_mail']);
		$myuser->setSenha($_POST['f_senha']);
		$resultado = $myuser->login();
		$result = $resultado;

		if($resultado > 0){
			//fc_guarda_id($resultado);	
			$_SESSION['userID'] = $resultado;
            $_SESSION['email'] = $_POST['f_mail'];		
		} 

		else{
			exibe_pagina('Login ou senha incorreto!');
			// $mensagem = 'Login ou senha incorreto!';
		}
		
		header("Location:cadastro.php");
	} 

	else{
		// $mensagem = 'Login ou senha incorreto!';
		exibe_pagina('');
	}
?>

<?php function exibe_pagina($mensagem){ ?>
<!-- echo "<html>";
echo "<head>";
echo "<title>Login do Sistema</title>";
echo "</head>";
echo "<body>";
echo "<b>";
echo "<p align=center>";
echo "<img src='resources/images/login.png' height=160 width=400>";
echo "</p>";
echo '<p>'.$mensagem.'</p>';
echo "<div align=center>";
echo "<form method=POST action=$_SERVER[PHP_SELF]>";
echo "<H2>Email: <input type=text name=f_mail></H2>";
echo "<br/>";
echo "<H2>Senha: <input type=password name=f_senha></H2>";
echo "<br/>";
echo "<input type=submit value=Enviar>";
echo "</form>";
echo "</div>";
echo "</b>";
echo "</body>";
echo "</html>";
} -->

<!-- <?php //function exibe_pagina($mensagem){} ?> -->

<!-- LOGIN -->
<section class = "sec-form">

	<div class = "container">

		<div class = "row justify-content-center">

			<div class = "col-10 col-md-5">

				<h1 class = "title my-3">login</h1>

				<div class = "box-form">

					<p class = "my-2 hg-text-warning"><?= $mensagem; ?></p> 

					<form method = "POST" action = "<?= $_SERVER['PHP_SELF']; ?>" name = "formLogin">

						<div class = "form-row">

							<div class = "col-12 my-2 py-2">
								<label for = "inputEmail">e-mail:</label>
								<input class = "form-control" type = "email" name = "f_mail">
							</div>

							<div class = "col-12 my-2 py-2">
								<label for = "inputPassword">senha:</label>
								<input class = "form-control" type = "password" name = "f_senha">
							</div>

							<div class = "col-12 my-2 py-2">
								<input class = "btn btn-submit" type = "submit" value = "Entrar">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END LOGIN -->

<?php } ?>

<!-- function fc_guarda_id($valor){
	session_start();

	$_SESSION['val_id'] = $valor;
}
-->
<?php include 'includes/footer.php'; ?>