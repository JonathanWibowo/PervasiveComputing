#Python 2.7.9 (default, Sep 17 2016, 20:26:04) 
#[GCC 4.9.2] on linux2
#Type "copyright", "credits" or "license()" for more information.
#source: Adafruit Library & https://www.youtube.com/watch?v=IHTnU1T8ETk (rdagger68)
import RPi.GPIO as GPIO
import Adafruit_DHT as dht #library for temperature
import time

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(16, GPIO.OUT)#for motor

h,t = dht.read_retry(dht.DHT22, 20)
print 'Temp = {0:0.2f}*C Humidity = {1:0.2f}%'.format(t, h)

while t > 24:
    try:
        GPIO.output(16, GPIO.HIGH)
    except(KeyboardInterrupt):
        quit()
