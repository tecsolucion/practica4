#include <Arduino.h>



  #include <ESP8266WiFi.h>
  #include <ESP8266HTTPClient.h>
  #include <WiFiClient.h>

#include <Adafruit_Sensor.h>
#include "DHT.h"


#define DHTTYPE DHT11   // DHT 22  (AM2302), AM2321


const char* ssid = "INFINITUMAEA0_2.4";  // Enter SSID here  INFINITUM2165_2.4  
const char* password = "zVfe294Z3s";  //Enter Password here    KqkFQ5arAH

const char* serverName = "http://esp8266.maquinastec.com/insertar_datos.php";


String apiKeyValue = "qwerty12345";
String dispositivo ="NodeMCUesp8266-1";
String ubicacion ="CASA";



// DHT Sensor
uint8_t DHTPin = 4; //D2
               
// Initialize DHT sensor.
DHT dht(DHTPin, DHTTYPE);                

float Temperature;
float Humidity;




void setup() {
 
  pinMode(DHTPin, INPUT);

  dht.begin();        

  Serial.begin(115200);
  
  WiFi.begin(ssid, password);
  Serial.println("Connecting");
  while(WiFi.status() != WL_CONNECTED) { 
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("Connected to WiFi network with IP Address: ");
  Serial.println(WiFi.localIP());

 



}

void loop() {
  // put your main code here, to run repeatedly:




    //Check WiFi connection status
  if(WiFi.status()== WL_CONNECTED){


    Temperature = dht.readTemperature(); // Gets the values of the temperature
    Humidity = dht.readHumidity(); // Gets the values of the humidity 
    


    HTTPClient http;
    
    // Your Domain name with URL path or IP address with path
    http.begin(serverName);  
    

    String httpRequestData = "api_key=" + apiKeyValue + "&dispositivo=" + dispositivo
                          + "&ubicacion=" + ubicacion + "&humedad=" + String(Humidity)
                          + "&temperatura=" + String(Temperature)+ "";
    Serial.print("httpRequestData: ");
    Serial.println(httpRequestData);

    // Specify content-type header
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");

    http.addHeader("Content-Length", (String)httpRequestData.length());



    int httpResponseCode = http.POST(httpRequestData);


     http.writeToStream(&Serial);
  

        
    if (httpResponseCode>0) {
      Serial.print("HTTP Response code: ");
      Serial.println(http.getString());
  

      Serial.println(httpResponseCode);
      Serial.println(Temperature);
      Serial.println(Humidity);
    }
    else {
      Serial.println(http.getString());
  
      Serial.print("Error code: ");
      Serial.println(httpResponseCode);
    }
    // Free resources
    http.end();
  }
  else {
    Serial.println("WiFi Disconnected");
  }
  //Send an HTTP POST request every 30 seconds
  delay(30000);  

}