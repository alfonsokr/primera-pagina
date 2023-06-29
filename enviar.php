<?php

//fecha

		$d=date("j");

		$m=date("m");

		$a=date("Y");

		$s=date("w");

		

		//nombre dia

		switch($s){

			case 0:

				$dia="Domingo";

				break;

			case 1:

				$dia="Lunes";

				break;

			case 2:

				$dia="Martes";

				break;

			case 3:

				$dia="Miercoles";

				break;

			case 4:

				$dia="Jueves";

				break;

			case 5:

				$dia="Viernes";

				break;

			case 6:

				$dia="Sabado";

				break;

		}

		

		//nombre mes

		switch ($m){

		case 1:

			$mes="enero";

			break;

		case 2:

			$mes="Febrero";

			break;

		case 3:

			$mes="Marzo";

			break;

		case 4:

			$mes="Abril";

			break;		

		case 5:

			$mes="Mayo";

			break;

		case 6:

			$mes="Junio";

			break;

		case 7:

			$mes="Julio";

			break;

		case 8:

			$mes="Agosto";

			break;

		case 9:

			$mes="Septiembre";

			break;

		case 10:

			$mes="Octubre";

			break;	

		case 11:

			$mes="Noviembre";

			break;

		case 12:

			$mes="Diciembre";

			break;

		}

		

		$fecha=$dia." ".$d." de ".$mes." / ".$a;



//vars

$nombre=$_REQUEST['nombre'];

$email=$_REQUEST['email'];

$asunto=$_REQUEST['asunto'];

//$telefono=$_REQUEST['telefono'];

if(!empty($_REQUEST['comentario'])){

$msg=$_REQUEST['comentario'];

}else{

$msg="Sin comentarios";

}



//add From: header

$headers = "From: ".$_REQUEST['email']."\n";





// To send HTML mail, you can set the Content-type header

$headers .= "MIME-Version: 1.0\n";

$headers .= "Content-type: text/html; charset=iso-8859-1\n";

$headers .= "Content-Transfer-Encoding: text/plain";







//mensaje

$message = '

<html>

<style type="text/css">

<!--

.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 11px; }

.Estilo4 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-weight: bold;

	font-size: 12px;

}

-->

</style>

<body><table width="500" border=0 cellpadding=0 cellspacing=3 bordercolor=#000000>

<tr align="center" bgcolor="#D5DFF9">

  <td height="20" colspan=2><span class="Estilo4">Formulario de Contacto www.inversionesyobras.com </span></td>

</tr>

<tr>

<td width="92" align="right"><span class="Estilo3">Fecha:</span></td>

<td width="408">'.$fecha.'</td>

</tr>

<tr>

<td align="right"><span class="Estilo3">Nombre:</span></td>

<td>'.$nombre.'</td>

</tr>

<tr>

<td align="right"><span class="Estilo3">Email:</span></td>

<td><a href=mailto:'.$email.'>'.$email.'</a></td>

</tr>

<tr>

<td align="right"><span class="Estilo3">Asunto:</span></td>

<td>'.$asunto.'</td>

</tr>

<tr>

<td align="right"><span class="Estilo3">Mensaje:</span></td>

<td>'.$msg.'</td>

</tr>

</table>

</body>

</html>

';



//send message


mail("victorokr@hotmail.com", "Contactos - http://vo-mantenimiento-it.comxa.com", $message, $headers);

$msg="Gracias!";

header("location: index.html");

?>