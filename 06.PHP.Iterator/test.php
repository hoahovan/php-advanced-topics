<?php 

class BasicIterator extends ArrayIterator {

  public function __construct($org_array) {
    // Call the parent constructor with an SplFileObject (also Traversable) for the given path.
    parent::__construct($org_array);
  }
}


class FilterRows extends FilterIterator {
  public function accept() {
    $current = $this->getInnerIterator()->current();
    // var_dump($current);
    if($current == 1) {
      return false;
    }
    return true;
  }

}

$org_array = array(1, 2, 3, 5);

$iterator = new BasicIterator($org_array);
$test     = new FilterRows($iterator);

var_dump($test);