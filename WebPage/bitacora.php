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
            <p class="date">Abril 06, 2015</p>
            <h3><a href="bitacora.php">Proyecto No.2, Bitácora No.3</a></h3>
            <p class="postmeta">Por Grupo 02 </p>
          </div>
          <p align="justify">Para esta tercera etapa fue necesario realizar la consulta con el fabricante (DCT) del modem Syrus para corregir el error del envío de la localización GPS. Ellos realizaron pruebas y ajustes remotamente, y al final con ayuda conjunta de nosotros se realizaron las últimas configuraciones y se corrigió el error que se venía presentando.</p>
          <p align="justify">A partir de estos cambios, fue necesario realizar cambios en el sniffer y en la base datos, ya que el mensaje del evento enviado por el Syrus había sido modificado con respecto al que se tenía anteriormente. Luego se verificaron diferentes formas de establecer la conexión de la base de datos con la página web, y se concluyó que se debía usar codificación PHP para la correcta visualización de la consulta de históricos.</p>
          <p align="justify">En consecuencia a ello, se establecieron los comandos SQL que hacían el llamado a la base de datos para la consulta de históricos. Primero se estableció la consulta de la fecha y hora en la que el vehículo pasó por una coordenada específica. Después se establecieron los comandos que consultaban las coordenadas que había transcurrido el vehículo para cierto rango de fecha.</p>
          <p align="justify">Más adelante, se trató de configurar la página web con el fin de poder visualizar la base de datos a partir de la consulta. Así mismo, se estableció la forma en que la polilínea iba a ser trazada en la API de Google después de haber realizado los cambios en la lectura del sniffer y la base de datos.</p>
          <p align="justify">Finalmente, se implementó el código en php para la consulta de históricos y su respectiva visualización. Además, debido a problemas con la plataforma IBM Bluemix utilizada como PaaS para el servidor en la nube (despliegue inestable y pocas características necessarias para la consulta a base de datos), se realizó el traslado de los servicios web a la plataforma PaaS llamada Azure, desarrollada por Microsoft.</p>
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