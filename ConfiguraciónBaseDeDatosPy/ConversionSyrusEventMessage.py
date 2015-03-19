# -*- coding: utf-8 -*-
#data   = >REV 37 1835 6 00502 +10_98894 -074_81161 000 287 3 2;ID=GRUPO2<
#Syntax =      II WWWW D SSSSS XXX xxxxx YYYY yyyyy SSS HHH M A[EXTENDED-EV TAGS]
#datapos= 0123 45 6789 0 12345 678 90123 4567 89012 345 678 9 0
#                      1            2           3             4

nombreDia =['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado']

data  = '>REV371835600502+1098894-0748116100028732;ID=GRUPO2<'
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
print "//------Captura: "
print "Data:", data
print "Command:", Cmd1
print "Index:", Index
print "Semanas desde 6 de Enero de 1980:", week
print "Dia", day, ":",nombreDia[int(day)]
print "Segundos:", time
print "Latitud:  ",lati
print "Longitud:", longi
print "velodidad:", speed
print "heading:", headi
print "mode", mode
print "recibido hace:", age
