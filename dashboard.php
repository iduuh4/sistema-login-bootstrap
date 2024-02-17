<!-- página que irá mostrar dps q o usuario estiver logado -->
<?php
session_start();

//verificação caso o usuario esteja logado
if (empty($_SESSION)) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"> Sistema do Eduardo</a>
            <?php
            print "Olá, " . $_SESSION["nome"];
            ?>
            <a href="logout.php" class="btn btn-danger">Sair</a>
        </div>

    </nav>

</body>

</html>