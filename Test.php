<?php
class Test extends PHPUnit_Framework_TestCase
{
    
  public function testOnePlusOne() {
    $this->assertEquals(1+1,2);
  }
  
  
  public function testTitle()
    {
        $this->open("/index.htm");
        $title = $this->getTitle();
        $this->assertEquals('Home', $title);
    }  
  
  
  
}
?>

