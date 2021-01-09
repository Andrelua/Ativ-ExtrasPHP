<?php
    if (isset($_POST['btn-entrar'])):
        $login = $_POST['email'];
        $senha = $_POST['senha'];

        if ((empty($login)) and (empty($senha)))
            echo "Os campos email/senha estão vazios";
        elseif (empty($senha))
            echo "O campo senha está vazio";
        elseif (empty($login))
            echo "O campo email está vazio!";
        else
            if (($login != "Andreluan176@gmail.com") and ($login != "andreluan176@gmail.com"))
                echo "ERROR - Email errado!";
            elseif ($senha != "andre12345")
                echo "ERROR - Senha errada!";
            else
                echo "SUCESSO!!";
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