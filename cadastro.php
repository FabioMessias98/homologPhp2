<?php include "usuarios.php"; ?>
<?php
	session_start();
	if(!isset($_SESSION['userID'])){
	    //Header("Location:index.php?");
	    echo "<script>window.location.href = 'index.php'</script>";
	}
?>
<html>
	<head>
		<title>Cadastro de Usuários</title>
		<?php include 'includes/metas.php'; ?>
	</head>
	<body>
		<h1 class = "title my-2">Cadastro de Usuários</h1>

<?php
	//Instancio um objeto do tipo usuarios()
	$myuser = new usuarios(); ?>

<section class = "sec-register">

	<div class = "container">

		<div class = "box-register">

			<div class = "row justify-content-center">

				<div class = "col-10 col-md-6">
<?php
	//Se chegam os dados incluindo o id, mostro o form preenchido e faço a alteração
	if(isset($_POST['f_nome']) and isset($_POST['f_mail']) and isset($_POST['f_senha']) and isset($_POST['f_id'])){
?>
		<form method = "POST" action = "alterar.php">

			<div class = "form-row">

				<div class = "col-12 my-2">
					<label>nome:</label> 
					<input class = "form-control" type = text name = f_nome value = "<?= $_POST['f_nome']; ?>">
				</div>

				<div class = "col-12 my-2">
					<label>e-mail:</label>
					<input class = "form-control" type = "text" name = "f_mail" value = "<?= $_POST['f_mail']; ?>">
				</div>
				
				<div class = "col-12 my-2">
					<label>senha:</label> 
					<input class = "form-control" type = "password" name = "f_senha" value = "<?= $_POST['f_senha']; ?>">
				</div>
				
				<input type = "hidden" name = "f_id" value = "<?= $_POST['f_id']; ?>">

				<div class = "col-12 my-2">
					<input class = "btn btn-outline-light" type = "submit" value = "Editar">
				</div>	
			</div>
		</form>	

<?php }
	//Se chegam os dados exceto o id, faço a inserção do usuário
	elseif(isset($_POST['f_nome']) and isset($_POST['f_mail']) and isset($_POST['f_senha'])){ 
		$myuser->setNome($_POST['f_nome']);
		$myuser->setEmail($_POST['f_mail']);
		$myuser->setSenha(md5($_POST['f_senha']));
		$myuser->insert(); 
?>
		<form method = "POST" action = "<?= $_SERVER['PHP_SELF']; ?>">

			<div class = "form-row">

				<div class = "col-12 my-2">
					<label>nome:</label>
					<input class = "form-control" type = "text" name = "f_nome">
				</div>

				<div class = "col-12 my-2">
					<label>e-mail:</label>
					<input class = "form-control" type = "text" name = "f_mail">
				</div>
				
				<div class = "col-12 my-2">
					<label>senha:</label>
					<input class = "form-control" type = "password" name = "f_senha">
				</div>
				
				<div class = "col-12 my-2">
					<input class = "btn btn-outline-light" type = "submit" value = "Confirmar">
				</div>
			</div>
		</form>		
<?php }
	//Se chega somente o id faço a exclusão e mostro o formulário para cadastro
	elseif(isset($_POST['f_id'])){
		$myuser->setId($_POST['f_id']);
		$myuser->delete($_POST['f_id']);
?>
		<form method = "POST" action = "<?= $_SERVER['PHP_SELF']; ?>">

			<div class = "form-row">

				<div class = "col-12 my-2">
					<label>nome:</label>
					<input class = "form-control" type = "text" name = "f_nome">
				</div>

				<div class = "col-12 my-2">
					<label>e-mail:</label>
					<input class = "form-control" type = "text" name = "f_mail">
				</div>
				
				<div class = "col-12 my-2">
					<label>senha:</label>
					<input class = "form-control" type = "password" name = "f_senha">
				</div>
				
				<div class = "col-12 my-2">
					<input class = "btn btn-outline-light" type = "submit" value = "Excluir">
				</div>
			</div>
		</form>	
<?php }

	// <!-- else if(isset($_POST['reset'])){ 
	//  	        $myuser->setId($_POST['f_id']);
	//  	        $myuser->setSenha('123456');
	//  	        $myuser->resetPassword(); -->
		    	
	// 	<!-- <form method = "POST" action = "<= $_SERVER['PHP_SELF']; ">
	// 		<input type = "hidden" name = "f_selecao" value = "Incluir">
			
	// 		<div class = "form-row">
			    
	// 		    <div class = "col-12 my-2">
	// 		    	<label>nome:</label>
	// 		    	<input class = "form-control" type = "text" name = "f_nome">
	// 		    </div>

	// 		    <div class = "col-12 my-2">
	// 		    	<label>e-mail:</label>
	// 		    	<input class = "form-control" type = "text" name = "f_mail">
	// 		    </div>
			    
	// 		    <div class = "col-12 my-2">
	// 		    	<label>senha:</label>
	// 		    	<input class = "form-control" type = "password" name = "f_senha">
	// 		    </div>
			    
	// 		    <div class = "col-12 my-2">
	// 		    	<input class = "btn btn-outline-light" type = "submit" value = "Enviar">
	// 		    </div>
	// 		</div>
	//     </form> -->

	//Se nada chega via POST simplesmente mostro o formulário de cadastro
	else{
?>
		<form method = "POST" action = "<?= $_SERVER['PHP_SELF']; ?>">

			<div class = "form-row">

				<div class = "col-12 my-2">
					<label>nome:</label>
					<input class = "form-control" type = "text" name = "f_nome">
				</div>

				<div class = "col-12 my-2">
					<label>e-mail:</label>
					<input class = "form-control" type = "text" name = "f_mail">
				</div>
				
				<div class = "col-12 my-2">
					<label>senha:</label>
					<input class = "form-control" type = "password" name = "f_senha">
				</div>
				
				<div class = "col-12 my-2">
					<input class = "btn btn-outline-light" type = "submit" value = "Confirmar">
				</div>
			</div>
		</form>				
<?php }
?>
				</div><!-- COL-12 -->
			</div><!-- ROW -->
		</div><!-- BOX-REGISTER -->
	</div><!-- CONTAINER -->
</section>

<!-- TABLE -->
<section class = "sec-table">

	<div class = "container">

		<div class = "row">

			<div class = "col-12">

				<div class = "row">

					<div class = "col-4 table-subtitle hg-bg-primary px-1">
						<span class = "icon-user"></span>
						<h4 class = "subtitle py-3">nome</h4>
					</div>

					<div class = "col-4 table-subtitle hg-bg-primary px-1">
						<span class = "icon-email"></span>
						<h4 class = "subtitle py-3">e-mail</h4>
					</div>

					<div class = "col-4 table-subtitle hg-bg-primary px-1">
						<span class = "icon-action"></span>
						<h4 class = "subtitle py-3">ações</h4>
					</div>
				</div>

				<?php foreach($myuser->findAll() as $key=>$value): ?>
				<div class = "row">

					<div class = "col-6 col-md-4 table-content hg-bg-primary mt-2 my-md-2 px-1">
						<p class = "content content-name py-2"><?= $value->nome; ?></p>
					</div>

					<div class = "col-6 col-md-4 table-content hg-bg-primary mt-2 my-md-2 px-1">
						<p class = "content content-email py-2"><?= $value->email; ?></p>
					</div>

					<div class = "col-12 col-md-4 table-content hg-bg-primary mb-2 my-md-2 px-1">
						<form class = "form-alter" method = "POST" action = "<?= $_SERVER['PHP_SELF']; ?>" name = "formAlter">
							<input type = "hidden" name = "f_nome"  value = "<?= $value->nome; ?>">
							<input type = "hidden" name = "f_mail"  value = "<?= $value->email; ?>">
							<input type = "hidden" name = "f_senha" value = "<?= $value->senha; ?>">
							<input type = "hidden" name = "f_id"    value = "<?= $value->id; ?>">
							<!-- <input type="submit" value="Alterar"> -->
						</form>
						<form class = "form-delete" method = "POST" action = "<?= $_SERVER['PHP_SELF']; ?>" 
							name = "formDelete">
							<input type = "hidden" name = "f_id" value = "<?= $value->id; ?>">
							<!-- <input type = "submit" value = "Excluir"> -->
						</form>	
						<form class = "form-recover" method = "POST" action = "<?= $_SERVER['PHP_SELF']; ?>" 
							name = "formRecover">
						    <input type = "hidden" name = "reset" value = "resetar">
						    <input type = "hidden" name = "f_id" value = "<?= "$value->id"; ?>">
						    <!-- <input class = "btn btn-outline-dark" type = "submit" value = "Resetar">
						    
						</form> -->
						<p class = "content content-action table-tr py-2">
							<span class = "icon icon-alter" title = "Alterar"></span>
							<span class = "icon icon-delete" title = "Excluir"></span>
							<!-- <span class = "icon icon-recover" title = "Resetar"></span> -->
						</p>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<!-- END TABLE -->

<!--
	<p></p>
	<div>
		<table border=1>
		  <tr>
			<th width="20%">Nome</th>
			<th width="30%">Email</th>
			<th width="20%">Ações... </th>
		  </tr>
			<php foreach($myuser->findAll() as $key=>$value):?>
		  <tr>
				<td><php echo "$value->nome";?></td>
				<td><php echo "$value->email";?></td>
				<td>
					<form method="POST" action="<php echo $_SERVER['PHP_SELF']; ?>">	
						<input type="hidden" name="f_nome" value=<php echo "$value->nome";?>>
						<input type="hidden" name="f_mail" value=<php echo "$value->email";?>>
						<input type="hidden" name="f_senha" value=<php echo "$value->senha";?>>
						<input type="hidden" name="f_id" value=<php echo "$value->id";?>>
						<input type="submit" value="Alterar">
					</form> 
					<form method="POST" action="<php echo $_SERVER['PHP_SELF']; ?>">
						<input type="hidden" name="f_id" value=<php echo "$value->id";?>>
						<input type="submit" value="Excluir">
					</form>						
				</td>
		  </tr>
			<php endforeach;?>	
		</table>
	</div>
		
	</b>
-->

<?php include 'includes/footer.php'; ?>
