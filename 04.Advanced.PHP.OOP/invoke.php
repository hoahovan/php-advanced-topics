<?php
/**
 * Invoke example
 *
 *
 */
class Compare {
  public function __invoke($a, $b) {
    return $a === $b;
  }
}

$comp = new Compare;
// $comp = new Compare();

var_dump($comp(1, 2));