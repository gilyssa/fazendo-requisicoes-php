<?php
    //inicia a conexão
    $curl = curl_init();

    //define as configurações
 
    curl_setopt_array($curl, [
        CURLOPT_URL => "http://localhost/fazendo-requisicoes-php/api.php", //passa a url desejada
        CURLOPT_CUSTOMREQUEST => "GET", //tipo da requisição
        CURLOPT_RETURNTRANSFER => true //tipo da referencia 

    ]);
    
    //executa a requisição
    $response = curl_exec($curl);

    //fecha a conexão
    curl_close($curl);

    echo $response;
