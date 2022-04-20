// A valid json string
var someObject = {
        'voiture': 'megane GT',
        'prix' : 999999999
};

// Will display the objet
console.log(someObject);

// Will display the string '999999999'
console.log(someObject.prix);


// jsonString now contains a JSON string representation of someObject
var jsonString = JSON.stringify(someObject);

// Will display the string '{"someProperty":"someValue"}'
// Will display the string '{"voiture":"megane GT","prix":999999999}'
console.log(jsonString);



//.....................................................................//

   // A valid json string
   var someJsonString = '{"test":"aaaaaaa","truc":"chose"}';

   // jsObject will contain a valid JavaScript object
   var jsonObject = JSON.parse(someJsonString);

   // Will display the string 'chose'
   console.log(jsonObject);



//.....................................................................//

window.onload = function(){

        var request = new XMLHttpRequest();
        var response;
        var key = "ff6543fbeca809f58a29177b23a64184";
        var ville = prompt("Ville : ");
        var container = document.getElementById("container");
        
        request.open('GET', 'https://api.openweathermap.org/data/2.5/weather?q=' + ville + '&lang=fr&units=metric&appid=' + key, false);
        request.send(null);
        
        if(request.status == 200){
                console.log(request);
                response = JSON.parse(request.responseText);
                console.log(response);
        
                var divOutput = document.createElement("div");
                divOutput.setAttribute("id", "responseApi");

                var icon = "<img src=\"http://openweathermap.org/img/w/" + response.weather[0].icon + ".png\" \">";
                var description = "<p>" + response.weather[0].description + "</p>";
                var temp = "<p>Température : " + Math.round(response.main.temp) + " °C</p>";
                
                divOutput.innerHTML = icon + description + temp;

                container.appendChild(divOutput);
        }else{
                var callFailled = document.createElement("div");
                callFailled.setAttribute("id", "api_call_failed");
                callFailled.innerHTML = "API call failed or city doesn't exist";
                container.appendChild(callFailled);
        }
}