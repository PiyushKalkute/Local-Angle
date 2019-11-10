# -*- coding: utf-8 -*-
"""
Created on Mon Nov  4 11:28:37 2019

@author: ppk9364
"""

import matlab.engine
eng = matlab.engine.start_matlab()
x = eng.workspace['count'] 
print(x)