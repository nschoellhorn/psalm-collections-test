<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

// Add the @var annotation to tell Psalm which type you want to enforce.
/** @var \Doctrine\Common\Collections\ArrayCollection<string> $collection */
$collection = new \Doctrine\Common\Collections\ArrayCollection();
// Add a value of the correct type, no issues.
$collection->add('test');
// Try to add a value of a different type and Psalm will complain and throw an error! Profit?!
$collection->add(new stdClass());
