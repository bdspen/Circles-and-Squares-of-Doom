var express = require("express");
var mysql = require("mysql");
var app = express();
/*
* Configure MySQL parameters.
*/
var connection = mysql.createConnection({
host : "localhost",
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

app.listen(3306,function(){
console.log("It's Started on PORT 3306");
});

app.get('/',function(req,res){
res.sendFile(__dirname + '/index.html');
});
