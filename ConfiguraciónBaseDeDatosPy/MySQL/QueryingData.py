import mysql.connector

cnx = mysql.connector.connect(user='root', database='telemetria')
cursor = cnx.cursor()

#query = ("SELECT id, Latitud,Longitud FROM GPS"
#         "WHERE id BETWEEN %s AND %s")
query = ("SELECT * FROM GPS")

id_start = 1
id_end 	 = 10

cursor.execute(query)

for (ID) in cursor:
  print("{}:".format(
    id))

cursor.close()
cnx.close()
