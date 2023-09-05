<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../public/style/DIAS.CSS">
</head>

<body>
    <div class="container">
        <div class="shape" onclick="redirectTo('http://localhost/sageal-moderno/app/views/dia.php?dia=Segunda')">
            <div class="text">SEGUNDA</div>
        </div>
        <div class="shape" onclick="redirectTo('http://localhost/sageal-moderno/app/views/dia.php?dia=Terça')">
            <div class="text">TERÇA</div>
        </div>
        <div class="shape" onclick="redirectTo('http://localhost/sageal-moderno/app/views/dia.php?dia=Quarta')">
            <div class="text">QUARTA</div>
        </div>
        <div class="shape" onclick="redirectTo('http://localhost/sageal-moderno/app/views/dia.php?dia=Quinta')">
            <div class="text">QUINTA</div>
        </div>
        <div class="shape" onclick="redirectTo('http://localhost/sageal-moderno/app/views/dia.php?dia=Sexta')">
            <div class="text">SEXTA</div>
        </div>
    </div>

    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>
onclick="a href = ('dia.php?dia=segunda')