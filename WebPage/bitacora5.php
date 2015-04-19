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
            <p class="date">Febrero 16, 2015</p>
            <h3><a href="bitacora.php">Proyecto No.1, Bitácora No.2</a></h3>
            <p class="postmeta">Por Grupo 02 </p>
          </div>
          <p align="justify">Continuando con el primer objetivo en el diseño e implementación de una solución de telemetría vehicular donde se programa un modem GPS/GPRS para el envío de coordenadas geográficas capturadas hacia un web server.</p>
          <p align="justify">Como primer paso se realizó el envío de un SMS con coordenadas geográficas mediante el uso de un Modem Syrus GPS y una SIM Card de la empresa de telefonía movil colombiana Movistar. El código implementado en la terminal de emulación (HyperTerminal), junto a los respuestas obtenidas de la misma, fue el siguiente:</p>
          
          <code>
            >SRT;ALL< <br />
            >RRT;ALL;ID=356612021141496< <br />
            >SRT;ALL<>RRT;ALL;ID=356612021141496< <br />
            >SXABR9600< <br />
            >SIDGRUPOJBM<>RIDGRUPOJBM;ID=356612021141496< <br />
            >SXAID0<>RXAID0;ID=GRUPOJBM< <br />
            >SRFI<>RRFI;ID=GRUPOJBM< <br />
            >SXADP10003178546786<>RXADP10003178546786;ID=GRUPOJBM< <br />
            >QXANS<>RXANS1,,,,;0,4,null,0,31,-1,-1,0.0.0.0,0,2,60;sms://3178546786,8,1,1,1,,,,32,0,0,,,,0 <br />
            ,,,,10\;1900,0,4,3,,,26;120,3,0,0,0,,11,236,socket://dd.dctserver.com:4998,00;; <br />
            ID=GRUPOJBM< <br />
            >SDA1;P10<>RDA1;P10;ID=GRUPOJBM< <br />
            >SDA1;P10< <br />
            >SDA0;P10<>RDA0;P10;ID=GRUPOJBM< <br />
            >SGC01TR00060<>RGC01TR00060;ID=GRUPOJBM< <br />
            >SED00NV1;C01+<>RED00NV1;C01+;ID=GRUPOJBM< <br />
            >QPV<>RPV63153+1101876-0748517200007612;ID=GRUPOJBM< <br />
            >SRT;ALL< <br />
          </code>
          <p align="justify">Como siguiente paso se procederá a enviar las señales geográficas obtenidas y enviarlas esta vez a una IP para que estas sean leídas mediante la consulta de puertos de transporte, ya sea TCP o UDP. Para esto se conocen los puertos del modem que manejan dichos protocolos.</p>
          <p align="justify">Posteriormente se desarrollará una página web con conexión a un servicio (API) de información geográfica, para nuestros objetivos haremos uso de Google Maps. Finalmente, se establecerá un protocolo de entrega, este justificará la selección del protocolo de transporte utilizado previamente (TCP o UDP.</p>        
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