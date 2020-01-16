<?php
header("Refresh: 5");
?>
<html>
    <head>
        <title>Tela Principal</title>
        <meta charset = "UTF-8">
        <style>

            #cabecalho{
                position: relative;
                width: 1170px;
                left: 10px;
                font: bold 25px san - serif;
                background-color:#DCDCDC;
                text-align: center;
                border-radius: 20px;
                margin:10px;
                border-bottom: 3px solid black;
                text-shadow: 1px 1px;
            }
            #tela{
                height: 600px;
                width:1000px;
                font: bold 20px san - serif;
                text-align:center;
            }

            #controlePlaca{
                text-decoration: underline;
                position: absolute;
                height: 270px;
                width:450px;
                left: 30px;
                border:5px solid #DCDCDC;
                border-radius: 5px;
                background: rgb(242, 246, 248); /* Old browsers */
                background: -moz-linear-gradient(45deg, rgba(242, 246, 248, 1) 0%, rgba(216, 225, 231, 1) 50%, rgba(181, 198, 208, 1) 51%, rgba(224, 239, 249, 1) 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(45deg, rgba(242, 246, 248, 1) 0%, rgba(216, 225, 231, 1) 50%, rgba(181, 198, 208, 1) 51%, rgba(224, 239, 249, 1) 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(45deg, rgba(242, 246, 248, 1) 0%, rgba(216, 225, 231, 1) 50%, rgba(181, 198, 208, 1) 51%, rgba(224, 239, 249, 1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr = '#f2f6f8', endColorstr = '#e0eff9', GradientType = 1 ); /* IE6-9 fallback on horizontal gradient */
            }
            #controBateria{
                text-decoration: underline;
                position: absolute;
                height: 270px;
                width:450px;
                left: 500px;
                border:5px solid #DCDCDC;
                border-radius: 5px;
                background: rgb(242, 246, 248); /* Old browsers */
                background: -moz-linear-gradient(45deg, rgba(242, 246, 248, 1) 0%, rgba(216, 225, 231, 1) 50%, rgba(181, 198, 208, 1) 51%, rgba(224, 239, 249, 1) 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(45deg, rgba(242, 246, 248, 1) 0%, rgba(216, 225, 231, 1) 50%, rgba(181, 198, 208, 1) 51%, rgba(224, 239, 249, 1) 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(45deg, rgba(242, 246, 248, 1) 0%, rgba(216, 225, 231, 1) 50%, rgba(181, 198, 208, 1) 51%, rgba(224, 239, 249, 1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr = '#f2f6f8', endColorstr = '#e0eff9', GradientType = 1

            }

        </style>
        <style>
            #infPlaca{
                position: relative;
                text-decoration: underline;
                height: 270px;
                width:920px;
                left: 23px;
                top: 290px;
                border:5px solid #DCDCDC;
                border-radius: 5px;
                background: rgb(242, 246, 248); /* Old browsers */
                background: -moz-linear-gradient(45deg, rgba(242, 246, 248, 1) 0%, rgba(216, 225, 231, 1) 50%, rgba(181, 198, 208, 1) 51%, rgba(224, 239, 249, 1) 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(45deg, rgba(242, 246, 248, 1) 0%, rgba(216, 225, 231, 1) 50%, rgba(181, 198, 208, 1) 51%, rgba(224, 239, 249, 1) 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(45deg, rgba(242, 246, 248, 1) 0%, rgba(216, 225, 231, 1) 50%, rgba(181, 198, 208, 1) 51%, rgba(224, 239, 249, 1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr = '#f2f6f8', endColorstr = '#e0eff9', GradientType = 1

            }
        </style>
        <style>
            #CabeçalhoValores{
                position: relative;
                text-decoration: underline;
                height: 559px; /* altura */
                width:225px; /* largura */
                left: 960px; /* esquerda */
                top: -280px;
                border:5px solid #DCDCDC;
                border-radius: 5px;
                background: rgb(242, 246, 248); /* Old browsers */
                background: -moz-linear-gradient(45deg, rgba(242, 246, 248, 1) 0%, rgba(216, 225, 231, 1) 50%, rgba(181, 198, 208, 1) 51%, rgba(224, 239, 249, 1) 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(45deg, rgba(242, 246, 248, 1) 0%, rgba(216, 225, 231, 1) 50%, rgba(181, 198, 208, 1) 51%, rgba(224, 239, 249, 1) 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(45deg, rgba(242, 246, 248, 1) 0%, rgba(216, 225, 231, 1) 50%, rgba(181, 198, 208, 1) 51%, rgba(224, 239, 249, 1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr = '#f2f6f8', endColorstr = '#e0eff9', GradientType = 1
            }

        </style>
    </head>
    <body>
        <div id = "tela">
            <div id = "cabecalho">
                Tela de Acompanhamento da Placa Solar
            </div>
            <div id = "controlePlaca" onload = teste() >

                <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                google.charts.load('current', {'packages': ['gauge']});
                google.charts.setOnLoadCallback(drawChart);
<?php

function valorGrafico_tensao() {
    $registro = [];
    $contador = 0;
    $contadorFor = 0;
    require_once 'conexao.php';
    $conexao = novaConexao();
    $sql = 'SELECT valor_tensao FROM dados_tensao';
    $resultado = $conexao->query($sql);
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $registro[] = $row;
            $contador = $contador + 1;
        }
    }
    foreach ($registro as $registro) {
        if ($contadorFor === $contador - 1) {
            $valorGrafico1 = $registro["valor_tensao"];
        }
        $contadorFor = $contadorFor + 1;
    }
    return $valorGrafico1;
}

function valorGrafico_corrente() {
    $registro_corrente = [];
    $contador_corrente = 0;
    $contadorFor_corrente = 0;
    require_once 'conexao.php';
    $conexao = novaConexao();
    $sql_corrente = 'SELECT valor_corrente FROM dados_corrente';
    $resultado_corrente = $conexao->query($sql_corrente);
    if ($resultado_corrente->num_rows > 0) {
        while ($row_corrente = $resultado_corrente->fetch_assoc()) {
            $registro_corrente[] = $row_corrente;
            $contador_corrente = $contador_corrente + 1;
        }
    }
    foreach ($registro_corrente as $registro_corrente) {
        if ($contadorFor_corrente === $contador_corrente - 1) {
            $valorGrafico_corrente = $registro_corrente["valor_corrente"];
        }
        $contadorFor_corrente = $contadorFor_corrente + 1;
    }
    return $valorGrafico_corrente;
}
?>
                function drawChart() {

                    var valor_tensao = "<?php
$valor = valorGrafico_tensao();
echo $valor;
?>";
                    var valor_grafico_tensao = valor_tensao - 0;
                    var valor_corrente = "<?php
$valor_corrente = valorGrafico_corrente();
echo $valor_corrente;
?>";
                    var valor_grafico_corrente = valor_corrente - 0;
                    var data = google.visualization.arrayToDataTable([
                        ['Label', 'Value'],
                        ['Tensão', valor_grafico_tensao]

                    ]);
                    var data2 = google.visualization.arrayToDataTable([
                        ['Label', 'Value'],
                        ['Corrente', valor_grafico_corrente]

                    ]);
                    var options = {
                        width: 400, height: 220,
                        redFrom: 9, redTo: 10,
                        yellowFrom: 7, yellowTo: 9,
                        minorTicks: 5, max: 10
                    };
                    var options2 = {
                        width: 400, height: 220,
                        redFrom: 900, redTo: 1000,
                        yellowFrom: 750, yellowTo: 900,
                        minorTicks: 5, max: 1000
                    };
                    var chart = new google.visualization.Gauge(document.getElementById('chart_div2'));
                    chart.draw(data2, options2);
                    var chart = new google.visualization.Gauge(document.getElementById('chart_div'));
                    chart.draw(data, options);
                }
                </script>

                <body>
                    <div id="chart_div" style="left: 05px; top: 30px; position: absolute;"></div>

                </body>
                <body>

                    <div id="chart_div2" style="left: 230px; top: 30px; position: absolute;"></div>
                </body>

            </div>
            <div id="controBateria">
                <?php

                function carregaGraficoPotecia($verificadorPotencia) {
                    require_once 'conexao.php';
                    $contadorPotenciaCorrente = 0;
                    $contadorPotenciaTensao = 0;
                    $conexaoPotencia = novaConexao();
                    $sqlTensaoPotencia = 'select*from dados_tensao';
                    $sqlCorrentePotencia = 'select*from dados_corrente';
                    $resultadoTensaoPotencia = $conexaoPotencia->query($sqlTensaoPotencia);
                    $resultadoCorrentePotencia = $conexaoPotencia->query($sqlCorrentePotencia);
                    if ($resultadoTensaoPotencia->num_rows > 0) {
                        while ($row_PotenciaTensao = $resultadoTensaoPotencia->fetch_assoc()) {
                            $registro_PotenciaTensao[] = $row_PotenciaTensao;
                            $contadorPotenciaTensao += 1;
                        }
                    }
                    if ($resultadoCorrentePotencia->num_rows > 0) {
                        while ($row_PotenciaCorrente = $resultadoCorrentePotencia->fetch_assoc()) {
                            $registro_PotenciaCorrente[] = $row_PotenciaCorrente;
                            $contadorPotenciaCorrente += 1;
                        }
                    }
                    $contadorForPotenciaCorrente = 0;
                    $contadorForPotenciaTensao = 0;
                    switch ($verificadorPotencia) {
                        case 8:
                            if ($contadorPotenciaCorrente >= 8) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 1) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["valor_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }
                            if ($contadorPotenciaTensao >= 8) {
                                foreach ($registro_PotenciaTensao as $registro_PotenciaTensao) {
                                    if ($contadorForPotenciaTensao === $contadorPotenciaTensao - 1) {
                                        $valorFraficoTensao = $registro_PotenciaTensao["valor_tensao"];
                                    }
                                    $contadorForPotenciaTensao += 1;
                                }
                            }
                            if (($contadorPotenciaCorrente >= 8) && ($contadorPotenciaTensao >= 8)) {
                                $resultadoPotencia = $valorFraficoTensao * $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        case 7:
                            if ($contadorPotenciaCorrente >= 8) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 2) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["valor_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }
                            if ($contadorPotenciaTensao >= 8) {
                                foreach ($registro_PotenciaTensao as $registro_PotenciaTensao) {
                                    if ($contadorForPotenciaTensao === $contadorPotenciaTensao - 2) {
                                        $valorFraficoTensao = $registro_PotenciaTensao["valor_tensao"];
                                    }
                                    $contadorForPotenciaTensao += 1;
                                }
                            }
                            if (($contadorPotenciaCorrente >= 8) && ($contadorPotenciaTensao >= 8)) {
                                $resultadoPotencia = $valorFraficoTensao * $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        case 6:
                            if ($contadorPotenciaCorrente >= 6) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 3) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["valor_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }
                            if ($contadorPotenciaTensao >= 8) {
                                foreach ($registro_PotenciaTensao as $registro_PotenciaTensao) {
                                    if ($contadorForPotenciaTensao === $contadorPotenciaTensao - 3) {
                                        $valorFraficoTensao = $registro_PotenciaTensao["valor_tensao"];
                                    }
                                    $contadorForPotenciaTensao += 1;
                                }
                            }
                            if (($contadorPotenciaCorrente >= 8) && ($contadorPotenciaTensao >= 8)) {
                                $resultadoPotencia = $valorFraficoTensao * $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        case 5:
                            if ($contadorPotenciaCorrente >= 5) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 4) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["valor_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }
                            if ($contadorPotenciaTensao >= 8) {
                                foreach ($registro_PotenciaTensao as $registro_PotenciaTensao) {
                                    if ($contadorForPotenciaTensao === $contadorPotenciaTensao - 4) {
                                        $valorFraficoTensao = $registro_PotenciaTensao["valor_tensao"];
                                    }
                                    $contadorForPotenciaTensao += 1;
                                }
                            }
                            if (($contadorPotenciaCorrente >= 8) && ($contadorPotenciaTensao >= 8)) {
                                $resultadoPotencia = $valorFraficoTensao * $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        case 4:
                            if ($contadorPotenciaCorrente >= 4) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 5) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["valor_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }
                            if ($contadorPotenciaTensao >= 8) {
                                foreach ($registro_PotenciaTensao as $registro_PotenciaTensao) {
                                    if ($contadorForPotenciaTensao === $contadorPotenciaTensao - 5) {
                                        $valorFraficoTensao = $registro_PotenciaTensao["valor_tensao"];
                                    }
                                    $contadorForPotenciaTensao += 1;
                                }
                            }
                            if (($contadorPotenciaCorrente >= 8) && ($contadorPotenciaTensao >= 8)) {
                                $resultadoPotencia = $valorFraficoTensao * $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        case 3:
                            if ($contadorPotenciaCorrente >= 3) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 6) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["valor_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }
                            if ($contadorPotenciaTensao >= 8) {
                                foreach ($registro_PotenciaTensao as $registro_PotenciaTensao) {
                                    if ($contadorForPotenciaTensao === $contadorPotenciaTensao - 6) {
                                        $valorFraficoTensao = $registro_PotenciaTensao["valor_tensao"];
                                    }
                                    $contadorForPotenciaTensao += 1;
                                }
                            }
                            if (($contadorPotenciaCorrente >= 8) && ($contadorPotenciaTensao >= 8)) {
                                $resultadoPotencia = $valorFraficoTensao * $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        case 2:
                            if ($contadorPotenciaCorrente >= 4) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 7) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["valor_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }
                            if ($contadorPotenciaTensao >= 8) {
                                foreach ($registro_PotenciaTensao as $registro_PotenciaTensao) {
                                    if ($contadorForPotenciaTensao === $contadorPotenciaTensao - 7) {
                                        $valorFraficoTensao = $registro_PotenciaTensao["valor_tensao"];
                                    }
                                    $contadorForPotenciaTensao += 1;
                                }
                            }
                            if (($contadorPotenciaCorrente >= 8) && ($contadorPotenciaTensao >= 8)) {
                                $resultadoPotencia = $valorFraficoTensao * $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        case 1:
                            if ($contadorPotenciaCorrente >= 4) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 8) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["valor_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }
                            if ($contadorPotenciaTensao >= 8) {
                                foreach ($registro_PotenciaTensao as $registro_PotenciaTensao) {
                                    if ($contadorForPotenciaTensao === $contadorPotenciaTensao - 8) {
                                        $valorFraficoTensao = $registro_PotenciaTensao["valor_tensao"];
                                    }
                                    $contadorForPotenciaTensao += 1;
                                }
                            }
                            if (($contadorPotenciaCorrente >= 8) && ($contadorPotenciaTensao >= 8)) {
                                $resultadoPotencia = $valorFraficoTensao * $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        case 9:
                            if ($contadorPotenciaCorrente >= 8) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 1) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["data_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }

                            if ($contadorPotenciaCorrente >= 8) {
                                $resultadoPotencia = $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        case 10:
                            if ($contadorPotenciaCorrente >= 8) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 2) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["data_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }
                            if ($contadorPotenciaCorrente >= 8) {
                                $resultadoPotencia = $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        case 11:
                            if ($contadorPotenciaCorrente >= 6) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 3) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["data_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }
                            if ($contadorPotenciaCorrente >= 8) {
                                $resultadoPotencia = $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        case 12:
                            if ($contadorPotenciaCorrente >= 6) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 4) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["data_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }
                            if ($contadorPotenciaCorrente >= 8) {
                                $resultadoPotencia = $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        case 13:
                            if ($contadorPotenciaCorrente >= 6) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 5) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["data_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }
                            if ($contadorPotenciaCorrente >= 8) {
                                $resultadoPotencia = $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        case 14:
                            if ($contadorPotenciaCorrente >= 6) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 6) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["data_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }
                            if ($contadorPotenciaCorrente >= 8) {
                                $resultadoPotencia = $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        case 15:
                            if ($contadorPotenciaCorrente >= 6) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 7) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["data_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }
                            if ($contadorPotenciaCorrente >= 8) {
                                $resultadoPotencia = $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        case 16:
                            if ($contadorPotenciaCorrente >= 6) {
                                foreach ($registro_PotenciaCorrente as $registro_PotenciaCorrente) {
                                    if ($contadorForPotenciaCorrente === $contadorPotenciaCorrente - 8) {
                                        $valorGraficoCorrente = $registro_PotenciaCorrente["data_corrente"];
                                    }
                                    $contadorForPotenciaCorrente += 1;
                                }
                            }
                            if ($contadorPotenciaCorrente >= 8) {
                                $resultadoPotencia = $valorGraficoCorrente;
                                return $resultadoPotencia;
                            } else {
                                return "";
                            }
                            break;
                        default: null;
                    }
                }
                ?>
                <script>
                    var posicao8 = <?php
                $posicao8 = carregaGraficoPotecia(8);
                echo $posicao8;
                ?> - 0;
                    var posicao7 = <?php
                $posicao7 = carregaGraficoPotecia(7);
                echo $posicao7;
                ?> - 0;
                    var posicao6 = <?php
                $posicao6 = carregaGraficoPotecia(6);
                echo $posicao6;
                ?> - 0;
                    var posicao5 = <?php
                $posicao5 = carregaGraficoPotecia(5);
                echo $posicao5;
                ?> - 0;
                    var posicao4 = <?php
                $posicao4 = carregaGraficoPotecia(4);
                echo $posicao4;
                ?> - 0;
                    var posicao3 = <?php
                $posicao3 = carregaGraficoPotecia(3);
                echo $posicao3;
                ?> - 0;
                    var posicao2 = <?php
                $posicao2 = carregaGraficoPotecia(2);
                echo $posicao2;
                ?> - 0;
                    var posicao1 = <?php
                $posicao1 = carregaGraficoPotecia(1);
                echo $posicao1;
                ?> - 0;
                    var data8 = <?php
                $data8 = carregaGraficoPotecia(9);
                $hora = substr($data8, 11, 8);
                echo "'" . $hora . "'";
                ?>;
                    var data7 = <?php
                $data7 = carregaGraficoPotecia(10);
                $hora7 = substr($data7, 11, 8);
                echo "'" . $hora7 . "'";
                ?>;
                    var data6 = <?php
                $data6 = carregaGraficoPotecia(11);
                $hora6 = substr($data6, 11, 8);
                echo "'" . $hora6 . "'";
                ?>;
                    var data5 = <?php
                $data5 = carregaGraficoPotecia(12);
                $hora5 = substr($data5, 11, 8);
                echo "'" . $hora5 . "'";
                ?>;
                    var data4 = <?php
                $data4 = carregaGraficoPotecia(13);
                $hora4 = substr($data4, 11, 8);
                echo "'" . $hora4 . "'";
                ?>;
                    var data3 = <?php
                $data3 = carregaGraficoPotecia(14);
                $hora3 = substr($data3, 11, 8);
                echo "'" . $hora3 . "'";
                ?>;
                    var data2 = <?php
                $data2 = carregaGraficoPotecia(15);
                $hora2 = substr($data2, 11, 8);
                echo "'" . $hora2 . "'";
                ?>;
                    var data1 = <?php
                $data1 = carregaGraficoPotecia(16);
                $hora1 = substr($data1, 11, 8);
                echo "'" . $hora1 . "'";
                ?>;
                </script>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {'packages': ['corechart']});
                    google.charts.setOnLoadCallback(drawChart);
                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Horario', 'Potencia'],
                            [data1, posicao1],
                            [data2, posicao2],
                            [data3, posicao3],
                            [data4, posicao4],
                            [data5, posicao5],
                            [data6, posicao6],
                            [data7, posicao7],
                            [data8, posicao8]
                        ]);
                        var options = {
                            title: 'Grafico Potencia',
                            hAxis: {title: 'Horário', titleTextStyle: {color: '#333'}},
                            vAxis: {minValue: 0}
                        };
                        var chart = new google.visualization.AreaChart(document.getElementById('chart_divPotencia'));
                        chart.draw(data, options);
                    }
                </script>
                <div id="chart_divPotencia" style="width: 450px; height: 260px;"></div>
            </div>
            <div id="infPlaca">
                <?php

                function carregaGraficoTensaoCorrente($parametroGraficoTensaoCorrente) {
                    require_once 'conexao.php';
                    $contadorCorrente2 = 0;
                    $contadorTensao2 = 0;
                    $conexaoPotencia = novaConexao();
                    $sqlTensao = 'select*from dados_tensao';
                    $sqlCorrente = 'select*from dados_corrente';
                    $resultadoTensao = $conexaoPotencia->query($sqlTensao);
                    $resultadoCorrente = $conexaoPotencia->query($sqlCorrente);
                    if ($resultadoTensao->num_rows > 0) {
                        while ($row_Tensao = $resultadoTensao->fetch_assoc()) {
                            $registro_Tensao[] = $row_Tensao;
                            $contadorTensao2 += 1;
                        }
                    }
                    if ($resultadoCorrente->num_rows > 0) {
                        while ($row_Corrente = $resultadoCorrente->fetch_assoc()) {
                            $registro_Corrente[] = $row_Corrente;
                            $contadorCorrente2 += 1;
                        }
                    }
                    $contadorForCorrente = 0;
                    $contadorForTensao = 0;
                    if ($parametroGraficoTensaoCorrente <= 15) {
                        foreach ($registro_Corrente as $registro_Corrente) {
                            if ($contadorForCorrente === $contadorCorrente2 - $parametroGraficoTensaoCorrente) {
                                $valorGraficoCorrente1 = $registro_Corrente["valor_corrente"];
                            }
                            $contadorForCorrente += 1;
                        }
                        return $valorGraficoCorrente1;
                    }
                    if (($parametroGraficoTensaoCorrente > 15) && ($parametroGraficoTensaoCorrente <= 30)) {
                        foreach ($registro_Tensao as $registro_Tensao) {
                            if ($contadorForTensao === $contadorTensao2 - ($parametroGraficoTensaoCorrente - 15)) {
                                $valorGraficoTensao1 = $registro_Tensao["valor_tensao"];
                            }
                            $contadorForTensao += 1;
                        }
                        return $valorGraficoTensao1;
                    }
                    if ($parametroGraficoTensaoCorrente > 30) {
                        foreach ($registro_Corrente as $registro_Corrente) {
                            if ($contadorForCorrente === $contadorCorrente2 - ($parametroGraficoTensaoCorrente - 30)) {
                                $valordata = $registro_Corrente["data_corrente"];
                            }
                            $contadorForCorrente += 1;
                        }
                        return $valordata;
                    }
                }
                ?>
                <script>
                    var valorCorrente1 = <?php
                $valorCorrente1 = carregaGraficoTensaoCorrente(1);
                echo $valorCorrente1;
                ?> - 0;
                    var valorCorrente2 = <?php
                $valorCorrente2 = carregaGraficoTensaoCorrente(2);
                echo $valorCorrente2;
                ?> - 0;
                    var valorCorrente3 =<?php
                $valorCorrente3 = carregaGraficoTensaoCorrente(3);
                echo $valorCorrente3;
                ?> - 0;
                    var valorCorrente4 = <?php
                $valorCorrente4 = carregaGraficoTensaoCorrente(4);
                echo $valorCorrente4;
                ?> - 0;
                    var valorCorrente5 =<?php
                $valorCorrente5 = carregaGraficoTensaoCorrente(5);
                echo $valorCorrente5;
                ?> - 0;
                    var valorCorrente6 =<?php
                $valorCorrente6 = carregaGraficoTensaoCorrente(6);
                echo $valorCorrente6;
                ?> - 0;
                    var valorCorrente7 =<?php
                $valorCorrente7 = carregaGraficoTensaoCorrente(7);
                echo $valorCorrente7;
                ?> - 0;
                    var valorCorrente8 =<?php
                $valorCorrente8 = carregaGraficoTensaoCorrente(8);
                echo $valorCorrente8;
                ?> - 0;
                    var valorCorrente9 = <?php
                $valorCorrente9 = carregaGraficoTensaoCorrente(9);
                echo $valorCorrente9;
                ?> - 0;
                    var valorCorrente10 = <?php
                $valorCorrente10 = carregaGraficoTensaoCorrente(10);
                echo $valorCorrente10;
                ?> - 0;
                    var valorCorrente11 =<?php
                $valorCorrente11 = carregaGraficoTensaoCorrente(11);
                echo $valorCorrente11;
                ?> - 0;
                    var valorCorrente12 = <?php
                $valorCorrente12 = carregaGraficoTensaoCorrente(12);
                echo $valorCorrente12;
                ?> - 0;
                    var valorCorrente13 =<?php
                $valorCorrente13 = carregaGraficoTensaoCorrente(13);
                echo $valorCorrente13;
                ?> - 0;
                    var valorCorrente14 =<?php
                $valorCorrente14 = carregaGraficoTensaoCorrente(14);
                echo $valorCorrente14;
                ?> - 0;
                    var valorCorrente15 =<?php
                $valorCorrente15 = carregaGraficoTensaoCorrente(15);
                echo $valorCorrente15;
                ?> - 0;

                    var valorTensao1 = <?php
                $valorTensao1 = carregaGraficoTensaoCorrente(16);
                echo $valorTensao1;
                ?> - 0;
                    var valorTensao2 = <?php
                $valorTensao2 = carregaGraficoTensaoCorrente(17);
                echo $valorTensao2;
                ?> - 0;
                    var valorTensao3 =<?php
                $valorTensao3 = carregaGraficoTensaoCorrente(18);
                echo $valorTensao3;
                ?> - 0;
                    var valorTensao4 = <?php
                $valorTensao4 = carregaGraficoTensaoCorrente(19);
                echo $valorTensao4;
                ?> - 0;
                    var valorTensao5 =<?php
                $valorTensao5 = carregaGraficoTensaoCorrente(20);
                echo $valorTensao5;
                ?> - 0;
                    var valorTensao6 =<?php
                $valorTensao6 = carregaGraficoTensaoCorrente(21);
                echo $valorTensao6;
                ?> - 0;
                    var valorTensao7 =<?php
                $valorTensao7 = carregaGraficoTensaoCorrente(22);
                echo $valorTensao7;
                ?> - 0;
                    var valorTensao8 =<?php
                $valorTensao8 = carregaGraficoTensaoCorrente(23);
                echo $valorTensao8;
                ?> - 0;
                    var valorTensao9 = <?php
                $valorTensao9 = carregaGraficoTensaoCorrente(24);
                echo $valorTensao9;
                ?> - 0;
                    var valorTensao10 = <?php
                $valorTensao10 = carregaGraficoTensaoCorrente(25);
                echo $valorTensao10;
                ?> - 0;
                    var valorTensao11 =<?php
                $valorTensao11 = carregaGraficoTensaoCorrente(26);
                echo $valorTensao11;
                ?> - 0;
                    var valorTensao12 = <?php
                $valorTensao12 = carregaGraficoTensaoCorrente(27);
                echo $valorTensao12;
                ?> - 0;
                    var valorTensao13 =<?php
                $valorTensao13 = carregaGraficoTensaoCorrente(28);
                echo $valorTensao13;
                ?> - 0;
                    var valorTensao14 =<?php
                $valorTensao14 = carregaGraficoTensaoCorrente(29);
                echo $valorTensao14;
                ?> - 0;
                    var valorTensao15 =<?php
                $valorTensao15 = carregaGraficoTensaoCorrente(30);
                echo $valorTensao15;
                ?> - 0;


                    var valordata1 = <?php
                $valordata1 = carregaGraficoTensaoCorrente(31);
                $valorhora1 = substr($valordata1, 11, 8);
                echo "'" . $valorhora1 . "'";
                ?>;
                    var valordata2 = <?php
                $valordata1 = carregaGraficoTensaoCorrente(32);
                $valorhora1 = substr($valordata1, 11, 8);
                echo "'" . $valorhora1 . "'";
                ?>;
                    var valordata3 = <?php
                $valordata1 = carregaGraficoTensaoCorrente(33);
                $valorhora1 = substr($valordata1, 11, 8);
                echo "'" . $valorhora1 . "'";
                ?>;
                    var valordata4 = <?php
                $valordata1 = carregaGraficoTensaoCorrente(34);
                $valorhora1 = substr($valordata1, 11, 8);
                echo "'" . $valorhora1 . "'";
                ?>;
                    var valordata5 = <?php
                $valordata1 = carregaGraficoTensaoCorrente(35);
                $valorhora1 = substr($valordata1, 11, 8);
                echo "'" . $valorhora1 . "'";
                ?>;
                    var valordata6 = <?php
                $valordata1 = carregaGraficoTensaoCorrente(36);
                $valorhora1 = substr($valordata1, 11, 8);
                echo "'" . $valorhora1 . "'";
                ?>;
                    var valordata7 = <?php
                $valordata1 = carregaGraficoTensaoCorrente(37);
                $valorhora1 = substr($valordata1, 11, 8);
                echo "'" . $valorhora1 . "'";
                ?>;
                    var valordata8 = <?php
                $valordata1 = carregaGraficoTensaoCorrente(38);
                $valorhora1 = substr($valordata1, 11, 8);
                echo "'" . $valorhora1 . "'";
                ?>;
                    var valordata9 = <?php
                $valordata1 = carregaGraficoTensaoCorrente(39);
                $valorhora1 = substr($valordata1, 11, 8);
                echo "'" . $valorhora1 . "'";
                ?>;

                    var valordata10 = <?php
                $valordata1 = carregaGraficoTensaoCorrente(40);
                $valorhora1 = substr($valordata1, 11, 8);
                echo "'" . $valorhora1 . "'";
                ?>;
                    var valordata11 = <?php
                $valordata1 = carregaGraficoTensaoCorrente(41);
                $valorhora1 = substr($valordata1, 11, 8);
                echo "'" . $valorhora1 . "'";
                ?>;
                    var valordata12 = <?php
                $valordata1 = carregaGraficoTensaoCorrente(42);
                $valorhora1 = substr($valordata1, 11, 8);
                echo "'" . $valorhora1 . "'";
                ?>;
                    var valordata13 = <?php
                $valordata1 = carregaGraficoTensaoCorrente(43);
                $valorhora1 = substr($valordata1, 11, 8);
                echo "'" . $valorhora1 . "'";
                ?>;
                    var valordata14 = <?php
                $valordata1 = carregaGraficoTensaoCorrente(44);
                $valorhora1 = substr($valordata1, 11, 8);
                echo "'" . $valorhora1 . "'";
                ?>;
                    var valordata15 = <?php
                $valordata1 = carregaGraficoTensaoCorrente(45);
                $valorhora1 = substr($valordata1, 11, 8);
                echo "'" . $valorhora1 . "'";
                ?>;

                </script>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {'packages': ['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var dataTensaoCorrente = google.visualization.arrayToDataTable([
                            ['Horario', 'Tensão', 'Corrente'],
                            [valordata15, valorTensao15, valorCorrente15],
                            [valordata14, valorTensao14, valorCorrente14],
                            [valordata13, valorTensao13, valorCorrente13],
                            [valordata12, valorTensao12, valorCorrente12],
                            [valordata11, valorTensao11, valorCorrente11],
                            [valordata10, valorTensao10, valorCorrente10],
                            [valordata9, valorTensao9, valorCorrente9],
                            [valordata8, valorTensao8, valorCorrente8],
                            [valordata7, valorTensao7, valorCorrente7],
                            [valordata6, valorTensao6, valorCorrente6],
                            [valordata5, valorTensao5, valorCorrente5],
                            [valordata4, valorTensao4, valorCorrente4],
                            [valordata3, valorTensao3, valorCorrente3],
                            [valordata2, valorTensao2, valorCorrente2],
                            [valordata1, valorTensao1, valorCorrente1]
                        ]);
                        var optionsDataCorrente = {
                            title: 'Grafico Tensão e Corrente',
                            hAxis: {title: 'Horário', titleTextStyle: {color: '#333'}},
                            vAxis: {minValue: 0}
                        };
                        var chart = new google.visualization.AreaChart(document.getElementById('chart_divTensaoCorrente'));
                        chart.draw(dataTensaoCorrente, optionsDataCorrente);
                    }
                </script>
                <div id="chart_divTensaoCorrente" style="width: 920px; height: 270px;"></div>

            </div>
            <div id="CabeçalhoValores">
                <a style="font-size: 30px;">Tensão</a></br>
                <a style="font-size: 30px;text-align: center;top: 76px;position: relative;">Corrente</a></br>
                <a style="font-size: 30px;text-align: center;top: 160px;position: relative;">Potencia</a></br>
                <div style="left: 1px; position: absolute; text-align: left;top: 40px">  
                    <?php
                    $tensaoMax = 0;
                    $tensaoMin = 5;
                    $tensaoMed = 0;
                    $correnteMax = 0;
                    $correnteMed = 0;
                    $correnteMin = 500;
                    $contAux = 0;
                    require_once 'conexao.php';
                    $contadorPotenciaCorrente = 0;
                    $contadorPotenciaTensao = 0;
                    $conexaoPotencia = novaConexao();
                    $sqlTensaoPotencia = 'select*from dados_tensao';
                    $sqlCorrentePotencia = 'select*from dados_corrente';
                    $resultadoTensaoPotencia = $conexaoPotencia->query($sqlTensaoPotencia);
                    $resultadoCorrentePotencia = $conexaoPotencia->query($sqlCorrentePotencia);
                    if ($resultadoTensaoPotencia->num_rows > 0) {
                        while ($row_PotenciaTensao = $resultadoTensaoPotencia->fetch_assoc()) {
                            $registro_Tensao[] = $row_PotenciaTensao;
                            $contadorPotenciaTensao += 1;
                        }
                    }
                    if ($resultadoCorrentePotencia->num_rows > 0) {
                        while ($row_PotenciaCorrente = $resultadoCorrentePotencia->fetch_assoc()) {
                            $registro_Corrente[] = $row_PotenciaCorrente;
                            $contadorPotenciaCorrente += 1;
                        }
                    }
                    foreach ($registro_Tensao as $registro_Tensao) {
                        if ($registro_Tensao["valor_tensao"] > $tensaoMax) {
                            $tensaoMax = $registro_Tensao["valor_tensao"];
                        }
                        if ($registro_Tensao["valor_tensao"] < $tensaoMin) {
                            $tensaoMin = $registro_Tensao["valor_tensao"];
                        }
                        $tensaoMed += $registro_Tensao["valor_tensao"];
                    }
                    foreach ($registro_Corrente as $registro_Corrente) {
                        if ($registro_Corrente["valor_corrente"] > $correnteMax) {
                            $correnteMax = $registro_Corrente["valor_corrente"];
                        }
                        if ($registro_Corrente["valor_corrente"] < $correnteMin) {
                            $correnteMin = $registro_Corrente["valor_corrente"];
                        }
                        $correnteMed += $registro_Corrente["valor_corrente"];
                    }

                    $correnteMed1 = $correnteMed / $resultadoCorrentePotencia->num_rows;
                    $correnteMed2 = number_format($correnteMed1, 2);
                    $tensaoMed2 = $tensaoMed / $resultadoTensaoPotencia->num_rows;
                    $tensaoMed1 = number_format($tensaoMed2, 2);
                    $potenciaMin = $tensaoMin * $correnteMin;
                    $potenciaMax = $tensaoMax * $correnteMax;
                    $potenciaMedia = $tensaoMed1 * $correnteMed2;
                    echo "Tensão Minima: " . $tensaoMin . "<br/>\n";
                    echo "Tensão Maxima: " . $tensaoMax . "<br/>\n";
                    printf("Tensão Média: " . $tensaoMed1 . "<br/>\n");
                    echo"---------------------------------";
                    echo "<br/>\n" . "<br/>\n" . "<br/>\n";
                    echo"Corrente Mínima: " . $correnteMin . "<br/>\n";
                    echo "Corrente Maxima: " . $correnteMax . "<br/>\n";
                    echo"Corrente Média: " . $correnteMed2 . "<br/>\n";
                    echo"---------------------------------";
                    echo "<br/>\n" . "<br/>\n" . "<br/>\n";
                    echo "Potencia Minina: ".$potenciaMin. "<br/>\n";
                    echo "Potencia Maxima: ".$potenciaMax. "<br/>\n";
                    echo "Potencia Média: ".$potenciaMedia. "<br/>\n";
                    ?>
                </div>

            </div>
    </body>

</html>
