import RPi.GPIO as GPIO
from time import sleep

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(17, GPIO.OUT)

#blink the lamp
while True:
	GPIO.output(17, GPIO.HIGH)
	sleep(0.2)
	GPIO.output(17, GPIO.LOW)
	sleep(0.2)
