<?php

/*function pegaItem() {
    require_once 'conexao.php';
    $conexao = novaConexao();
    $sql = 'select * from dados_potencia';
    $resultado = mysqli_query($conexao, $sql);
    $sql1 = 'drop table dados_potencia';
    $resultado1 = query($sql1);
    if (($resultado) AND ( $resultado->num_rows != 0)) {
        $cont = 0;
        while ($row = mysql_fetch_array($resultado)) {
            echo $row[dados_potencia];
            $array[$cont] = $row[dados_potencia];
        }
    }
    return $array[$cont];
}*/
function apagaItem(){
    require_once 'conexao.php';
    $conexao = novaConexao();
    $sql = 'drop table dados_potencia';
    $resultado = mysql_query($conexao,$sql);
    return $resultado;
}


?>
 