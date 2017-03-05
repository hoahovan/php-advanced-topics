<?php
/**
 * Finbonacci
 *
 * 
 */

function fibonacci($position = 5) {
  $last = 0; $current = 1;
  yield 1;
  $i = 0;
  while($i < $position) {
    $current = $last + $current;
    $last = $current - $last;
    yield $current;
    $i++;
  }
  return;
}

// foreach (fibonacci(7) as $key => $number) {
//   echo $key . ' => ' . $number . "\n";
// }

function &count_down($value) {
  while($value > 0) {
    yield $value;
  }
  return;
}

foreach (count_down(3) as &$val) {
  echo "{$val}\n";
  $val--;
}