<?php
require_once 'Registry.php';

// Registering objects
 Registry::set("name", "Shofique");
 // Registering objects
 Registry::set("profession", "Software engineering");
  // Retrieving and using registered objects
 echo "Name: ". Registry::get("name");
  // Retrieving and using registered objects
 echo "\nProfession: ".Registry::get("profession");
 try{
    // Registering objects
   Registry::set("config",['db_host' => 'localhost', 'db_name' => 'test']);
   Registry::set("logger", new class{
    public function log(string $message){
        echo "Log: $message\n";
    }
   });

 }catch(Exception $e){
    echo "\nError: " . $e->getMessage() . "\n";
 }
  // Retrieving and using registered objects
  $config = Registry::get('config');
  echo "\ndatabase Host: " . $config['db_host'] . "\n";
  echo "\ndatabase name: " . $config['db_name'] . "\n";
  $logger = Registry::get('logger');
  $logger->log("This is a log message.")
?>