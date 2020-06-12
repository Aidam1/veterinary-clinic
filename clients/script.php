<?php

require_once('./DB.php');
require_once('./DB_functions.php');

$success = connect('localhost', 'veterinary-clinic', 'root', 'rootroot');

DB::statement('TRUNCATE TABLE `clients`');
DB::statement('TRUNCATE TABLE `pets`');

$data = json_decode(file_get_contents('clients.json'), true);


//CLIENTS
$query = 'INSERT INTO `clients` (`first_name`, `last_name`) VALUES (?,?)';
$query2 = 'INSERT INTO `pets` (`name`, `breed`, `weight`, `age`, `image`, `client_id`) VALUES (?,?,?,?,?,?)';

foreach ($data as $key=>$client) {
    $first_name = $client['first_name'];
    $last_name = $client['surname'];
    insert($query, [$first_name, $last_name]);
    foreach($client['pets'] as $pet){
        $name = $pet['name'];
        $breed = $pet['breed'];
        $weight = $pet['weight'];
        $age = $pet['age'];
        $image = $pet['photo'];
        $client_id = $key+1;
        insert($query2, [$name, $breed, $weight, $age, $image,$client_id]);

    }
}
echo "FINISHED CLIENTS \n";
