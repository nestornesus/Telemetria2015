 # -*- coding: utf-8 -*-
from __future__ import print_function
import mysql.connector
from mysql.connector import errorcode

DB_NAME = 'tranlocmysqltestdb'

TABLES = {}
TABLES['GPS'] = (
	"CREATE TABLE `tranlocmysqltestdb`.`GPS2` ("
	"`ID` INT NOT NULL AUTO_INCREMENT,"
	"`Fecha`  DATETIME NOT NULL,"
	"`Latitud`  CHAR(9) NOT NULL,"
	"`Longitud`  CHAR(13) NOT NULL,"
	"PRIMARY KEY (`ID`)"
	");")
	
#cnx = mysql.connector.connect(user = 'root', password = '',
#                              host = 'localhost',
#                              database = 'tranlocmysqltestdb')

cnx = mysql.connector.connect(user = 'bfb33240729490', password = 'cb24cf9d',
                              host = 'us-cdbr-azure-southcentral-e.cloudapp.net',
                              database = 'tranlocmysqltestdb')
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
