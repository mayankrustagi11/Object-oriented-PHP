<?php
class Hash {

  public static function make($string, $salt = '') {
    //echo $string,'<br>',utf8_encode($salt),'<br>';
    return hash('sha256', $string . $salt);
  }

  public static function salt($length) {
    return md5(random_bytes($length));
  }

  public static function unique() {
    return self::make(uniqid());
  }

}
