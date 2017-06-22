#!/usr/bin/env python
# -*- coding: utf-8 -*-

import serial
import time
import json

dict = {}
count = 1

# def main():
s = serial.Serial('/dev/ttyACM0',57600)
time.sleep(2)
print s.portstr
f = open('output.json', 'w')
for num in range(100):
    str = s.read(5)
    dict[count] = str
    count+=1

json.dump(dict, f, sort_keys=True, indent=4)

# if __name__ == '__main__':
#     main()
