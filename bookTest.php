<?php

class bookTest extends PHPUnit_Framework_TestCase{
  public function testEquality() {
    $this->assertEquals(
      [1, 2, 3, 4, 5, 6],
      [1, 2, 3, 4, 5, 6]
    );
  }
}
?>
