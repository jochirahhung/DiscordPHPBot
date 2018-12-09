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
    $meme ="https://cdn.discordapp.com/attachments/500826878114791425/517835556097490996/Entire_Shrek_Movie.mp4";
    $message->channel->sendMessage($meme." Hope you enjoy Shrek!");
});

$discord->registerCommand('vid', function ($message) {
    $meme;
    $randNum = rand(1, 10);
    if($randNum == 1){
        $meme = "https://www.youtube.com/watch?v=pr3oxPnbVCE";
        $message->channel->sendMessage($meme." Hope you enjoy!");
    } else if($randNum == 2){
        $meme = "https://www.youtube.com/watch?v=s5BSAIUSUc4";
        $message->channel->sendMessage($meme." Hope you enjoy!");
    } else if($randNum == 3){
        $meme = "https://www.youtube.com/watch?v=2Bjy5YQ5xPc";
        $message->channel->sendMessage($meme." Hope you enjoy!");
    } else if($randNum == 4){
        $meme = "https://www.youtube.com/watch?v=48A7K3qN0Yk";
        $message->channel->sendMessage($meme." Hope you enjoy!");
    } else if($randNum == 5){
        $meme = "https://www.youtube.com/watch?v=5Qrww7L2nIg";
        $message->channel->sendMessage($meme." Hope you enjoy!");
    } else if($randNum == 6){
        $meme = "https://www.youtube.com/watch?v=v6yg4ImnYwA";
        $message->channel->sendMessage($meme." Hope you enjoy!");
    } else if($randNum == 7){
        $meme = "https://www.youtube.com/watch?v=hqThVULc5Z8";
        $message->channel->sendMessage($meme." Hope you enjoy!");
    } else if($randNum == 8){
        $meme = "https://www.youtube.com/watch?v=Yj5ec0pS1XI";
        $message->channel->sendMessage($meme." Hope you enjoy!");
    } else if($randNum == 9){
        $meme = "https://www.youtube.com/watch?v=jSjaKrYQuDI&t";
        $message->channel->sendMessage($meme." Hope you enjoy!");
    } else if($randNum == 10){
        $meme = "https://www.youtube.com/watch?v=pxuBwfNp2wk";
        $message->channel->sendMessage($meme." Hope you enjoy!");
    }
});

$discord->registerCommand('meme', function ($message) {
    $meme;
    $randNum = rand(1, 10);
    if($randNum == 1){
        $meme = "https://scontent-sea1-1.xx.fbcdn.net/v/t1.0-9/47352276_2445615552155997_6559633208206426112_n.jpg?_nc_cat=1&_nc_ht=scontent-sea1-1.xx&oh=65c1ebe0f14cf36bc606603cd57815ab&oe=5C9C488F";
        $message->channel->sendMessage($meme);
    } else if($randNum == 2){
        $meme = "https://scontent-sea1-1.xx.fbcdn.net/v/t1.0-9/47316964_914916595345390_388133939681689600_n.png?_nc_cat=101&_nc_ht=scontent-sea1-1.xx&oh=214ea7f4e632b6a340ba204bebfcecf5&oe=5CAA26FF";
        $message->channel->sendMessage($meme);
    } else if($randNum == 3){
        $meme = "https://scontent-mia3-1.cdninstagram.com/vp/47364118ad96756e1c773e3ee5aaa139/5CA2FB50/t51.2885-15/e35/46274987_509669052879346_5589707842886192866_n.jpg";
        $message->channel->sendMessage($meme);
    } else if($randNum == 4){
        $meme = "https://cdn.discordapp.com/attachments/393001957788483585/518119985466572801/image0.png";
        $message->channel->sendMessage($meme);
    } else if($randNum == 5){
        $meme = "https://cdn.discordapp.com/attachments/393001957788483585/517946805129052190/tumblr_p0ii4kzp6H1uijxjpo1_1280.png";
        $message->channel->sendMessage($meme);
    } else if($randNum == 6){
        $meme = "https://cdn.discordapp.com/attachments/393001957788483585/517798118201229322/tumblr_pbvsnjH9lT1teo09yo1_540.png";
        $message->channel->sendMessage($meme);
    } else if($randNum == 7){
        $meme = "https://cdn.discordapp.com/attachments/393001957788483585/517212204228018196/image0.jpg";
        $message->channel->sendMessage($meme);
    } else if($randNum == 8){
        $meme = "https://scontent-mia3-1.cdninstagram.com/vp/26166d3412229780b17b36f399765c3c/5C8DD70E/t51.2885-15/e35/45865756_502174433610864_4829772472397102654_n.jpg";
        $message->channel->sendMessage($meme);
    } else if($randNum == 9){
        $meme = "https://cdn.discordapp.com/attachments/393001957788483585/515402262848471050/image0.jpg";
        $message->channel->sendMessage($meme);
    } else if($randNum == 10){
        $meme = "https://cdn.discordapp.com/attachments/393001957788483585/514509150718525441/tumblr_pgop1zqvkO1vl2ru4o1_540.png";
        $message->channel->sendMessage($meme);
    }
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