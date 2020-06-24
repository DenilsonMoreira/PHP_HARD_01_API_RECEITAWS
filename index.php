<?php
$cnpj = '27865757000102';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.receitaws.com.br/v1/cnpj/".$cnpj);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$retorno = curl_exec($ch);
curl_close($ch);

$retorno = json_decode($retorno); //Ajuda a ser lido mais rapidamente
print_r($retorno);

/*
Razão Social = [nome]
Nome Fantasia =  [fantasia]
CNAE = [atividade_principal]
CEP =  [cep]
UF = [uf]
Município = [municipio]
Bairro = [bairro]
Número = [numero]
Logradouro = [logradouro] 
Complemento = [complemento]
Telefone = [telefone] 
Abertura = [abertura]
*/

# mais informações sobre o uso da API por favor consultar o site do fornecedor https://www.receitaws.com.br/api
# tem vários planos que se adaptam a sua necessidade
?>
