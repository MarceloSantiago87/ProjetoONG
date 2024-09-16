<?php
$titulo = "Apadrinhe um dos nossos pets";
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php echo $titulo; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/footer.css">
    </head>

    <body>

        <?php include '../Componentes/header.php'; ?>

        <div>
            <h1>Apadrinhe um pet!</h1>
            <p>Descrição ou conteúdo principal da página.</p>
        </div>

        <?php include '../Componentes/footer.php'; ?>

    </body>

    <script src="/JavaScript/index.js"></script>
</html>