<?php
class RemoteConnect
{
  public function connectToServer($serverName=null)
  {
    if($serverName==null){
      throw new Exception("That's not a server name!");
    }
    $fp = fsockopen($serverName,80);
    return ($fp) ? true : false;
  }

  public function returnSampleObject()
  {
    return $this;
  }

  function page_title($url) {
    $fp = file_get_contents($url);
    if (!$fp)
      return null;

    $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
    if (!$res)
      return null;

    // Clean up title: remove EOL's and excessive whitespace.
    $title = preg_replace('/\s+/', ' ', $title_matches[1]);
    $title = trim($title);
    return $title;
  }


}
?>
