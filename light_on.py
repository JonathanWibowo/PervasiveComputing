import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)#for GPIO numbering
GPIO.setup(18,GPIO.OUT)#set GPIO 18 as output
GPIO.output(18,GPIO.HIGH)#turn on the light
