<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
     
    </style>
    <title>GET e POST</title>
    
    <body>
   
    <div class="w3-container w3-green">
    <h1>PROMOÇÃO DE MÊS DE ANIVERSÁRIO DE NOSSA LOJA!</h1>
    </body>
</head>
<?php

$valorCompra = $_POST["txt_V_Compra"];
$option = $_POST["option_pag"];
$desconto = 0;

if($option == "Depósito")
{
    $desconto = 10;
}
else if($option == "Boleto")
{
    $desconto = 8;
}
else if($option == "Cartão de Crédito")
{
    $desconto = 4;
}
$valorDesconto = ($valorCompra*$desconto/100);
echo $_POST['txtNome']."!"."<br>";
echo "Valor da Compra sem Desconto: ".$_POST['txt_V_Compra']."<br>";
echo "Forma de Pagamento Escolhida: ".$_POST['option_pag']."<br>"."<br>";
echo "Você Econimizou: R$".$valorDesconto."<br>";
echo "Valor a Pagar: R$".($valorCompra-$valorDesconto)."<br>";
echo "Desconto de: " .$desconto. "% <br>";
?>
 </html>