<?php


<<__EntryPoint>>
function main_fb_null_byte() {
$file = '/etc/passwd'.chr(0).'asdf';

var_dump(fb_lazy_lstat($file));
var_dump(fb_lazy_realpath($file));
}
