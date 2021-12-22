#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h>
#include <Ultrasonic.h>

Ultrasonic ultrasonic(5, 4);


const char* ssid = "ceksensor";
const char* host = "192.168.92.108";
const char* password = "87654321";

void setup() {
  Serial.begin(9600);
  
  WiFi.hostname("NodeMCU");
  WiFi.begin(ssid, password);


  while(WiFi.status() != WL_CONNECTED)
  {

    Serial.print("....");
    delay(500);
  }

    Serial.println("WiFi Connected");
}

void loop() {
  int sensor = ultrasonic.read();
  Serial.println(sensor);


  WiFiClient client;
  if(!client.connect(host, 80))
  {
    Serial.println("Connection Failed");
    return ;
  }


  String Link;
  HTTPClient http;
  Link = "http://192.168.92.108/sensoruas/kirimdata.php?sensor=" + String(sensor);

  http.begin(client, Link);

  http.GET();
  http.end();
  delay(1000);
}
