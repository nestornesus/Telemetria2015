 # -*- coding: utf-8 -*-
from __future__ import print_function
from datetime import date, datetime, timedelta
import mysql.connector

cnx = mysql.connector.connect(user='root', database='telemetria')
cursor = cnx.cursor()


add_location = ("INSERT INTO gps "
               "(Semana, Día, Hora, Latitud, Longitud) "
               "VALUES (%s, %s, %s, %s, %s)")

data_location = ('sssss', 'd', 'hhhh', 'MMMMmmm', 'NNNnnnnn')

# Insert new employee
cursor.execute(add_location, data_location)
emp_no = cursor.lastrowid


# Make sure data is committed to the database
cnx.commit()
cursor.close()
cnx.close()
