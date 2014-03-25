<?php
	if(empty($_POST) === false){	
    	$host = '50.63.225.19';
    	$db = 'ascitgu';
    	$user = 'ascitgu';
    	$pass = 'Un!t3ctgu';
		$con = mysql_connect($host, $user, $pass);

	if (mysqli_connect_errno($con)) {
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
		mysql_select_db($db,$con);

		//print_r($_POST);

		$fields = '`'.implode('`, `',array_keys($_POST)).'`';
		$values = '\''.implode('\', \'',$_POST).'\'';	
		$query = "INSERT INTO webcamp ($fields) VALUES ($values)";
		//echo $query;
		$result = mysql_query($query,$con);

		if($result){
			$estado = 1;
		}else{
			$estado = 0;
		}

	}

?>



<!DOCTYPE html>

<html class="no-js">



    <head>
        <meta charset="utf-8">
        <title>Hola Geeks</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Monda:700' rel='stylesheet' type='text/css'>       
    </head>
    <body>
        <div class="container">
        	<div class = "header">        	
        	</div>
        	<h1 align="center">Inscripción WEBCAMP 1.0</h1>
        	<h4 align="center">WEBCAMP 1.0 es un evento donde podrás aprender a desarrollar una aplicación web</h4>
        	<?php
        		if(!empty($estado)){
        			echo '<div class="success">Te has registrado exitósamente.</div>';
        		}
        	?>
			 <form class="contact_form" action="" method="post">
			    <ul>
			        <li>
			             <h2>Formulario de Inscripción</h2>
			        </li>
			        <li>
			            <label for="name">Nombre:</label>
			            <input type="text" name="nombre" placeholder="Hola Geeks" required />
			        </li>
			        <li>
			            <label for="email">Email:</label>
			            <input type="email" name="correo" placeholder="holageeks@holageeks.com" required />
			        </li>
			        <li>
			            <label for="website">Identidad:</label>
			            <input type="text" name="identidad" placeholder="0801-2013-05286" required />
			        </li>
			        <li>
			        	<label for="framework">Framework:</label>
			        	<select name="framework" id="framework">
			        		<option value="PHP">PHP YiiFramework</option>
			        		<option value="ROR">Ruby on Rails Framework</option>
			        	</select>
			        </li>
			        <li>			        	
			        	<label for="website">Enviar</label>
			        	<input type="submit" value="Registrarse" />
			        </li>
			        <li>
			            <label for="website">Hora:</label>
			            <p>Viernes: 8:00am - 5:00pm</p>
			            <p>Sábado: 9:30am - 3:30pm</p>
			        </li>

			    </ul>
			</form>
			<div class="right contact_form">
				<img width="80%" src="img/banner.png" alt="">

			</div>
			<div class ="clear"></div>
			<br/>
			<div class="footer">
        		Hola Geeks (Asociación Ing. Sistemas Computacionales - UNITEC) - &copy; 2013
        	</div>
        </div>
    </body>
</html>