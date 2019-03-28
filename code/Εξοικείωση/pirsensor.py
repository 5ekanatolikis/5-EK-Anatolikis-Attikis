#εισαγωγή απαιτούμενων βιβλιοθηκών
from gpiozero import MotionSensor
from signal import pause
import time

#δηλώνουμε την θέση στην οποία συνδέσαμε το PIR
pir=MotionSensor(14)
#για να δημιουργήσουμε μια συνεχόμενη επανάληψη #χρησιμοποιούμε το while True
while True:
#Λέμε στο πρόγραμμα να κάνει παύση για 4 δευτερόλεπτα
    time.sleep(4)
#έλεγχος εάν βρέθηκε κίνηση
    if pir.motion_detected:
#κίνηση βρέθηκε
	print ('Βρέθηκε Κίνηση')
    else:
#κίνηση δεν βρέθηκε
	print ('Δεν Βρέθηκε Κίνηση')
