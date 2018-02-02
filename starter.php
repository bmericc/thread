<?php

include 'class.thread.php';

$thread = new Thread("localhost",80);

$thread->setFunc("katar", array("Bahri"));
$thread->start();

echo $thread->getreturn();

$thread->setFunc("katar", array("Meriç"));
$thread->start();

echo $thread->getreturn();

$thread->setFunc("katar", array("Canlı"));
$thread->start();

echo $thread->getreturn();

?>
