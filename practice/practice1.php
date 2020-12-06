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

$keys = array_keys($array);
for($i = 0; $i < count($array); $i++) {
  if ($array[$i]['show'] == true) {
    echo $array[$i]['value'] . "<br>";
  }
}

$keys = array_keys($array);
for($i = 0; $i < count($array); $i++) {
  foreach ($array as $subArray) {
    if ($array[$i]['show'] == true) {
      echo $array[$i]['value'] . "<br>";
    break;
    }
  }
  
}