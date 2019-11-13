# -*- coding: utf-8 -*-
"""
Created on Sun Nov  3 17:37:37 2019

@author: ppk9364
"""

import xlrd
import mysql.connector


# Open the workbook and define the worksheet
book = xlrd.open_workbook("C:/Users/PPK9364/Downloads/trial.xlsx")
sheet = book.sheet_by_index(0) 

# Establish a MySQL connection
database = mysql.connector.connect (host="localhost", user = "root", passwd = "root@123", db = "sakila")

# Get the cursor, which is used to traverse the database, line by line
cursor = database.cursor()

# Create the INSERT INTO sql query
query = """INSERT INTO boats (name) VALUES(%s)"""
# Create a For loop to iterate through each row in the XLS file, starting at row 2 to skip the headers
for r in range(1, sheet.nrows):
    name = sheet.cell_value(r,1)
    print(name)

    print("^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^")
    values = (name,)
    cursor.execute(query, values)

# Close the cursor
cursor.close()

# Commit the transaction
database.commit()

# Close the database connection
database.close()

# Print results
print ("")
print ("All Done! Bye, for now.")
print ("")
columns = str(sheet.ncols)
rows = str(sheet.nrows)

