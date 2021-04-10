var myObj, x;
myObj = {"name":"John", "age":30, "car":null};
x = myObj.name;
document.getElementById("demo").innerHTML = x;



myObj = {"name":"John", "age":30, "car":null};
x = myObj["name"];
document.getElementById("demo1").innerHTML = x;


var myObj, x;
myObj = {"name":"John", "age":30, "car":null};
for (x in myObj) {
  document.getElementById("demo2").innerHTML += x + "<br>";
}


var myObj, x;
myObj = {"name":"John", "age":30, "car":null};
for (x in myObj) {
  document.getElementById("demo3").innerHTML += myObj[x] + "<br>";
}

var myObj = {
    "name":"John",
    "age":30,
    "cars": {
    "car1":"Ford",
    "car2":"BMW",
    "car3":"Fiat"
    }
  }

  myObj.cars["car1"] = "Mercedes";

    delete myObj.cars.car2;
  document.getElementById("demo4").innerHTML += myObj.cars.car2 + "<br>";
  //or:
  document.getElementById("demo4").innerHTML += myObj.cars["car1"];