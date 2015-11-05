var express = require("express");
var mysql = require("mysql");
var app = express();
var path = require('path');
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

app.use('/public', express.static(__dirname + '/public'));

app.get('/',function(req,res){
res.sendFile(path.join(__dirname + '/public/index.html'));
});

/*Start the Server*/
app.listen(3306,function(){
console.log("It's Started on PORT 3306");
});
