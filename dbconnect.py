import mysql.connector
import scraper as sc
import ner 
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="root@123",
  database="sakila"
)

urls = ['https://www.usatoday.com/story/opinion/2019/10/30/donald-trump-focus-impeachment-case-stop-character-assassinations-editorials-debates/4098612002/','https://www.usatoday.com/story/news/politics/2019/11/10/john-bolton-signs-book-deal-may-publish-before-election-reports/2555594001/']
for my_url in urls:
  #  my_url = 'https://www.usatoday.com/story/opinion/2019/10/30/donald-trump-focus-impeachment-case-stop-character-assassinations-editorials-debates/4098612002/'
    link, content = sc.return_link_content(my_url)

    names = ner.get_human_names(content)

    mycursor = mydb.cursor()
    mycursor.execute("DROP TABLE IF EXISTS ALUMNA ")

    mycursor.execute("CREATE TABLE ALUMNA (LINK VARCHAR(255),NAME VARCHAR(25))")



    sql = "INSERT INTO ALUMNA (LINK, NAME) VALUES (%s, %s)"
    val = ("James", "Highway 21")
    for i in names:   
        val = (link, i)
        mycursor.execute(sql, val)
        mydb.commit()

    print(mycursor.rowcount, "records inserted.")