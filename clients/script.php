<?php

require_once('./DB.php');
require_once('./DB_functions.php');

$data = json_decode(file_get_contents('clients.json'), true);

DB::statement('TRUNCATE TABLE `clients`');
DB::statement('TRUNCATE TABLE `pets`');





$query = 'INSERT INTO `clients` (`first_name`, `last_name`) VALUES (?)';
echo "updating ". $query . "\n";
foreach ($countries as $key => $country) {
insert ($query, [$country->country]);
}