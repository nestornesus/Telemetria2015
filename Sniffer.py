import socket
UDP_IP = "192.168.1.52"
UDP_PORT = 1029
MESSAGE = "SNIFFER EN PROGRESO"

print "UDP target IP:", UDP_IP
print "UDP target port:", UDP_PORT
print "message:", MESSAGE

sock = socket.socket(socket.AF_INET, socket.SOCK_DGRAM) # UDP

#socket.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
sock.bind((UDP_IP, UDP_PORT))
#socket.connect((UDP_IP, UDP_PORT))

while True:
    data, addr = sock.recvfrom(1024) # buffer size is 1024 bytes
    lati = data[16:19]+'.'+data[19:24]
    longi = data[24:28] + '.' + data[28:33]
    week = data[6:11]
    day = data[11:12]
    time = data[12:16]

    print "Coordenada:", data
    print "Longitud:", longi
    print "Latitud:", lati
    print "Semana:", week
    print "Dia:", day
    print "Hora:", time

    text_file = open("longitud.txt", "w")
    text_file.write("%s"%longi)
    text_file = open("latitud.txt", "w")
    text_file.write("%s"%lati)

    text_file = open("semana.txt", "w")
    text_file.write("%s"%week)
    text_file = open("dia.txt", "w")
    text_file.write("%s"%day)
    text_file = open("hora.txt", "w")
    text_file.write("%s"%time)
    text_file.close()

sock.shutdown(1)
sock.close()

