<?php
  $data = json_decode(file_get_contents("php://input"));
  $user_name = mysql_real_escape_string($data->user_name);
  $pass = mysql_real_escape_string($data->pass);
  mysql_connect("localhost", "root", "root") or die(mysql_error());
  mysql_select_db("connect") or die(mysql_error());
  mysql_query("INSERT INTO user_name (user_name, password) VALUES ('$user_name', '$pass')");
  Print "Your information has been successfully added to the database.";
?>
