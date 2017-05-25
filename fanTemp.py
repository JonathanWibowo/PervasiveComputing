#Python 2.7.9 (default, Sep 17 2016, 20:26:04) 
#[GCC 4.9.2] on linux2
#Type "copyright", "credits" or "license()" for more information.
#source: Adafruit Library & https://www.youtube.com/watch?v=IHTnU1T8ETk (rdagger68)
import RPi.GPIO as GPIO
import Adafruit_DHT as dht #library for temperature
from time import sleep


sensor = 20#port 20 for sensor
fan = 21#port 21 for lamp
maxTemp = 25.4

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(fan, GPIO.OUT)#for motor

while True:
    sleep(3)
    h, t = dht.read_retry(dht.DHT22, 20)
    print 'Temperature = {0:0.2f}*C Humidity = {1:0.2f}%'.format(t, h)
        
    if t > maxTemp:
        GPIO.output(fan, GPIO.HIGH)
        print 'Fan on'
    else:
        GPIO.output(fan, GPIO.LOW)
        print ' Fan off'
