import os
import time
import datetime
import glob
from time import strftime
 
os.system('modprobe w1-gpio')
os.system('modprobe w1-therm')
temp_sensor = '/sys/bus/w1/devices/28-00000622fd44/w1_slave'
 
def tempRead():
        t = open(temp_sensor, 'r')
        lines = t.readlines()
        t.close()
 
        temp_output = lines[1].find('t=')
        if temp_output != -1:
                temp_string = lines[1].strip()[temp_output+2:]
                temp_c = float(temp_string)/1000.0
        return round(temp_c,1)
 
while True:
    temp = tempRead()
    print temp
    datetimeWrite = (time.strftime("%Y-%m-%d ") + time.strftime("%H:%M:%S"))
    print datetimeWrite
    break
	
#Source : https://wingoodharry.wordpress.com/2014/12/24/raspberry-pi-temperature-sensor-web-server-part-1-intro-sensor-setup-and-python-script/