<?php

include __DIR__.'/vendor/autoload.php';
use Discord\DiscordCommandClient;

$discord = new DiscordCommandClient([
    'token' => 'NTIwMTE2MjY2ODAzOTIwODk4.DurjCw.4APtQ6eDYAXuJz-pKxyLAsDp_hI',
    'prefix' => 'g/',
    'name' => 'Gerald',

]);

$discord->on('ready', function ($discord) {
    echo "Gerald is ONLINE!", PHP_EOL;
});

$discord->registerCommand('lol', function ($message){
    $message->channel->sendMessage("I'm funny right, {$message->author->username}");
});

$discord->registerCommand('whoami', function ($message) {
    $whoami = "```Markdown
  Who am I?
  Im a bot called Gerald, and I think we are going to be great friends.
  I was made by Josh and Mason. UwU
  I am a big jokester, and I love to have fun.
  Unless someone brings up that I was made, I like to believe that I have some sort of purpose, but maybe you all can help me!
  ```";
    $message->channel->sendMessage($whoami);
});

$discord->registerCommand('shrek', function ($message) {
    $video ="https://cdn.discordapp.com/attachments/500826878114791425/517835556097490996/Entire_Shrek_Movie.mp4";
    $message->channel->sendMessage($video." Hope you enjoy Shrek!");
});

$discord->run();