<?php

$array = [
  [
    'value' => 'foo',
    'show' => true
  ],
  [
    'value' => 'bar',
    'show' => false
  ],
  [
    'value' => 'foobar',
    'show' => true
  ],
  [
    'value' => 'baz',
    'show' => true
  ],
  [
    'value' => 'apple',
    'show' => false
  ],
  [
    'value' => 'pen',
    'show' => false
  ],
  [
    'value' => 'applepen',
    'show' => true
  ],
];

/**
 * loop through this array of arrays and show in screen each value, but only if the the value of 'show' is set to true 
 */