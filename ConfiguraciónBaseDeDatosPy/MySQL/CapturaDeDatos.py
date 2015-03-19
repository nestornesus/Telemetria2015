# -*- coding: utf-8 -*-
import mysql.connector, socket

UDP_IP = "192.168.1.109"
UDP_PORT = 1024
MESSAGE = "SNIFFER EN PROGRESO"
counter = 0

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
    week  = data[6:11]
    day   = data[11:12]
    time  = data[12:16]
    lati  = data[16:19] + '.' + data[19:24]
    longi = data[24:28] + '.' + data[28:33]

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
    add_location = ("INSERT INTO gps "
    		   "(Semana, Día, Hora, Latitud, Longitud) "
    		   "VALUES (%s, %s, %s, %s, %s)")
    
	#SyntaxDataLocation
    data_location = (week, day, time, lati, longi)
    
	# Insert new location
    cursor.execute(add_location, data_location)
    
	# Make sure data is committed to the database
    cnx.commit()
    cursor.close()
    cnx.close()
		
		
sock.shutdown(1)    
sock.close()

