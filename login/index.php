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
    <link rel="stylesheet" href="style.css">
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <header class="cabecalho">
        <h1 class="logo">
            <a href="index.php" title="Sistema de Login">Login</a>
        </h1>
    </header>
    
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        Email : <input type="text" name="email" placeholder="Email aqui...">
        <br>
        Senha : <input type="password" name="senha" placeholder="Senha aqui...">
        <br>
        <button type="submit" name="btn-entrar">Enviar</button>
    </form>
</body>
</html>