<?php
//require_once 'PHPUnit/Autoload.php';
//require_once('PHPUnit/Framework/TestCase.php');

class Test extends PHPUnit_Framework_TestCase{

  public function testOnePlusOne() {
    $this->assertEquals(1+1,2);
 }

  /**
  * @expectedException PHPUnit_Framework_Error
  */

  public function testFailingInclude()
    {
        include 'not_existing_file.php';
    }


/*
  public function testTitle()
    {
        $this->open("/index.htm");
        $title = $this->getTitle();
        $this->assertEquals('Home', $title);
    }
*/

}
?>
