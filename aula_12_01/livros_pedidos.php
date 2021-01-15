<?php
require_once "menu.php";
session_start()
?>
<html>
<head>
</head>
<body>
<?php
    if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
        header('Location:index.php?login=erro2');
    }
?>
</body>
</html>