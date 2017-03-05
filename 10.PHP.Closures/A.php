<?php 
/**
 * My example
 *
 *
 */
class A {
  protected $name = 'A';
  public static $lastName = 'ATest';

  public function getName() {
    // return $this->name;
    // return self::$lastName;
    return static::$lastName;
  }
}

class B extends A {
  protected $name = 'B';
  public static $lastName = 'BTest';
}

echo (new B())->getName();