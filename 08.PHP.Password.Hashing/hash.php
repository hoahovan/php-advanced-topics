<?php 
/**
 * Password hash example
 *
 *
 */

$password = password_hash('testing', PASSWORD_DEFAULT);
echo "{$password}\n";

var_dump(password_verify('testing', $password));

// if (password_needs_rehash($password, PASSWORD_DEFAULT, ['cost' => 12])) {
//   $newHash = password_hash('testing', PASSWORD_DEFAULT, ['cost' => 12]);
//   echo "{$newHash}\n";
// }

// $password = password_hash('testing', PASSWORD_DEFAULT, ['cost' => 12]);
// echo "{$password}\n";

var_dump(password_verify('testing', $password));
