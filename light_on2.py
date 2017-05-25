import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)#for GPIO numbering
GPIO.setwarnings(False)#remove warning
GPIO.setup(17,GPIO.OUT)#set GPIO 17 as output
GPIO.output(17,GPIO.HIGH)#turn on the light
