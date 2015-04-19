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
            <p class="date">Marzo 16, 2015</p>
            <h3><a href="bitacora.php">Proyecto No.2, Bitácora No.2</a></h3>
            <p class="postmeta">Por Grupo 02 </p>
          </div>
          <p align="justify">Inicialmente, se hizo posible exportar la adquisición de coordenadas del Sniffer previamente implementado a una base de datos creada por medio de MySQL, evitado así el uso de un archivo de texto plano (.txt) para el almacenamiento y manejo de las coordenadas obtenidas.</p>
          <p align="justify">Teniendo en cuenta el objetivo de que además de consultar a la base de datos desde la página web y mostrar la localización del vehículo también se debe trazar el recorrido en tiempo real del mismo, se realizaron cambios al código HTML implentado en la página web. En primer lugar, se cambió la forma en la que se refrescaba la página haciendo que ahora solo se actualice el marcador. Por otro lado, para el trazo de la polilínea se investigaron y buscaron diferentes alternativas para su construcción mediante la API de Google. Mediante el trazado de la polilínea se busca que al enviar las coordenadas mediante el modem, estas se convierten en los puntos de trazado del recorrido, cada coordenada se une con su predecesora  (las últimas coordenadas adquiridas se unen con las penúltimas, las penúltimas con las antepenúltimas y así sucesivamente hasta que  el navegador se refresque. Se procedió a hacer pruebas donde se verificó que existe un cambio en las coordenadas adquiridas.</p>
          <p align="justify">Luego, es necesario continuar con las pruebas y el mejoramiento de esta característica ya que el objetivo de mantener una sola línea de forma clara en el mapa debe venir acompañado de cierto grado de precisión tanto para actualizar el puntero como para generar la polilínea. Para conseguir esta precisión se tiene proyectado actualizar la polilínea sólo si la diferencia en latitud o longitud es mayor a cierto valor.</p>
          <p align="justify">Finalmente, el procedimiento a seguir es concretar el recorrido histórico del vehículo. Para esto se debe realizar una consulta de la base de datos donde se encuentren los recorridos realizados previamente. Esta consulta estará definida entre un intervalo de tiempo establecido por el usuario introduciendo la fecha, hora de inicio y fin, lo anterior será introducido en un calendario gráfico ubicado en la página web para luego mostrar el recorrido realizado en la intervalo de tiempo ingresado anteriormente.</p>
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