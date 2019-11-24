# -*- coding: utf-8 -*-
"""
Created on Wed Nov 13 17:16:59 2019

@author: ppk9364
"""
import requests
from newsplease import NewsPlease
import mysql.connector
import scraper as sc
import ner 
import google_news as gn
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="root@123",
  database="sakila"
)
mycursor = mydb.cursor()
#mycursor.execute("DROP TABLE IF EXISTS ALUMNA ")
#mycursor.execute("CREATE TABLE ALUMNA (LINK VARCHAR(1023),NAME VARCHAR(100))")

urls = gn.get_articles_list()
xs = []
#mycursor.execute("SELECT DISTINCT LINK FROM LINKS")

#myresult = mycursor.fetchall()
#for x in myresult:
 #       xs.append(x[0].replace("'",""))
#print("*****************")

#print(myresult)
#urls = ['https://www.nytimes.com/2019/11/13/arts/television/stephen-colbert-late-night-trump-impeachment.html','https://www.usatoday.com/story/opinion/2019/10/30/donald-trump-focus-impeachment-case-stop-character-assassinations-editorials-debates/4098612002/','https://www.usatoday.com/story/news/politics/2019/11/10/john-bolton-signs-book-deal-may-publish-before-election-reports/2555594001/']
for my_url in urls:
    print(my_url)

  #  my_url = 'https://www.usatoday.com/story/opinion/2019/10/30/donald-trump-focus-impeachment-case-stop-character-assassinations-editorials-debates/4098612002/'
    try:
        article = NewsPlease.from_url(my_url)
        content = article.text
        #link, content = sc.return_link_content(my_url)
        link_url = requests.get(my_url)
        
    except:
        print("Scraping error")
    names = ner.get_human_names(content)
    
    sql = "INSERT INTO ALUMNA (LINK, NAME) VALUES (%s, %s)"
    for i in names:   
        val = (link_url.url, i)
        #try:
        mycursor.execute(sql, val)
        mydb.commit()
        #except:
           # print("Name length error")
    names.clear()
print(mycursor.rowcount, "records inserted.")
