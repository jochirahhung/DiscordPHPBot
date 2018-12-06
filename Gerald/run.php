<?php

include __DIR__.'/vendor/autoload.php';

$discord = new \Discord\Discord([
    'token' => 'NTIwMTE2MjY2ODAzOTIwODk4.DurjCw.4APtQ6eDYAXuJz-pKxyLAsDp_hI',
]);

$discord->on('ready', function ($discord) {
    echo "Bot is ready.", PHP_EOL;
  
    $discord->on('message', function ($message) {
        echo "Recieved a message from {$message->author->username}: {$message->content}", PHP_EOL;
    });
});

$discord->run();