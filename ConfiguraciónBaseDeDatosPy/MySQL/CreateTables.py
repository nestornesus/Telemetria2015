 # -*- coding: utf-8 -*-
from __future__ import print_function
import mysql.connector
from mysql.connector import errorcode

DB_NAME = 'Telemetria'

TABLES = {}
TABLES['GPS'] = (
	"CREATE TABLE `Telemetria`.`GPS` ("
	"`ID` INT NOT NULL AUTO_INCREMENT,"
	"`Fecha`  DATETIME NOT NULL,"
	"`Día`  CHAR(1) NOT NULL,"
	"`Latitud`  CHAR(9) NOT NULL,"
	"`Longitud`  CHAR(13) NOT NULL,"
	"PRIMARY KEY (`ID`)"
	");")
	

cnx = mysql.connector.connect(user='root')
cursor = cnx.cursor()

def create_database(cursor):
    try:
        cursor.execute(
            "CREATE DATABASE {} DEFAULT CHARACTER SET 'utf8'".format(DB_NAME))
    except mysql.connector.Error as err:
        print("Failed creating database: {}".format(err))
        exit(1)

try:
    cnx.database = DB_NAME    
except mysql.connector.Error as err:
    if err.errno == errorcode.ER_BAD_DB_ERROR:
        create_database(cursor)
        cnx.database = DB_NAME
    else:
        print(err)
        exit(1)

for name, ddl in TABLES.iteritems():
    try:
        print("Creating table {}: ".format(name), end='')
        cursor.execute(ddl)
    except mysql.connector.Error as err:
        if err.errno == errorcode.ER_TABLE_EXISTS_ERROR:
            print("already exists.")
        else:
            print(err.msg)
    else:
        print("OK")

cursor.close()
cnx.close()
