<?php
include 'LinkList.php';
$linkedList = new LinkList();
$linkedList->insertFirst(11);
$linkedList->insertFirst(82);
$linkedList->insertFirst(88);
$linkedList->insertLast(3);
$linkedList->insertLast(44);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNodes . '<br>';
echo implode ('-' , $linkData);