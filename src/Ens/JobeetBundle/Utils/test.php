<?php

include_once('Jobeet.php');

if (count($argv) < 2) {
  echo 'ta chatte';
  echo "" . "\n";
  exit;
}

$method = trim($argv[1]);
array_shift($argv);
array_shift($argv);

$functionName = 'Ens\JobeetBundle\Utils\Jobeet::' . $method;

echo "Appel de la fonction : " . $functionName . "\n";
echo "Arguments : ";
var_dump($argv);
echo "";

$retour = call_user_func_array($functionName,$argv );

echo "Résultat : ";
echo "" . "\n";

var_dump($retour);

