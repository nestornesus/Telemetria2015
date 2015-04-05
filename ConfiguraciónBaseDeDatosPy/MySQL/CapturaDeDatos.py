# -*- coding: utf-8 -*-
import mysql.connector, socket
from urllib2 import urlopen

UDP_IP = "192.168.1.64"
UDP_PORT = 1024
MESSAGE = "SNIFFER EN PROGRESO"
counter = 0
my_ip = urlopen('http://ip.42.pl/raw').read()

print "Server IP:", my_ip
print "UDP target IP:", UDP_IP
print "UDP target port:", UDP_PORT
print "message:", MESSAGE

sock = socket.socket(socket.AF_INET, socket.SOCK_DGRAM) # UDP

#socket.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
sock.bind((UDP_IP, UDP_PORT))
#socket.connect((UDP_IP, UDP_PORT))



while True:
    counter +=1
    data, addr = sock.recvfrom(1024) # buffer size is 1024 bytes, format: XXXXXXsssssdhhhhMMMMmmmNNNnnnnn
    Cmd1  = data[1:4]
    Index = data[4:6]
    week  = data[6:10]
    day   = data[10]
    time  = data[11:16]
    lati  = data[16:19] + '.' + data[19:24]
    longi = data[24:28] + '.' + data[28:33]
    speed = data[33:36]
    headi = data[36:39]
    mode  = data[39]
    age   = data[40]

    print ""
    print "//------Captura: ",counter
    print "Coordenada:", data
    print "Semana:", week
    print "Dia:", day
    print "Hora:", time    
    print "Latitud:", lati
    print "Longitud:", longi
	
    #Acceso a la base de datos
    cnx = mysql.connector.connect(user='root', database='telemetria')
    cursor = cnx.cursor()
	
    #Se hace la Syntaxis de destino
    

    
    add_location = ("insert into gps "
                    "(Fecha,Día,Latitud, Longitud) "
                    "value (concat(makedate(1980,%s*7+%s+6),' ',sec_to_time(%s)),dayname(19930110+%s),%s,%s)")
    
	#SyntaxDataLocation
    data_location = (week, day, time,day, lati, longi)
    
	# Insert new location
    cursor.execute(add_location, data_location)
    
	# Make sure data is committed to the database
    cnx.commit()
    cursor.close()
    cnx.close()
		
		
sock.shutdown(1)    
sock.close()

