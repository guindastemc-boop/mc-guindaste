<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header('Location: ../../public/index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>MC - Guindaste | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">MC - Guindaste</span>
        <a href="../../public/logout.php" class="btn btn-outline-light btn-sm">Sair</a>
    </div>
</nav>

<div class="container mt-4">
    <h4>Dashboard</h4>
    <p>Bem-vindo, <?= htmlspecialchars($_SESSION['usuario_nome']) ?>.</p>

    <div class="row g-3">
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>Ordens abertas</h6>
                    <h3>0</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>Em execução</h6>
                    <h3>0</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>Finalizadas</h6>
                    <h3>0</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>Itens em estoque</h6>
                    <h3>0</h3>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
