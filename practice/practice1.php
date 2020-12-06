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
  if ($array[$i]['show'] == false) {
    echo $array[$i]['value'] . "{<br>";
  }
}

//var_dump($array[0]);


//Definir índices de un subarray:
  //$array[0] :: devuelve el array situado en el índice 0
//Acceder a uno de los valores de un subarray:
  //$subarray = $array[0]
  //echo $subarray['value'];

//$subArray = $array[0] $array[1] $array[2] $array[3] $array[4] $array[5] $array[6];

//$subArray = $array[];

//$subArray = array('0','1','2','3','4','5'); //Definición sub array