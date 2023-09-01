<!DOCTYPE html>
<html>
    
<div class="texy">
        <h2>Horário Escolar <?php echo("- $_GET[dia]");
        
        
        ?></h2>
    </div>
<head>
    <style>
        body {
            background-color: #022656;
            margin: 0; 
            padding: 0;
            font-family: Arial, sans-serif;
            margin-top: 11%;
        }
        
        .texy {
            text-align: center;
            margin-top: 20px;
            color: #ffffff;
        }

        .table-container {
            overflow: hidden;
            border-radius: 20px;
            background-color: transparent;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
            background: linear-gradient(135deg, #FF6B6B, #1B9CFC);
            border-radius: 10px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            color: black; 
        }

        th {
            background-color: #f2f2f2;
            color: black; 
        }

        tr:hover {
            background-color: #f8e0e0;
        }
    </style>
</head>

  

<body>
    

    <div class="table-container">
        <table>
            <tr>
                <th>Hora</th>
                <th>Aula</th>
                <th>Professor</th>
                <th>Série</th>
            </tr>

            <?php
            $mysqli = mysqli_connect("localhost", "root", "", "teste");

            if (!$mysqli) {
                die("Erro na conexão: " . mysqli_connect_error());
            }

            $sql = "SELECT `horario`, `aula`, `professor`, `serie` FROM `tabelareal` WHERE dia = '$_GET[dia]' AND serie ='EJA' ORDER BY horario"; 
            $result = mysqli_query($mysqli, $sql);
            
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["horario"] . "</td>";
                    echo "<td>" . $row["aula"] . "</td>";
                    echo "<td>" . $row["professor"] . "</td>";
                    echo "<td>" . $row["serie"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "Erro ao executar a consulta: " . mysqli_error($mysqli);
            }

            mysqli_close($mysqli);
            ?>
        </table>
    </div>
</body>
</html>
