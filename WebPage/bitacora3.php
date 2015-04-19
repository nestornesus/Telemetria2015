<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>TransLoc - Geolocalización Vehicular</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="topbanner">
  <div class="container">
    <h1 id="sitename"><a href="index.php">TransLoc</a> <span>Geolocalización Vehicular</span></h1>
    <div id="mainnav">
      <ul>
        <li><a href="index.php">Geolocalización<span>En Tiempo Real</span></a></li>
        <li><a href="historico.php">Archivo<span>Consulta histórica</span></a></li>
        <li><a href="nosotros.php">Nosotros<span>Sobre TransLoc</span></a></li>
        <li class="active"><a href="bitacora.php">Bitácora <span>Registros de avances</span></a></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
</div>

<div id="pagewrap">
  <div id="wrap">
    <div id="pageheader"> </div>
    <div id="maincontent">
      <div id="page">
        <div class="post">
          <div class="posthead">
            <p class="date">Marzo 09, 2015</p>
            <h3><a href="bitacora.php">Proyecto No.2, Bitácora No.1</a></h3>
            <p class="postmeta">Por Grupo 02 </p>
          </div>
          <p align="justify">A partir de la culminación del primer proyecto, el cual consistió en adquirir las coordenadas de un modem GPS (Syrus) y enviarlas a un servidor para su correcta visualización en una cartografía mediante una página web, lo que se procede a desarrollar es una página web en donde se pueda consultar el recorrido realizado del vehículo, así mismo como la consulta de un historial de ubicación teniendo en cuenta la fecha y hora en la que el vehículo transitó.</p>
          <p align="justify">En primer lugar se debe crear una base de datos la cual registre los datos de la localización que el modem Syrus valla enviando. Para ello se escogió MySQL Database, ya que posee gran versatilidad en el uso e implementación en distintos lenguajes. En ella se creó la base de datos y en ella una tabla con los campos: Latitud, Longitud, Semana, Dia y Hora.</p>
          <p align="justify">Además, se realizaron algunas modificaciones al código en Python del sniffer para dejar de exportar las coordenadas en archivos de texto y comenzar a registrarlas en la base de datos. Se tuvo que tener en cuenta el tipo de dato de cada campo en la tabla, así como la instalación de las librerías que permitieran conectar la base de datos SQL con el archivo Python.</p>
          <p align="justify">Más adelante, se debe usar esta base de datos con el fin de mostrar el recorrido en tiempo real del modem Syrus, a través de la página web usando la API de Google Maps implementada previamente en el proyecto 1. Seguramente se deberá obtener el recorrido mediante la unión de cada uno de los puntos que se van registrando y por ello es de suma importancia establecer perfectamente la primera etapa de este proyecto.</p>
        </div>
      </div>
      <div id="sidebar">
        <h2>Últimas Entradas</h2>
        <ul class="posts">
          <li><a href="bitacora.php">Proyecto No.2, Bitácora No.3</a> <span>06/04/2015 </span></li>
          <li><a href="bitacora2.php">Proyecto No.2, Bitácora No.2</a> <span>16/03/2015 </span></li>
          <li><a href="bitacora3.php">Proyecto No.2, Bitácora No.1</a> <span>09/03/2015 </span></li>
          <li><a href="bitacora4.php">Proyecto No.1, Bitácora No.3</a> <span>23/02/2015 </span></li>
          <li><a href="bitacora5.php">Proyecto No.1, Bitácora No.2</a> <span>16/02/2015 </span></li>
          <li><a href="bitacora6.php">Proyecto No.1, Bitácora No.1</a> <span>09/02/2015 </span></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>

<div id="bottom">
  <div id="btmcontent">
    <div class="col1">
      <h2>Recursos Web</h2>
      <p align="justify">Enlaces de los principales recursos utilizados para este proyecto. </p>
      <ul>
        <li><a href="https://developers.google.com/maps/">Google Map API</a></li>
        <li><a href="https://azure.microsoft.com/en-us/">Microsoft Azure</a></li>
        <li><a href="http://www.wampserver.com/en/">WampServer</a></li>
      </ul>
    </div>
    <div class="col2">
      <h2>Github</h2>
      <p align="justify">Repositorio del proyecto en la plataforma de Github.</p>
      <ul>
        <li><a href="https://github.com/nestornesus/TransLocGPS">Repositorio de TransLoc </a></li>
      </ul>
    </div>
    <div class="col3">
      <h2>Diseño Electrónico</h2>
      <p align="justify">Realizado como proyecto para la materia de Diseño Electrónico, Facultad de Ingeniería Electrónica, Universidad del Norte. </p>
      <ul>
        <li><a href="http://www.uninorte.edu.co">Universidad del Norte</a></li>
        <li><a href="http://www.uninorte.edu.co/web/ingenieria-electronica">Facultad de Ingeniería Electrónica</a></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
  <div id="footer">
    <div id="copyright">
      <p class="left">Copyright &copy; 2015. Diseño Electrónico, Universidad del Norte</p>
      <p class="right">Bernal G. Néstor, Jordan N. Jhoyner &amp; Mejía S. Gustavo</p>
      <div class="clear"></div>
    </div>
  </div>
</div>

</body>

</html>