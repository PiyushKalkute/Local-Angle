# -*- coding: utf-8 -*-
"""
Created on Wed Oct 30 18:00:21 2019

@author: ppk9364
"""


from selenium import webdriver

#my_url = 'https://www.msn.com/en-us/lifestyle/royals/meghan-markle-personally-calls-british-politician-to-thank-her-for-orchestrating-letter-of-solidarity/ar-AAJAeJX'

def return_link_content(my_url):
    driver = webdriver.Chrome(executable_path=r'C:/Users/PPK9364/Downloads/chromedriver_win32/chromedriver.exe');
    driver.get(my_url)
    textArray = driver.execute_script("var articleElement = document.querySelector('article').innerText;  return articleElement;")
    driver.close()
    return my_url, textArray
  


