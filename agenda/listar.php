<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Eventos</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<style>
        body{
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
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


<div id="content-2">

<?php
$host = "localhost";
$port = "3306";
$user = "root";
$pass = "";
$base = "agendaily";
$con = mysqli_connect($host, $user, $pass, $base);
$res = mysqli_query($con,"SELECT * FROM evento");
echo "<table border=3px><tr><th width='200px'>Código do Evento</th><th width='500px'>Nome do evento</th><th width='250px'>Data do Evento</th><th width='120px'>Hora de Inicio do Evento</th><th width='120px'>Hora de Fim do Evento</th><th width='500px'>Descrição do Evento</th><th width='300px'>Local do Evento</th><th width='300px'>Responsável Evento</th></tr>";
while($escrever=mysqli_fetch_array($res)){
    $data = implode("/", array_reverse(explode("-", $escrever['data_event'])));
    echo "<tr><td>".$escrever['cod_event']."</td><td>".$escrever['nome_event']."</td><td>".$data."</td><td>".$escrever['hrs_inicio']."</td><td>".$escrever['hrs_fim']."</td><td>".$escrever['desc_event']."</td><td>".$escrever['local_event']."</td><td>".$escrever['responsa_eve']."</td></tr>";
    
}
echo "</table>";

echo "</br></br>";

mysqli_close($con);
?>
</div>


</body>
</html>
