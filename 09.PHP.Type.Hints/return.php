<?php 
/**
 * Return declare
 *
 *
 */

class Table {
  public function save($data) {
    return true;
  }
}

class Mysql extends Table {
  public function save($data):bool {
    return true;
  }
}

echo (new Mysql([]))->save(true);