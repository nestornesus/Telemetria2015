<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>TransLoc - Registro Histórico</title>
  <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="css/timepicki.css">
  <link rel="stylesheet" href="jquery-ui.css">
  <script src="jquery.js"></script>
  <script src="jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  <script>
  $(function() {
    $( "#datepicker2" ).datepicker();
  });
  </script>
  <script src="js/jquery.js"></script>
  <script src="js/timepicki.js"></script>
  <script>
  $(document).ready(function(){
    $("#time_element").timepicki({show_meridian:true,
      step_size_minutes:10,
      start_time: ["00", "00", "AM"]});
  });
  </script>
  <script>
  $(document).ready(function(){
    $("#time_element2").timepicki({show_meridian:true,
      step_size_minutes:10,
      start_time: ["00", "00", "AM"]});
  });
  </script>
  <script>
  function validateForm() {
    var x = document.forms["ConsultaFecha"]["inicio"].value;
    if (x == null || x == "") {
      alert("Fecha inicio de consulta");
      return false;
    }
  }
  </script>
  <script>
  function validateForm() {
    var x = document.forms["ConsultaFecha"]["fin"].value;
    if (x == null || x == "") {
      alert("Fecha fin de consulta");
      return false;
    }
  }
  </script>
  <script>
  function validateForm() {
    var x = document.forms["ConsultaFecha"]["horaini"].value;
    if (x == null || x == "") {
      alert("Hora inicio de consulta");
      return false;
    }
  }
  </script>
  <script>
  function validateForm() {
    var x = document.forms["ConsultaFecha"]["horafin"].value;
    if (x == null || x == "") {
      alert("Hora inicio de consulta");
      return false;
    }
  }
  </script>

  <script>
  function validateForm() {
    var fechaini = document.forms["ConsultaFecha"]["inicio"].value;
    var fechafin = document.forms["ConsultaFecha"]["fin"].value;
    var horaini = document.forms["ConsultaFecha"]["horaini"].value;
    var horafin = document.forms["ConsultaFecha"]["horafin"].value; 
    //inicio
    var diaini = fechaini.substring(3, 5);
    var mesini = fechaini.substring(0, 2);
    var anoini = fechaini.substring(6, 10);
    var hourini = horaini.substring(0, 2);
    var minini = horaini.substring(5, 7);
    var ampmini = horaini.substring(10, 12); 
    //fin
    var diafin = fechafin.substring(3, 5);
    var mesfin = fechafin.substring(0, 2);
    var anofin = fechafin.substring(6, 10);
    var hourfin = horafin.substring(0, 2);
    var minfin = horafin.substring(5, 7);
    var ampmfin = horafin.substring(10, 12);
    //Condicional de fecha incorrecta
    if (ampmini=='PM'){
      int(hourini)=int(hourini)+12;
    }
    if (ampmfin=='PM'){
      int(hourfin)=int(hourfin)+12;
    }
    var pasado = false;
    if(anoini>anofin){
      var pasado = true;
    }else if(anoini==anofin){
      if(mesini>mesfin){
        var pasado = true;
      }else if(mesini==mesfin){
        if(diaini>diafin){
          var pasado = true;
        }else if(diaini==diafin){
          if(hourini>hourfin){
            var pasado = true;
          }else if(hourini==hourfin){
            if (minini>minfin){
              var pasado = true;
            }else if(minini==minfin){
              alert("Las fechas y horas son iguales"); 
              return false;
            }
          }
        }
      }
    }
    if (pasado==true){
      alert("La fecha de fin no puede ser anterior a la fecha de inicio");
      return false;
    }else{
      return null
    }
  }
  </script>
</head>

<body>

<div id="topbanner">
  <div class="container">
    <h1 id="sitename"><a href="index.php">TransLoc</a> <span>Geolocalización Vehicular</span></h1>
    <div id="mainnav">
      <ul>
        <li><a href="index.php">Geolocalización<span>En Tiempo Real</span></a></li>
        <li class="active"><a href="index.php">Archivo<span>Consulta histórica</span></a></li>
        <li><a href="nosotros.php">Nosotros<span>Sobre TransLoc</span></a></li>
        <li><a href="bitacora.php">Bitácora <span>Registros de avances</span></a></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
</div>

<div id="pagewrap">
  <div id="wrap">

    <div id="homeheader">
      <div id="mainimg"> <img src="images/mainheader.png" width="700" height="330" alt="" /></div>
      <div id="rightboxes">
        <div class="box1">
          <p class="rotate"> <a href="nosotros.php"><span>¿ Qué es ?</span> </a></p>
        </div>
        <div class="box2">
          <p class="rotate"> <a href="nosotros.php"><span>¿ Cómo funciona ?</span> </a></p>
        </div>
        <div class="box3">
          <p class="rotate"> <a href="nosotros.php"><span>¿ Para quién ?</span> </a></p>
        </div>
      </div>
      <div class="clear"></div>
    </div>

    <div id="maincontent">
      
      <div id="threecol"> 
        <form name="ConsultaFecha" method="post" onsubmit="return validateForm()" action="historico2.php">
          <table width="900" border="0" align="center">
            <tbody>
              <tr>
                <td width="900">
                  
                  <table width="896" border="1" align="center">
                  <tbody>
                    <tr>

                      <td width="440"><h3 align="center">&nbsp;</h3>
                        <h3 align="center">Inicio de Búsqueda</h3>
                        <p align="center">&nbsp;</p>
                        <p align="center">Introduzca Fecha de Inicio: <input type="text" id="datepicker" name="inicio" value"" required></p>
                        <p align="center">Introduzca Hora de Inicio:                        
                          <input type="text" name="horaini" id="time_element" />
                        </p>
                        <p align="center">&nbsp;</p></td>
                      
                      <td width="440"><h3 align="center">&nbsp;</h3>
                        <h3 align="center">Fin de Búsqueda</h3>
                        <p align="center">&nbsp;</p>
                        <p align="center"> Introduzca Fecha de Fin: 
                          <input type="text" id="datepicker2" name="fin" value"" required></p>
                        <p align="center">Introduzca Hora de Inicio: 
                          <input type="text" name="horafin" id="time_element2" />
                        </p>
                        <p align="center">&nbsp;</p></td>

                    </tr>
                  </tbody>
                </table>

              </td>
            </tr>
          </tbody>
        </table>
        <table width="900" border="0" align="center">
          <tbody>
            <tr>
              <td width="70" align="center"><input value="Consultar" type="submit" /></td>
            </tr>
          </tbody>
        </table>
        </form>
      <p>&nbsp;</p>
      


      <div class="clear"></div>
    </div>
    <div class="clear bordered"></div>
    <div id="page">
      <h2 class="subhead"><span>Últimas entradas de la Bitácora</span></h2>
      <div class="post">
        <div class="posthead">
          <p class="date">Abril 06, 2015</p>
          <h3><a href="bitacora.php">Proyecto No.2, Bitácora No.3</a></h3>
          <p class="postmeta">Por Grupo 02 </p>
        </div>
        <p align="justify">Para esta tercera etapa fue necesario realizar la consulta con el fabricante (DCT) del modem Syrus para corregir el error del envío de la localización GPS. Ellos realizaron pruebas y ajustes remotamente, y al final con ayuda conjunta de nosotros se realizaron las últimas configuraciones y se corrigió el error que se venía presentando. <a href="bitacora.php">Leer más</a></p>
      </div>
      <div class="post">
        <div class="posthead">
          <p class="date">Marzo 16, 2015</p>
          <h3><a href="bitacora2.php">Proyecto No.2, Bitácora No.2</a></h3>
          <p class="postmeta">Por Grupo 02</p>
        </div>
        <p align="justify">Inicialmente, se hizo posible exportar la adquisición de coordenadas del Sniffer previamente implementado a una base de datos creada por medio de MySQL, evitado así el uso de un archivo de texto plano (.txt) para el almacenamiento y manejo de las coordenadas obtenidas. <a href="bitacora2.php">Leer más</a></p>
      </div>
      <div class="post">
        <div class="posthead">
          <p class="date">Marzo 09, 2015</p>
          <h3><a href="bitacora3.php">Proyecto No.2, Bitácora No.1</a></h3>
          <p class="postmeta">Por Grupo 02 </p>
        </div>
        <p align="justify">A partir de la culminación del primer proyecto, el cual consistió en adquirir las coordenadas de un modem GPS (Syrus) y enviarlas a un servidor para su correcta visualización en una cartografía mediante una página web, lo que se procede a desarrollar es una página web en donde se pueda consultar el recorrido realizado del vehículo, así mismo como la consulta de un historial de ubicación teniendo en cuenta la fecha y hora en la que el vehículo transitó. <a href="bitacora3.php">Leer más</a></p>
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
        <li><a href="https://developers.google.com/maps/" target="_blank">Google Map API</a></li>
        <li><a href="https://azure.microsoft.com/en-us/" target="_blank">Microsoft Azure</a></li>
        <li><a href="http://www.wampserver.com/en/" target="_blank">WampServer</a></li>
      </ul>
    </div>
    <div class="col2">
      <h2>Diseño Electrónico</h2>
      <p align="justify">Realizado como proyecto para la materia de Diseño Electrónico, Facultad de Ingeniería Electrónica, Universidad del Norte. </p>
      <ul>
        <li><a href="http://www.uninorte.edu.co" target="_blank">Universidad del Norte</a></li>
        <li><a href="http://www.uninorte.edu.co/web/ingenieria-electronica" target="_blank">Facultad de Ingeniería Electrónica</a></li>
      </ul>
    </div>
    <div class="col3">
      <h2>Github</h2>
      <p align="justify">Repositorio del proyecto en la plataforma de Github.</p>
      <ul>
        <li><a href="https://github.com/nestornesus/TransLocGPS" target="_blank">Repositorio de TransLoc </a></li>
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