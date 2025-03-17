
<?php
require_once './calculadoraEntidade.php';
$numero1 = @$_POST['numero1'];//recebendo o valor1 digitado pelo usuario no formulario
$numero2 = @$_POST['numero2'];//recebendo o valor1 digitado pelo usuario no formulario
$operacao = @$_POST['operacao'];//recebendo a escolha da operação feita pelo usuario no formulario

$calculadora = new Calculadora();
$calculadora->setNumero1($numero1);
$calculadora->setNumero2($numero2);//enviando o valor2 para o objeto na memoria

switch ($operacao) {//verificando a escolha feita no formulario pelo usuario
    case 'somar':
        $calculadora->somar();
        break;
    case 'subtrair':
        $calculadora->subtrair();
        break;
    case 'dividir':
        $calculadora->dividir();
        break;
    case 'multiplicar':
        $calculadora->multiplicar();
        break;

    default:
        break;
}
echo '<span style="margin-left:150px;">Resultado da operacao é: ' . $calculadora->getTotal();
?>