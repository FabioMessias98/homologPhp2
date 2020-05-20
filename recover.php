<?php include "usuarios.php"; 

    $usuarios = new usuarios();

    session_start();

    if(isset($_POST['atualizarSenha'])){
        $usuarios->setId($_POST['f_id']);
        $usuarios->setSenha($_POST['f_senha']);
        $usuarios->resetSenha();
        Header("Location:index.php");
    }

    else{
        message();
    }

    function message( ){ ?>
        <html>
            <head>
                <title>Login</title>
                <?php include 'includes/metas.php'; ?>
            </head>
            <body>

                <section class = "sec-recover">

                    <div class = "container">

                        <div class = "row justify-content-center">

                            <div class = "col-lg-4">
                                
                                <form method = "POST" action= "<?= $_SERVER['PHP_SELF']; ?>">

                                    <div class = "form-row">
                                        <input type = hidden value = $_SESSION[idUsuario] name = f_id>
        	                           
                                        <div class = "col-12 my-2">
                                            <label>e-mail:</label>
        	                                <input class = "form-control" type = "text" name = "f_mail" 
                                            value = "<?= $_SESSION['email']; ?>" disabled>
                                        </div>
        		                        
                                        <div class = "col-12 my-2">
                                            <label>redefinir senha:</label>
        		                            <input class = "form-control" type = "password" name = "f_senha">
                                        </div>

                                        <div class = "col-12 my-2">
                                            <input class = "btn btn-outline-light" type = "submit" name = "atualizarSenha" 
                                            value = "Salvar">
                                        </div>
                                    </div>
        	                    </form>
        	               </div> 
                        </div>
        		    </div>
                </section>

        <?php include 'includes/footer.php'; ?>
<?php }
?>