# -*- coding: utf-8 -*-
"""
Created on Wed Nov 20 18:32:03 2019

@author: ppk9364
"""

from tkinter import *
import mysql.connector
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="root@123",
  database="sakila"
 )
mycursor = mydb.cursor()
class MyWindow:
    def __init__(self, win):
        self.lbl1=Label(win, text='Your City')
        self.lbl2=Label(win, text='Your School')
        self.lbl3=Label(win, text='Result')
        self.t1=Entry()
        self.t2=Entry()
        self.t3=Entry()
        self.btn1 = Button(win, text='Get the angle')
        self.btn2=Button(win, text='Subtract')
        self.lbl1.place(x=100, y=50)
        self.t1.place(x=200, y=50)
        self.lbl2.place(x=100, y=100)
        self.t2.place(x=200, y=100)
        self.b1=Button(win, text='Get the angle', command=self.add)
        self.b2=Button(win, text='Subtract')
        self.b2.bind('<Button-1>', self.sub)
        self.b1.place(x=100, y=150)
        self.b2.place(x=200, y=150)
        self.lbl3.place(x=100, y=200)
        self.t3.place(x=200, y=200)
    def add(self):
        self.t3.delete(0, 'end')
        num1=int(self.t1.get())
        num2=int(self.t2.get())
        result=num1
        n = []
        n.append('""" "%'+num1.replace(" ","_")+'%" """')
        sql = """SELECT * from links where LINK IN  (Select link from alumna where
                        NAME IN(
                                SELECT Name FROM geo_tags
                                    where  BIRTHPLACE like """+n+"""))"""
        result= mycursor.execute(sql)
        
        self.t3.insert(END, str(result))


window=Tk()
mywin=MyWindow(window)
window.title('Hello Python')
window.geometry("400x300+10+10")
window.mainloop()