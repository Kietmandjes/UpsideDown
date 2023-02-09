#define RED_LED 6
#define GREEN_LED 5
#define BLUE_LED 9
int vib_pin=2;


void setup() {
  pinMode(vib_pin, INPUT);
  pinMode(RED_LED, OUTPUT);
  pinMode(GREEN_LED, OUTPUT);
  pinMode(BLUE_LED, OUTPUT);
}

void loop() {
  int val;  
  val = digitalRead(vib_pin);
  if (val == 1) {
    delay(100);
    analogWrite(RED_LED, 255);
    analogWrite(GREEN_LED, 100);
    analogWrite(BLUE_LED, 0);
    delay(100);
    analogWrite(RED_LED, 0);
    analogWrite(GREEN_LED, 0);
    analogWrite(BLUE_LED, 0);
    delay(100);
    analogWrite(RED_LED, 255);
    analogWrite(GREEN_LED, 255);
    analogWrite(BLUE_LED, 255);
    delay(50);
    analogWrite(RED_LED, 0);
    analogWrite(GREEN_LED, 0);
    analogWrite(BLUE_LED, 0);
    delay(200);
    analogWrite(RED_LED, 255);
    analogWrite(GREEN_LED, 100);
    analogWrite(BLUE_LED, 0);
    delay(50);
    analogWrite(RED_LED, 0);
    analogWrite(GREEN_LED, 0);
    analogWrite(BLUE_LED, 0);
    delay(100);
    analogWrite(RED_LED, 255);
    analogWrite(GREEN_LED, 255);
    analogWrite(BLUE_LED, 255);
    delay(1000);
    analogWrite(RED_LED, 0);
    analogWrite(GREEN_LED, 0);
    analogWrite(BLUE_LED, 0);
    delay(50);
    analogWrite(RED_LED, 255);
    analogWrite(GREEN_LED, 100);
    analogWrite(BLUE_LED, 0);
    delay(100);
    analogWrite(RED_LED, 0);
    analogWrite(GREEN_LED, 0);
    analogWrite(BLUE_LED, 0);
    delay(100);
    analogWrite(RED_LED, 255);
    analogWrite(GREEN_LED, 100);
    analogWrite(BLUE_LED, 0);
    delay(100);
    analogWrite(RED_LED, 0);
    analogWrite(GREEN_LED, 0);
    analogWrite(BLUE_LED, 0);
    delay(500);
    analogWrite(RED_LED, 255);
    analogWrite(GREEN_LED, 255);
    analogWrite(BLUE_LED, 255);
    delay(2000);
    analogWrite(RED_LED, 0);
    analogWrite(GREEN_LED, 0);
    analogWrite(BLUE_LED, 0);
    delay(1000);
  } else
    analogWrite(RED_LED,255);
    analogWrite(GREEN_LED, 255);
    analogWrite(BLUE_LED,255);
}

