<?php

public MongoDB::__construct ( MongoClient $conn , string $name ){

}

try {
	$m = new MongoClient(); // connect
	$db = $m->selectDB("../NYPD_Motor_Vehicle_Colissions.csv");
}
catch ( MongoConnectionException $e ) {
	 echo '<p>Couldn\'t connect to mongodb, is the "mongo" process running?</p>';
    exit();
}

public MongoCollection MongoDB::createCollection ( string $name [, array $options ] ) {
	$collection = $db->command(array(
    "create" => $name,
    "capped" => $options["capped"],
    "size" => $options["size"],
    "max" => $options["max"],
    "autoIndexId" => $options["autoIndexId"],
));

}

