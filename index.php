<?php include 'listarpontos.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Guia do Turista</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.0-rc.3/dist/leaflet.css" />


  <h1 class="element" align=center>Guia do Turista</h1>
  <table width=600 height=100 align=center>
    <tbody>
      <tr>
        <th><a href="#" class="myButton">Mapa</a></th><th><a href="sobre.html" class="myButton">Sobre</a></th><th><a href="formulario.html" class="myButton">Cadastro</a></th><th><a href="inserirpontos.html" class="myButton">Insira pontos</a></th>
      </tr>
    </tbody>
  </table>
</head>
<body>

	<div id="mapid"></div>
	<script src="https://unpkg.com/leaflet@1.0.0-rc.3/dist/leaflet.js" ></script>
	<script>

	var mymap = L.map('mapid').setView([-22.7775, -47.295833333333], 14);

	L.tileLayer('https://api.mapbox.com/styles/v1/ederdasilva/cit2zwz1200542xtmme5hacdz/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZWRlcmRhc2lsdmEiLCJhIjoiY2l0MnpvOWhlMHR2MjJwcGd6dWxjdHZvaSJ9.DqBnMNDaFaA7T3GnDcAIuQ', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'your.mapbox.project.id',
    accessToken: 'pk.eyJ1IjoiZWRlcmRhc2lsdmEiLCJhIjoiY2l0MnpvOWhlMHR2MjJwcGd6dWxjdHZvaSJ9.DqBnMNDaFaA7T3GnDcAIuQ'
	}).addTo(mymap);

        <?php
               foreach ($pontos as $ponto){

                   $latitude = $ponto['latitude'];
                   $longitude = $ponto['longitude'];
                   $nome = $ponto['nome'];
                   $descricao = $ponto['descricao'];


	               echo "L.marker([$latitude, $longitude]).addTo(mymap)"
                       .".bindPopup('<b>$nome</b><br><b>$descricao</b>');";
                }
        ?>

	</script>

	<script src="https://unpkg.com/leaflet@1.0.0-rc.3/dist/leaflet.js"></script>
	<footer>
  	<small>Este site esta bobre a licença  <a href="http://choosealicense.com/licenses/apache-2.0/"> Apache 2.0</a></small>
	</footer>
    </div>

</body>
</html>
