<?php
require("phpMQTT.php");
$server = "127.0.0.1";     // change if necessary
$port = 1883;                     // change if necessary
$username = "";                   // set your username
$password = "";                   // set your password
$client_id = "phpMQTT-publisher"; // make sure this is unique for connecting to sever - you could use uniqid()
$mqtt = new phpMQTT($server, $port, $client_id);
if ($mqtt->connect(true, NULL, $username, $password)) {
  $mqtt->publish("servermqtt", "Hello World! at " . date("r"), 0);
  $mqtt->close();
} else {
    echo "Time out!\n";
}