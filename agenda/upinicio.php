<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Hora de Inicio</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div id="sidebar-left">
    <ul>
        <li><a href="index.php">Index</a></li>
        <li><a href="cadastrar.php">Cadastar evento</a></li>
        <li><a href="Consultar.php">Consultar evento</a></li>
        <li><a href="listar.php">Listar todos os eventos</a></li>
        <li><a href="atualizar.php">Atualizar evento</a></li>
        <li><a href="remover.php">Remover evento</a></li>
    </ul>
</div>

<div id="content">
    <h2></h2>
</div>

<div id="content">
<div class="container">
        <h1>Atualizar Hora de Inicio do Evento</h1>
    <form method="post" action="valida_upinicio.php">
    <div class="form-group">
                <label for="id">Código do Evento:</label>
                <input type="text" id="id" name="id">
            </div>

            <div class="form-group" align="center">
                <label for="inicio">Hora de Inicio do Evento:</label>
                <input type="time" id="inicio" name="inicio">
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar">
            </div>
    </form>
</div>
</div>
</body>
</html>