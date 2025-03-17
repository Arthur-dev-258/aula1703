<!DOCTYPE html>  
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> exercicio </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <form method="POST" action="">
		<div class="container" style="margin-top:50px;">
            <label> Primeiro número: </label></br>
            <input style="max-width: 100px;" class="form-control" type="text" name="numero1"></br>
            <label> Segundo número: </label></br>
            <input style="max-width: 100px;" class="form-control" type="text" name="numero2"><br>
            </br>
            <label> Operação: </label></br>
            <label>
                <input class="btn btn-danger" type="submit" name="operacao" value="somar">
            </label>
            <label>
                <input class="btn btn-info" type="submit" name="operacao" value="subtrair"> 
            </label>
            <label>
                <input class="btn btn-success" type="submit" name="operacao" value="dividir"> 
            </label>
            <label>
                <input class="btn btn-warning" type="submit" name="operacao" value="multiplicar"> 
            </label>
			
            </div>
        </form><br><br>
		<?php
		   require_once('calculadoraControl.php');
		?>
    </body>
</html>