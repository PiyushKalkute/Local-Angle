# -*- coding: utf-8 -*-
"""
Created on Wed Nov  6 15:58:29 2019

@author: aditi
"""

from SPARQLWrapper import SPARQLWrapper, JSON

sparql = SPARQLWrapper("http://dbpedia.org/sparql")
sparql.setQuery("""
PREFIX foaf: <http://xmlns.com/foaf/0.1/>

SELECT DISTINCT ?link ?person_full_name ?birth_place ?alma_mater
WHERE { ?link a foaf:Person. ?link ?p ?person_full_name.
FILTER(?p IN(dbo:birthName,dbp:birthName ,dbp:fullname,dbp:name)).
?link rdfs:label ?person_name .
?person_name bif:contains "Donald_Trump" .
OPTIONAL { ?link dbo:birthPlace ?birth_place . }
OPTIONAL { ?link dbo:almaMater ?alma_mater .}
FILTER(langMatches(lang(?person_full_name), "en")) .}
""")
sparql.setReturnFormat(JSON)
results = sparql.query().convert()

for result in results["results"]["bindings"]:
    print(result["person_full_name"]["value"])
    print(result["birth_place"]["value"])
    print(result["alma_mater"]["value"])
    print("**********************************************")