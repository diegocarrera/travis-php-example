<?php

class URL
{
  public function sluggify($string, $separator = '-', $maxLength = 96)
  {
    $title = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
    $title = preg_replace("%[^-/+|\w ]%", '', $title);
    $title = strtolower(trim(substr($title, 0, $maxLength), '-'));
    $title = preg_replace("/[\/_|+ -]+/", $separator, $title);

    return $title;
  }


  public function openWeb($url){
    $page = file_get_contents($url);
    echo $page;
    return $page;

  }



}

?>
