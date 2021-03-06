<?php

require_once('RemoteConnect.php');
require_once('URL.php');

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


  public function test_url_extend() {
    $data = file_get_contents("index.htm");

    /*
    $this->assertEquals(true, $result['result']);

    //https://www.w3.org/Protocols/HTTP/HTRESP.html
    //OK 200, The request was fulfilled.
    $this->assertEquals(200, $result['code']);

    */
  }



  public function testConnectionIsValid(){
    // test to ensure that the object from an fsockopen is valid
    $connObj = new RemoteConnect();
    $serverName = 'www.google.com';
    $this->assertTrue($connObj->connectToServer($serverName) !== false);
  }

  //https://jtreminio.com/2013/03/unit-testing-tutorial-part-2-assertions-writing-a-useful-test-and-dataprovider/
  public function testSluggifyReturnsSluggifiedString()  {
    $originalString = 'This string will be sluggified';
    $expectedResult = 'this-string-will-be-sluggified';

    $url = new URL();

    $result = $url->sluggify($originalString);

    $this->assertEquals($expectedResult, $result);
  }


  public function testTitle(){
    $connObj = new RemoteConnect();
    $title=$connObj->page_title("index.htm");
    echo "title is:"+$title;
    $this->assertEquals('Home', $title);
  }


}
?>
