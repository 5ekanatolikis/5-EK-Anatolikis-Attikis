#�������� ������������ �����������
import Adafruit_DHT
import time

while True:
#��������� ��� ���������
    sensor = Adafruit_DHT.DHT11
#��������� ��� ���� ���� ����� ��������� ��� ��������� ������������
    pin = 15
#������������ ���������� ��� ��� ������� ��� �� �����������
    humidity, temperature = Adafruit_DHT.read_retry(sensor, pin)
#���� ��� ��������� �� ����� ����� ��� 4 ������������
    time.sleep(5)
#������� ��� ��������
    if humidity is not None and temperature is not None:
#������ ���� ����� ��� ����������� ��� ��� �������
    	print('�����������={0:0.1f}*C  �������={1:0.1f}%'.format(temperature, humidity))
    else:
	print('��������!')
