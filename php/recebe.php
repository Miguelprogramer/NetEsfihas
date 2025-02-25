<?php
//dados pessoais
$nome=$_POST["nome"];
$fone=$_POST["fone"];
$end=$_POST["end"];
$comp=$_POST["comp"];

//esfiha1

$esfiha1=$_POST["esfiha1"]; //Escolha1

if ($esfiha1 == 1){
    $pizza1="Queijo";
    $preco1=4.99;
}
elseif ($esfiha1 == 2){
    $pizza1="Carne";
    $preco1=4.99;
}
elseif ($esfiha1== 3){
    $pizza1="Frango";
    $preco1=4.99;
}
else {
    $esfiha1="Doce";
    $preco1=4.99;
}

$qtd1=$_POST["qtd1"];
$sub1 = $preco1 * $qtd1;


//esfiha2 2


$esfiha2=$_POST["esfiha2"]; //escolha2

if ($esfiha2 == 0){
    $esfiha2="0";
    $preco2=0;
}

elseif ($esfiha2 == 1){
    $esfiha2="Queijo";
    $preco2=4.99;
}
elseif ($esfiha2 == 2){
    $esfiha2="Carne";
    $preco2=4.99;
}
elseif ($esfiha2 == 3){
    $pesfiha2="Frango";
    $preco2=4.99;
}
else {
    $esfiha2="Doce";
    $preco2=4.99;
}

$qtd2=$_POST["qtd2"];
if ($qtd2 ==0){
    $qtd2 =1;
}
$sub2 = $preco2 * $qtd2;


//bebida

$bebida=$_POST["bebida"]; //bebida

if ($bebida == 0){
    $bebida="0";
    $preco3=0;
}
elseif ($bebida == 2){
    $bebida="Coca Cola";
    $preco3=9.99;
}
elseif ($bebida == 3){
    $bebida="Guaraná Antartica";
    $preco3=6.50;
}
elseif ($bebida == 4){
    $bebida="Conti Cola";
    $preco3=8.50;
}
else {
    $bebida="Suco de laranja";
    $preco3=14.50;
}

$beqtd=$_POST["beqtd"];
if ($beqtd ==0){
    $beqtd =1;
}
$sub3 = $preco3 * $beqtd;


//entrega
$entrega = $_POST["entrega"];
if ($entrega == 1){
    $entrega = "Cliente vai retirar na esfiharia";
    $taxaentrega = 0;
}
else{
    $entrega = "Entregar no endereço do Cliente";
    $taxaentrega = 4.00;
}

//pagamento
$pgmt=$_POST["pgmt"];
if ($pgmt == 1){
    $fpgmt="Cartão de Credito";
}

elseif ($pgmt == 2){
    $fpgmt="Cartão de Debito";
}
else{
    $fpgmt="PIX";
}

//oferta

if(isset($_POST["oferta1"])){
    $oferta1=$_POST["oferta1"];
}

else{
    $oferta1=0;
}

if(isset($_POST["oferta2"])){
    $oferta2=$_POST["oferta2"];
}
else{
    $oferta2=0;
}

//calculo

$total = $sub1 + $sub2 + $sub3 + $taxaentrega;
echo "<h2><center>NetEsfihas</center></h2><br>";
echo "<h3>Dados do cliente</h3><br>";
echo "Cliente: $nome<br>";
echo "Telefone: $fone<br>";
echo "Endereço: $end<br>";
echo "complemento: $comp<br>";


echo "<h3>Dados do pedido</h3>";
echo "Esfiha: $esfiha1<br>";
echo "valor da esfiha: R$ ". number_format($preco1, 2, ',','.') . "<br>";
echo "Quantidade: $qtd1<br>";
echo "Valor total da pizza: R$ ". number_format($sub1, 2, ',','.') . "<br>";

if ($esfiha2 <> 0){
    echo "<br> Esfiha: $esfiha2<br>";
    echo "valor da esfiha: R$ ". number_format($preco2, 2, ',','.') . "<br>";
    echo "Quantidade: $qtd2<br>";
    echo "Valor total da pizza: R$ ". number_format($sub2, 2, ',','.') . "<br>";
}

if ($bebida <> 0){
    echo "<br> bebida: $bebida<br>";
    echo "valor da bebida: R$ ". number_format($preco3, 2, ',','.') . "<br>";
    echo "Quantidade: $beqtd<br>";
    echo "Valor total da bebida: R$ ". number_format($sub3, 2, ',','.') . "<br>";
}

echo "<h3>Finalização do Pedido</h3>";
echo "Entrega: $entrega<br />";
if ($entrega <> 1){
	echo "<br />valor da entrega: $taxaentrega<br /><br /><br />";
}

if ($oferta1 == 1 || $oferta2 == 1){
	echo "<h3>Ofertas e Promoções:</h3>";
}

if ($oferta1 == 1){
	echo "Desejo receber mensagens sobre promoções <br />";
}
if ($oferta2 == 1){
	echo "Desejo receber mensagens sobre novos produtos <br />";
}

echo "<h3>Forma de Pagamento</h3>";
echo "Forma de Pagamento: $pgmt<br />";
echo "Valor a pagar: $total<br /><br /><br />";

?>