void setup() {
  // put your setup code here, to run once:
  Serial.begin(57600);
  //pinMode(13,OUTPUT);
}

void loop() {
  // put your main code here, to run repeatedly:
  int val = analogRead(0);
  Serial.println(val);
  delay(500);
}

