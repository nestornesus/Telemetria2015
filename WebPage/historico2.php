<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?sensor=false"></script>
  <title>TransLoc - Registro Histórico</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="style.css" rel="stylesheet" type="text/css" />



</head>



  <?php
    $start = $_POST['inicio'];
    $end = $_POST['fin'];
    $starttime = $_POST['horaini'];
    $endtime = $_POST['horafin'];
    // MM/DD/AAAA
    // HH:MM:SS
    //inicio
    $diaini = substr($start,3,2);
    $mesini = substr($start,0,2);
    $anoini = substr($start,6,10);
    $hourini =substr($starttime,0,2);
    $minini = substr($starttime,5,2);
    $ampmini =substr($starttime,10,12);
    
    //fin
    $diafin = substr($end,3,2);
    $mesfin = substr($end,0,2);
    $anofin = substr($end,6,10);
    $hourfin =substr($endtime,0,2);
    $minfin = substr($endtime,5,2);
    $ampmfin =substr($endtime,10,12);
    
    //AM & PM
    if ($ampmini=="PM") $hourini = ($hourini + 12)%24;
    if ($ampmfin=="PM") $hourfin = ($hourfin + 12)%24;
    //
    $comienzo = "{$anoini}-{$mesini}-{$diaini} {$hourini}:{$minini}:00";
    $termino  = "{$anofin}-{$mesfin}-{$diafin} {$hourfin}:{$minfin}:00";
    $query ="select fecha, latitud, longitud from gps where Fecha >= '{$comienzo}' and Fecha <= '{$termino}';";
  ?>

  <?php
    $con = mysqli_connect("us-cdbr-azure-southcentral-e.cloudapp.net","bfb33240729490","cb24cf9d","tranlocmysqltestdb");
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $result = $con->query($query);
    if ($result->num_rows > 0) {
      // output data of each row
      $i=0;
      while($row = $result->fetch_assoc()) {
        $fecha[$i]    = $row["fecha"];
        $latitud[$i]  = floatval($row["latitud"]);
        $longitud[$i] = floatval($row["longitud"]);
        //echo $fecha[$i]. " ". $latitud[$i]. " ". $longitud[$i]. "</br>";
        $i++;
      }
    } else {
      echo "0 results";
    }  
    $con->close();
  ?>
  <script type='text/javascript'>
    
    <?php
      $js_array = json_encode($fecha);
      echo "var fecha = ". $js_array . ";\n";

      $js_array2 = json_encode($latitud);
      echo "var lat = ". $js_array2 . ";\n";

      $js_array3 = json_encode($longitud);
      echo "var longi = ". $js_array3 . ";\n";
    ?>
    //i=0;
    //document.write(fecha[i],"<br>",lat[i],"<br>", longi[i]);

  </script>


    <script>
      function toggletext(cid){
        if ( document.getElementById(cid).style.display == "none" ){
          document.getElementById(cid).style.display = "block";
        }
        else{
          document.getElementById(cid).style.display = "none";
        };
      }
      // functions below
      var map;
      //Make an array with the coordinates from the db
      function initialize() {
        var posicion= [];
        for (var i=0; i< lat.length; i++){
          posicion.push(new google.maps.LatLng(lat[i], longi[i])); // Add the coordinates
        }

        var mapOptions = {
          zoom: 18,
          center: posicion[lat.length-1],
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('mainimg'), mapOptions); // Render our map within the empty div

        //var myLatlng = posicion[lat.length-1];
        var marker, i;
        var infowindow = new google.maps.InfoWindow();

        for(var i=0; i<lat.length; i++){
          var marker = new google.maps.Marker({
            position: new google.maps.LatLng(lat[i], longi[i]),
            icon:"http://maps.google.com/mapfiles/ms/micons/blue.png",
            map: map,
          });
          google.maps.event.addListener(marker, 'mouseover', (function(marker, i){
            return function(){
              infowindow.setContent(' '+fecha[i]+' ');
              infowindow.open(map, marker);
            }
          })(marker, i));
        }
      //alert(juancio.length);
      var linea = new google.maps.Polyline({
      path: posicion,
        geodesic: true,
        strokeColor: '#FF0000',
        strokeOpacity: 1.0,
        strokeWeight: 2
      });



        linea.setMap(map);
    }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>


<body>
  <div id="topbanner">
    <div class="container">
      <h1 id="sitename"><a href="index.php">TransLoc</a> <span>Geolocalización Vehicular</span></h1>
      <div id="mainnav">
        <ul>
          <li><a href="index.php">Geolocalización<span>En Tiempo Real</br> </span></a></li>
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
        <div id="mainimg" width="700" height="330"/></div>
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
          <h2 align="center">Consulta Histórica</h2>
          <p align="center">Resultados de la búsqueda en el periodo de tiempo especificado.</p>
          <table width="600" border="0" align="center">
            <tbody>
              <tr>
                <td width="567" height="60">
                  <table width="100%" height="60" border="0" align="center">
                  <tr>
                    <td width="33%" height="25"><strong><font face="verdana">Fecha</font></strong></td>
                    <td width="33%" height="25"><strong><font face="verdana">Latitud</font></strong></td>
                    <td width="33%" height="25"><strong><font face="verdana">Longitud</font></strong></td>
                  </tr>
                  <tr>
                    <td width="33%"><script> for ( i = fecha.length-1; i>=0; i--) document.write(fecha[i],"<br>");</script></td>
                    <td width="33%"><script> for ( i = lat.length-1; i>=0; i--)   document.write(lat[i],"<br>");  </script></td>
                    <td width="33%"><script> for ( i = longi.length-1; i>=0; i--) document.write(longi[i],"<br>");</script></td>
                  </tr>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="clear"></div>
      </div>

        <div class="clear bordered"></div>
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