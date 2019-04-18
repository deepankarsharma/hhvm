<?php

$m = new Memcached();
$m->addServer('localhost', '11211');

function dump_types($v) {
  echo gettype($v) . "\n";
}

$keys = array(100, 'str');
foreach ($keys as $key) {
  dump_types($key);
}

$deleted = $m->deleteMulti($keys);
foreach ($keys as $key) {
  dump_types($key);
}
