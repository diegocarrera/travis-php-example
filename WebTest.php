<?php

class Test extends PHPUnit_Framework_TestCase  {
  private $API = "https://helloacm.com/api/can-visit/";

  public function URLProvider() {
    return [
      ["https://happyukgo.com"],
      ["https://helloacm.com"],
      ["https://codingforspeed.com"],
      ["https://justyy.com"],
      ["https://weibomiaopai.com"],
      ["https://rot47.net"],
      ["https://uploadbeta.com"],
      ["https://isvbscriptdead.com"],
      ["https://zhihua-lai.com"],
      ["https://steakovercooked.com"]
    ];
  }

  /**
   * @dataProvider URLProvider
   */
  public function test_url($url) {
    $data = file_get_contents("$this->API?url=$url");
    $result = json_decode($data, true);
    $this->assertEquals(true, $result['result']);
    $this->assertEquals(200, $result['code']);
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
