# -*- coding: utf-8 -*-
"""
Created on Mon Nov 11 01:21:00 2019

@author: ppk9364
"""

import mysql.connector

from SPARQLWrapper import SPARQLWrapper, JSON

sparql = SPARQLWrapper("http://dbpedia.org/sparql")
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="root@123",
  database="sakila"
)

mycursor = mydb.cursor()
mycursor.execute("DROP TABLE IF EXISTS Tags ")

mycursor.execute("CREATE TABLE Tags (LINK VARCHAR(255),NAME VARCHAR(25))")
mycursor.execute("SELECT * FROM ALUMNA")

myresult = mycursor.fetchall()
xs =[]
for x in myresult:
  xs.append('""" "'+x[1].replace(" ","_")+'" """')
print(xs) 
for x in xs:
    print(x)
    sparql.setQuery("""
                    PREFIX foaf: <http://xmlns.com/foaf/0.1/>

    SELECT DISTINCT ?link ?person_full_name ?birth_place ?alma_mater
    WHERE { ?link a foaf:Person. ?link ?p ?person_full_name.
           ?link rdfs:label ?person_name .
           ?person_name bif:contains """ +x+""".
           OPTIONAL { ?link dbo:birthPlace ?birth_place . }
           OPTIONAL { ?link dbo:almaMater ?alma_mater .}
           OPTIONAL { ?link dbp:almaMater ?alma_mater .}
           FILTER(langMatches(lang(?person_full_name), "en")) .}
    """)
    sparql.setReturnFormat(JSON)
    results = sparql.query().convert()
    i=0
    for result in results["results"]["bindings"]:
            #print(results["results"]["birth_place"])    
            aset = set()
            try:
                print(result["birth_place"]["value"])
                print(result["alma_mater"]["value"])

            except:
                break
            
            print("**********************************************")
            i+=1




    
  