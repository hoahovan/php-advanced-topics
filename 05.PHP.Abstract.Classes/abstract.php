<?php
/**
 * Topic: Example for abstract
 *
 * @return void
 */

abstract class Database {
  abstract public function connection();
  public function disconnect() {
    // Disconnect from the database server
  }

}

class Mysql extends Database {
  public function connection() {

  }

  public function test() {
    echo "test method";
  }

}

// $db    = new Database();
$mysql = (new Mysql())->test();