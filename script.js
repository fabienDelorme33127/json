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