<?php
$dll = new SplDoublyLinkedList();
$dll->rewind();
$dll->prev();
var_dump($dll->current());
echo "===DONE===\n";
