<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Aulas</title>
    <link rel="stylesheet" href="../../public/style/tb.css">
</head>
<body>

<table>
    <tr>
        <th>Dia</th>
        <th>Hora</th>
        <th>Professor</th>
        <th>Aulas</th>
    </tr>
    <?php
    // Configurações do banco de dados
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'salas';

    // Cria a conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Consulta SQL
    $sql = "SELECT `dia`, `hora`, `professor`, `aulas` FROM `1aa`";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["dia"] . "</td>";
            echo "<td>" . $row["hora"] . "</td>";
            echo "<td>" . $row["professor"] . "</td>";
            echo "<td>" . $row["aulas"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Nenhum resultado encontrado.</td></tr>";
    }

    $conn->close();
    ?>
</table>

</body>
</html>
