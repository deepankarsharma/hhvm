<?php

class a {
  public static function x() {
    echo 'x';
  }
}
class b extends a{
  public static function z() {
    self::x();
  }
}

<<__EntryPoint>>
function main_1466() {
if (0) {
  include '1466-1.inc';
}
b::x();
}
