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
            <p class="date">Febrero 23, 2015</p>
            <h3><a href="bitacora.php">Proyecto No.1, Bitácora No.3</a></h3>
            <p class="postmeta">Por Grupo 02 </p>
          </div>
          <p align="justify">Después de haber completado la etapa de envió por SMS de las coordenadas del modem Syrus se procedió al envío de la localización a una IP y leerla a través de consulta de puertos TCP y UDP y más adelante se procedería a leerlas mediante una página web.</p>
          <p align="justify">Primeramente se solicitó al ISP la apertura de puertos a usar para poder establecer comunicación entre el modem Syrus y un servidor. Luego se solucionó el problema de no tener una IP fija mediante el uso de un dominio que nos brindó NoIP.com. La lectura de estas coordenadas con protocolos TCP/UDP se logró mediante la implementación de un sniffer. Para ello primero se utilizó el software Wireshark, luego se utilizó uno desarrollado propiamente mediante la herramienta Python. Los comandos utilizados en el modem para el envió de coordenadas a una IP fueron los siguientes:
            <code> 
            >SRT;ALL< <br />      
            >SXADP0100jnjordann.ddns.net;5080< <br />
            >SDA4;P01< <br />
            >SGC01TR00060< <br />
            >SED01NV4;C01+< <br />
            >QPV< <br />
            </code>          </p>
          <p align="justify">Al momento de realizar el envío de las coordenadas a uno de los servidores nos encontramos con el problema de que el ISP no brindó una solución permanente lo que respecta a la apertura de puertos. Por este motivo se pudo desarrollar un solo servidor con el proceso de recibimiento de datos del modem. Así mismo ocurrió para el desarrollo de la página web para la lectura de las coordenadas.</p>
          <p align="justify">Posteriormente se desarrollará una página web con conexión a un servicio (API) de información geográfica, para nuestros objetivos haremos uso de Google Maps. Finalmente, se establecerá un protocolo de entrega, este justificará la selección del protocolo de transporte utilizado previamente (TCP o UDP).</p>
          <p align="justify">Al no poderse establecer una solución inmediata al problema por parte del ISP se opta a continuar con el trabajo del segundo servidor, para luego comenzar a trabajar con conexión a un servicio (API) de información geográfica como lo es Google Maps.</p>
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