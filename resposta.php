<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
                <pre>
                <?php
                    $uasg = $_GET["uasg"] ?? 0;
                    $pregao = $_GET["pregao"] ?? 0;
                    $url = "http://comprasnet.gov.br/livre/Pregao/FornecedorResultadoDecreto.asp?prgcod=1052850&f_lstSrp=&f_Uf=&f_numPrp=" . $pregao. "&f_coduasg=" . $uasg . "&f_codMod=5&f_tpPregao=E&f_lstICMS=&f_dtAberturaIni=&f_dtAberturaFim=";

                    echo("$url")
                ?>
                </pre>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>
</body>
</html>