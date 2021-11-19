<?php 

$cnpjdigitada = $_GET['CNPJ'];
echo $cnpjdigitada;

//usando o leitor macro sc_webservice para consumir a API



$ch = curl_init();
$timeout = 5; // set to zero for no timeout
curl_setopt ($ch, CURLOPT_URL, 'https://www.receitaws.com.br/v1/cnpj/'.$cnpjdigitada.'');
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$file_contents = curl_exec($ch);
curl_close($ch);

// display file
//echo $file_contents;

    $lendo = json_decode($file_contents); //decodifica o Json para leitura
    
    //quando o elemento está dentro de um array eu tenho que ler o array e percorrer com o foreach
    foreach($lendo->atividade_principal as $campo){
    $atividade_empresa = $campo->text;
    $cnae_principal = $campo->code;
    }
    
    foreach($lendo->qsa as $campo){
    $Representante_legal  = $campo->qual;
    $cargo_representante = $campo->nome;	
        
    }
    
    


    //fim do foreach
    
    //quando o elemento está dentro de um array eu tenho que ler o array e percorrer com o foreach
    /*
    foreach($lendo->atividades_secundarias as $campo){
    $segmento2 = $campo->text;
    }	
    {Segmento(2)} = $segmento2;
    */
    //fim do foreach
    
    
    //quando o elemento está solto, simples, eu somente leio o campo
    
    $Razao_Social = $lendo->nome;
    $Nome_Fantasia = $lendo->fantasia;
    $Data_abertura = $lendo->data_situacao;
    $cep = $lendo->cep;
    $numero = $lendo->numero;
    $endereco = $lendo->logradouro;
    $Cidade = $lendo->municipio;
    $UF = $lendo->uf;
    $Bairro = $lendo->bairro;
    $complemento = $lendo->complemento; 
    
    
    
    $Status_empresa = $lendo->situacao;



    //echo $Razao_Social;
    

    session_start();
    $_SESSION['Razao_Social'] =  $Razao_Social;
    $_SESSION['Nome_Fantasia'] =  $Nome_Fantasia;
    $_SESSION['Data_abertura'] =  $Data_abertura;
    $_SESSION['numero'] =  $numero;
    $_SESSION['endereco'] =  $endereco;
    $_SESSION['Cidade'] =  $Cidade;
    $_SESSION['Bairro'] =  $Bairro;
    $_SESSION['complemento'] =  $complemento;
    $_SESSION['UF'] =  $UF;
    $_SESSION['cep'] =  $cep;




//redireciona para a outra página php e faz a leitura dos campos
header('Location: formulario-de-cadastro.php');


?>