<?php

class WebTest extends PHPUnit_Framework_TestCase  {

  public function setUp(){ }
  public function tearDown(){ }

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


  public function test_url_extend($url) {
    $data = file_get_contents("index.htm");

    /*
    $this->assertEquals(true, $result['result']);

    //https://www.w3.org/Protocols/HTTP/HTRESP.html
    //OK 200, The request was fulfilled.
    $this->assertEquals(200, $result['code']);

    */
  }



  public function testConnectionIsValid()
  {
    // test to ensure that the object from an fsockopen is valid
    $connObj = new RemoteConnect();
    $serverName = 'www.google.com';
    $this->assertTrue($connObj->connectToServer($serverName) !== false);
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
