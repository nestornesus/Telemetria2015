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
            <p class="date">Febrero 09, 2015</p>
            <h3><a href="bitacora.php">Proyecto No.1, Bitácora No.1</a></h3>
            <p class="postmeta">Por Grupo 02 </p>
          </div>
          <p align="justify">Para atender al primer objetivo en el diseño e implementación de una solución de telemetría vehicular es necesario programar un modem GPS/GPRS para el envío de coordenadas geográficas capturadas hacia un web server.</p>
          <p align="justify">Como primer paso del proyecto se busca enviar un SMS con coordenadas geográficas mediante el uso de un Modem Syrus GPS y una SIM Card de una empresa de telefonía movil. Inicialmente se consultó la documentación del dispositivo módem a utilizar; las características, especificaciones y conexiones de este. Se procedió a cargar el módem durante 10 minutos, luego de cargado se hizo la conexión con un PC mediante el puerto serial con estándar RS-232.</p>
          <p align="justify">Una vez conectado con el PC es necesario configurar tanto el PC como el módem y que de esta manera se permita cumplir eficientemente con el objetivo. Para configurar el equipo se hace uso de la herramienta HyperTermial, esta permite acceder al módem desde una interfás gráfica de usuario en el PC.</p>
          <p align="justify">Para el envío del SMS se implementa un código en la terminal de emulación, luego de consultar el manual de usuario del módem y distintas fuentes bibliográficas se llegó a la realización del siguiente código para el envío del SMS.</p>
          <code> 
            >QVR< <br />
            >SRT;ALL< <br />
            >SXADP**U< <br />
            >SIDSMS< <br />
            >SXAID0< <br />
            >SXADP10003008741173< <br />
            >SXADP11003002534353< <br />
            >SDA4;P10,P11,P15< <br />
            >SED31NV4;F13+< <br />
          </code>
          <p align="justify">Finalmente se realizan consultas sobre cómo configurar APN de manera que permita comunica la red celular y la red internet, notando que debe ser asignada una IP para así configurar la dirección de host. Esto con el fin de cumplir con la tarea de enviar  coordenadas geográficas a una IP y que estas sean leídas mediante la consulta de puertos TCP y UDP.</p>
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