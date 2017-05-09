import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)#for GPIO numbering
GPIO.setwarnings(False)#making warning message not appear
GPIO.setup(18,GPIO.OUT)#set GPIO port 18 as output
GPIO.output(18,GPIO.LOW)#turn off the lamp
