<?php
    if (isset($_POST['enviar-formulario'])):
        $erros = array();
        if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
            $erros[] = "ERROR - Este não é um email válido!";
        endif;
        if (!$senha = filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT)): # teste
            $erros[] = "ERROR - Este não é uma senha válida!";
        endif;
        if(!empty($erros)):
            foreach($erros as $erro):
                echo "<li>".$erro."<li>";
            endforeach;
        else:
            echo "Sucesso !!";
        endif; 
    endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="softex-icon.ico" type="image/x-icon">
    <title>Validação de login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        Email : <input type="text" name="email">
        <br>
        Senha : <input type="password" name="senha">
        <br>
        <button type="submit" name="btn-entrar">Enviar</button>
    </form>
</body>
</html>