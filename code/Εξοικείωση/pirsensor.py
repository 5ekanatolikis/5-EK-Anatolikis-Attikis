#�������� ������������ �����������
from gpiozero import MotionSensor
from signal import pause
import time

#��������� ��� ���� ���� ����� ��������� �� PIR
pir=MotionSensor(14)
#��� �� �������������� ��� ���������� ��������� #�������������� �� while True
while True:
#���� ��� ��������� �� ����� ����� ��� 4 ������������
    time.sleep(4)
#������� ��� ������� ������
    if pir.motion_detected:
#������ �������
	print ('������� ������')
    else:
#������ ��� �������
	print ('��� ������� ������')
