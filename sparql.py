# -*- coding: utf-8 -*-
"""
Created on Wed Nov  6 15:58:29 2019
@author: aditi
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
#x =""" "David_Schwimmer" """
def get_tuples():
    tuples = []
    
    
    mycursor.execute("SELECT * FROM ALUMNA")

    myresult = mycursor.fetchall()
    xs =[]
    for x in myresult:
        xs.append('""" "'+x[1].replace(" ","_")+'" """')
   #xs = [""" "David_Schwimmer" """,""" "Donald_Trump" """,""" "Narendra_Modi" """,""" "Stephen_Colbert" """,""" "Meghan_Markle" """]
    for x in xs:
        #print(x.replace("_"," "))
        #print(x)
        sparql.setQuery("""
                        PREFIX foaf: <http://xmlns.com/foaf/0.1/>
                        SELECT DISTINCT ?link ?person_full_name ?birth_place ?alma_mater
                        WHERE { ?link a foaf:Person. ?link ?p ?person_full_name.
                               OPTIONAL{ FILTER(?p IN(dbo:birthName,dbp:birthName ,dbp:fullname,dbp:name)). }
                               ?link rdfs:label ?person_name .
                               ?person_name bif:contains """+x+""".
                               OPTIONAL { ?link dbo:birthPlace ?birth_place . }
                               OPTIONAL { ?link dbo:almaMater ?alma_mater .}
                               OPTIONAL { ?link dbp:almaMater ?alma_mater .}
               FILTER(langMatches(lang(?person_full_name), "en")) .}
                """)
        sparql.setReturnFormat(JSON)
        results = sparql.query().convert()
        for result in results["results"]["bindings"][:]:
            try:
                name = x.replace(" ","").replace("_"," ").replace('"','')
                bplace = result["birth_place"]["value"].rsplit('/',1)[1].replace("_"," ")
                uni = result["alma_mater"]["value"].rsplit('/',1)[1].replace("_"," ")
                tuple = (name, bplace, uni)
                tuples.append(tuple)
            except:
                break
    return tuples
