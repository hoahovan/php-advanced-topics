<?php 
/**
 * Topic: Closure concept
 *
 *
 */

// $func = function() {
//   echo "Closure called";
// };

// echo $func();

$var  = 'closure';
function func($var) {
  echo "{$var} called";
  $var .= 'test';
};
func($var);
echo $var;