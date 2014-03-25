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

		<table id="hor-minimalist-a" summary="Employee Pay Sheet">

		    <thead>
		    	<tr>
		        	<th scope="col">#</th>
		            <th scope="col">Nombre</th>
		            <th scope="col">Email</th>
		            <th scope="col">Identidad</th>
		            <th scope="col">Framework</th>
		        </tr>
		    </thead>
		    <tbody>
			<?php
    			$host = '50.63.225.19';
    			$db = 'ascitgu';
    			$user = 'ascitgu';
    			$pass = 'Un!t3ctgu';
				$con = mysql_connect($host, $user, $pass);
				mysql_select_db($db,$con);
				$query = " SELECT * FROM webcamp ";
				$result = mysql_query($query,$con);
				$cont = 1;
				while($row = mysql_fetch_array($result)){
					echo '<tr>';
					echo '<td>'.$cont.'</td>';
					echo '<td>'.$row['1'].'</td>';
					echo '<td>'.$row['2'].'</td>';
					echo '<td>'.$row['3'].'</td>';
					echo '<td>'.$row['4'].'</td>';
					echo '</tr>';
					$cont++;
				}

			?> 
		    </tbody>
		</table>       	
			<div class ="clear"></div>
			<br/>
			<div class="footer">
        		Hola Geeks (Asociación Ing. Sistemas Computacionales - UNITEC) - &copy; 2013
        	</div>
        </div>
    </body>
</html>