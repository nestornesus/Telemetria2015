import socket
import time
import MySQLdb 

UDP_IP = ''
UDP_PORT = 1717
MESSAGE = "SNIFFER EN PROGRESO"

print "UDP target IP:", UDP_IP
print "UDP target port:", UDP_PORT
print "message:", MESSAGE

sock = socket.socket(socket.AF_INET, #Internet
    socket.SOCK_DGRAM)
sock.bind(('', UDP_PORT))

while True:
    data, addr = sock.recvfrom(1024) # buffer size is 1024 bytes

    print "Coordenadas recibidas:", data    #Imprime lo que recibe en el puerto
        
        signolong = str(data[16])           #Signo longitut
        signolatit = str(data[24])          #Signo latitud
        longt = float(data[17:19])          #Longitud
        latit = float(data[26:28])          #Latitud
        decilongt=float(data[19:23])        #Decimal longitud
        decilatit=float(data[28:32])        #Decimal latitud
        decilongt=decilongt/10000           #Se dividen entre 10000 para que al sumarlos queden en formato decimal
        decilatit=decilatit/10000        
        longt=longt+decilongt
        latit=latit+decilatit

    print "Hora: "                          #Imprime la fecha y hora
    print (time.strftime("%H:%M:%S"))
    print "Fecha: "
    print (time.strftime("%Y/%m/%d"))
        
        fechora = (time.strftime("%Y-%m-%d")) +" "+ (time.strftime("%H:%M:%S"))
        latitudcita='-'+str(latit)
        longitudcita=str(longt)
    
    # Open database connection
    db = MySQLdb.connect("us-cdbr-azure-southcentral-e.cloudapp.net","bfb33240729490","cb24cf9d","testdb")

        cursor = db.cursor()
        coord=str(data);
    sql = """INSERT INTO Datos(Lat, Lon, Time, RAW) 
          VALUES ('-69.8423', '99.9323', 'fechora', "coords")"""
    ser = sql.replace('-69.8423', longitudcita);
    jua = ser.replace('99.9323', latitudcita);
    mar = jua.replace('fechora', fechora);
    mon = mar.replace('coords', coord);
    
    try:
        # Execute the SQL command
        cursor.execute(mon)
        # Commit your changes in the database
        db.commit()
    except:
        # Rollback in case there is any error
        db.rollback()

    # disconnect from server
    db.close()

    print "Longitud: ",signolong, longt, "     Latitud: ",signolatit, latit #Imprime la localizacion