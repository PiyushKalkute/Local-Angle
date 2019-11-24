# -*- coding: utf-8 -*-
"""
Created on Sat Nov 16 14:13:02 2019

@author: ssd2702
"""
import mysql.connector
import requests
from newsplease import NewsPlease
from bs4 import BeautifulSoup as soup
from urllib.request import urlopen

def get_articles_list():
    news_url="https://news.google.com/news/rss"
    Client=urlopen(news_url)
    xml_page=Client.read()
    Client.close()

    soup_page=soup(xml_page,"xml")
    news_list=soup_page.findAll("item")
# Print news title, url and publish date

    article_list = []
    for news in news_list:
        #print(news.title.text)
      article_list.append(news.link.text)
      #print(news.link.text)
      #print(news.pubDate.text)
      #print(news.text)
    
    return(article_list)

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="root@123",
  database="sakila"
 )
mycursor = mydb.cursor()
url_list = get_articles_list()
#mycursor.execute("DROP TABLE IF EXISTS Links ")

#mycursor.execute("CREATE TABLE LINKS (LINK VARCHAR(1023), TITLE VARCHAR(1023), PUBLISHED_TIME VARCHAR(100))")
sql = "INSERT INTO LINKS (LINK, TITLE,PUBLISHED_TIME) VALUES (%s, %s, %s)"

for ur in url_list :
    try:
        article = NewsPlease.from_url(ur)
        url_req = requests.get(ur)
        
        print(url_req.url)
        print(article.date_publish)
        val = (url_req.url , article.title ,article.date_publish)
        mycursor.execute(sql, val)
        mydb.commit()
        print("########################################")
    except:
       print("Article error")
