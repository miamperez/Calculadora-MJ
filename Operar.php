<?php
	$valor1=$_POST['N1'];
	$valor2=$_POST['N2'];
	$op=$_POST['option'];
	if($op==suma)
	{
		echo"El resultado de la suma es: ". ($valor1+$valor2);
	}
	if($op==resta)
	{
		echo"El resultado de la resta es: ". ($valor1-$valor2);
	}
	if($op==multiplicacion)
	{
		echo"El resultado de la multiplicación es: ". ($valor1*$valor2);
	}
	if($op==division)
	{
		echo"El resultado de la división es: ". ($valor1/$valor2);
	}

?>