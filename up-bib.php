<?php
	session_start();
	
	if (isset($_SESSION['k_username'])) 
	{
		if($_SESSION["tipo"] == 'A')
		{

?>

<html lang="ES">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Content-Type" content="utf-8" />
  
	<title>.:.Control Biblioteca.:.</title>
    <style type="text/css" title="currentStyle" media="screen">
		@import "../css/estilos.css";
   </style>

	<link rel="stylesheet" type="text/css" href="../css/jquery-ui-1.7.2.custom.css" />
	
	<script type="text/javascript" src="../javascript/jquery.min.js"></script>
	<script type="text/javascript" src="../javascript/javascript.js"></script>
	<script type="text/javascript" src="../javascript/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../javascript/jquery-ui-es.js"></script>
					
</head>

<body>
<div id="contenedor">
	<div id="cabecera">
      <div id="intro">
      	<img src="../imagenes/banner.png" />
        <div id="login">
        	<div id="nombre1"><a><?php echo $_SESSION['k_username'];?></a></div>
        	<div id="nombre2"><a href="../perfiles/logout.php" title="Cerrar">Finalizar Sesion</a>
		</div>
      </div>
      <!-- FIN INTRO -->
    </div>
    <!-- FIN CABECERA -->
  
  	<div id="contenido">
    	<div id="menu">
        	<table>
        		<td><a href="../demo/inicio-bib.php">Home</a></td>
        		<td><a href="../reg-bib/">Registrar</a></td>
				<td><a href="../mng-bib/">Administrar</a></td>
			</table>
   		</div>
            
<?php	 
   		}
   		else
   		{
			echo '<script language="javascript">
				alert("No tiene acceso a este sitio..!!");
				location.href = "../perfiles/logout.php";
				</script>;';			
		}
	}
	else
	{
		echo '<script language="javascript">
			alert("No ha iniciado Sesion");
			location.href = "../index.php";
			</script>;';
	}
	
?>	