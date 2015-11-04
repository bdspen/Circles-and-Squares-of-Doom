var express = require("express");
var mysql = require("mysql");
var app = express();
/*
* Configure MySQL parameters.
*/
var connection = mysql.createConnection({
host : "localhost:8889",
user : "root",
password : "root",
database : "connect"
});

/*Connecting to Database*/

connection.connect(function(error){
if(error)
{
console.log("Problem with MySQL"+error);
}
else
{
console.log("Connected with Database");
}
});

/*Start the Server*/

app.listen(8080,function(){
console.log("It's Started on PORT 8080");
});
