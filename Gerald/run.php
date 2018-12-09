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

$discord->registerCommand('rolld20', function ($message) {
   $randNum = rand(1, 20);
   $messages = array(
        "WOW! Critical fail! Better luck next time!",
        "Sadly your attack had no affect on the enemy... atleast you didn't critical fail.. ;)",
        "Not bad! You hit your target. Could still be better though.,",
        "The best of the best, your target has been decimated!"
     );
     $result = "You rolled ".$randNum.". ";

     if($randNum == 1) {
        $result.= $messages[0];
     }
     else if($randNum == 20) {
        $result.= $messages[3];
     }
     else if($randNum <= 10) {
        $result.= $messages[1];
     }
     else if($randNum >= 11) {
        $result.= $messages[2];
     }
     $message->channel->sendMessage($result);
});

$discord->run();