<?php

$client = new RabbitMQClient('testRabbitMQ.ini', 'testServer');
if(isset($argv[1])){
	$msg = $argv[1];
}
else{
	$msg = array("message"=>"test message", "type"=>"echo");
}

$response = $client->send_request($msg);

echo "client received response: " . PHP_EOL;
print_r($response);
echo "\n\n";

if(isset($argv[0]))
echo $argv[0] . " END".PHP_EOL;