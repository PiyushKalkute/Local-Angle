import mysql.connector
import scraper as sc
import ner 
import sparql as spq
from functools import reduce
import operator

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="root@123",
  database="sakila"
  
  
)

mycursor = mydb.cursor()
mycursor2 = mydb.cursor()
mycursor.execute("DROP TABLE IF EXISTS Tags ")

mycursor.execute("CREATE TABLE TAGS (NAME VARCHAR(1023), BIRTHPLACE VARCHAR(100), UNIVERSITY VARCHAR(100))")



tags = spq.get_tuples()
#cursor2 = mydb.cursor()
sql = "INSERT INTO TAGS (NAME, BIRTHPLACE, UNIVERSITY) VALUES (%s, %s, %s)"

for tag in tags:   
    mycursor.execute(sql, tag)
    mydb.commit()

mycursor.execute("DROP TABLE IF EXISTS GEO_TAGS ")

mycursor.execute("CREATE TABLE GEO_TAGS (NAME VARCHAR(255), BIRTHPLACE VARCHAR(100))")
mycursor.execute("INSERT INTO GEO_TAGS (NAME,BIRTHPLACE) SELECT DISTINCT NAME,BIRTHPLACE FROM TAGS")

mycursor2.execute("DROP TABLE IF EXISTS ALUM_TAGS ")

mycursor2.execute("CREATE TABLE ALUM_TAGS (NAME VARCHAR(255), UNIVERSITY VARCHAR(100))")

mycursor2.execute("INSERT INTO ALUM_TAGS (NAME,UNIVERSITY) SELECT DISTINCT NAME,UNIVERSITY FROM TAGS")
mydb.commit()

print(mycursor.rowcount, "records inserted in geo_tags.")
print(mycursor2.rowcount, "records inserted in alum_tags.")