<?php 
    include_once("conn.php");           //garante que o arquivo só será incluído uma vez
    $method = $_SERVER["REQUEST_METHOD"];       //Essa linha descobre qual método HTTP foi usado na requisição.

    //resgate de dados
    //Esse bloco é executado quando alguém acessa a página via navegador
    if($method === 'GET' ){
        $bordasQuery = $conn->query("SELECT *FROM bordas; ");       //executa um comando SQL direto no banco e busca todas as colunas e linhas da tabela bordas.

        $bordas = $bordasQuery ->fetchAll();        //transforma o resultado do PDOStatement em um array PHP completo, com todas as linhas da tabela.

        $massasQuery = $conn->query("SELECT * FROM massas; ");

        $massas = $massasQuery->fetchAll();

        $saboresQuery = $conn->query ("SELECT * FROM sabores; ");

        $sabores = $saboresQuery->fetchAll();

//criação do pedido
    }else if ($method == "POST") {
       
        $data = $_POST;

        $borda = $data["borda"];
        $massa = $data ["massa"];
        $sabores = $data["sabores"];

//validação de sabores máximosif

if (count($sabores) > 3) {
    $_SESSION["msg"] = "Selecione no máximo 3 sabores!";
    $_SESSION["status"] = "warning";
} else {
    echo "passou da validação";
    exit;
}
//retoma pagina inicial]

    header ("Location: ..");
    }
?>