
<?php

    include("process/conn.php");

    $msg = "";

    if(isset($_SESSION["msg"])){

        $msg = $_SESSION["msg"];
        $status = $_SESSION["status"];

        $_SESSION["msg"] = "";
        $_SESSION["status"] = "";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu Pedido!</title>
    
    <!-- fonte awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- app css -->
    <link rel="stylesheet" href="css\style.css">

    
</head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-lg">
            <a href="index.php" class="navbar-brand">
                <img src="img/logo.png" alt="Pizzaria logo" id = "brand-logo" >
            </a>
            <div class ="collapse navbar-collapse" id="navbarNav">
                <ul class ="navbar-nav">
                    <li class ="nav-item active">
                        <a href="index.php" class="nav-link">Peça sua pizza</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <?php if($msg != ""): ?>
        <div class="alert alert-<?=$status?>">
            <p><?=$msg ?></p>
        </div>
    <?php endif; ?>