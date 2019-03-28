#εισαγωγή απαιτούμενων βιβλιοθηκών
import Adafruit_DHT
import time

while True:
#δηλώνουμε τον αισθητήρα
    sensor = Adafruit_DHT.DHT11
#δηλώνουμε την θέση στην οποία συνδέσαμε τον αισθητήρα θερμοκρασίας
    pin = 15
#δημιουργούμε μεταβλητες για την υγρασία και τη θερμοκρασία
    humidity, temperature = Adafruit_DHT.read_retry(sensor, pin)
#Λέμε στο πρόγραμμα να κάνει παύση για 4 δευτερόλεπτα
    time.sleep(5)
#έλεγχος για αποτυχια
    if humidity is not None and temperature is not None:
#τύπωσε στην οθόνη την θερμοκρασία και την υγρασία
    	print('Θερμοκρασία={0:0.1f}*C  Υγρασία={1:0.1f}%'.format(temperature, humidity))
    else:
	print('Αποτυχία!')
