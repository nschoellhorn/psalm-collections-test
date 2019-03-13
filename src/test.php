<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

/** @psalm-var \Doctrine\Common\Collections\ArrayCollection<string> $collection */
$collection = new \Doctrine\Common\Collections\ArrayCollection();
$collection->add('test');
$collection->add(new stdClass());

/** @var int $returnVal */
$returnVal = 5;

/** @var TestClass<string> */
$testClass = new TestClass('test');
$returnVal = $testClass->getVal();

$testClass->setVal($returnVal);
