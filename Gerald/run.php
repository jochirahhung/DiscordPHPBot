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
    $shrek ="https://cdn.discordapp.com/attachments/500826878114791425/517835556097490996/Entire_Shrek_Movie.mp4";
    $message->channel->sendMessage($shrek." Hope you enjoy Shrek!");
});

$discord->registerCommand('vid', function ($message) {
    $vid;
    $randNum = rand(1, 10);
    if($randNum == 1){
        $vid = "https://www.youtube.com/watch?v=pr3oxPnbVCE";
        $message->channel->sendMessage($vid." Hope you enjoy!");
    } else if($randNum == 2){
        $vid = "https://www.youtube.com/watch?v=s5BSAIUSUc4";
        $message->channel->sendMessage($vid." Hope you enjoy!");
    } else if($randNum == 3){
        $vid = "https://www.youtube.com/watch?v=2Bjy5YQ5xPc";
        $message->channel->sendMessage($vid." Hope you enjoy!");
    } else if($randNum == 4){
        $vid = "https://www.youtube.com/watch?v=48A7K3qN0Yk";
        $message->channel->sendMessage($vid." Hope you enjoy!");
    } else if($randNum == 5){
        $vid = "https://www.youtube.com/watch?v=5Qrww7L2nIg";
        $message->channel->sendMessage($vid." Hope you enjoy!");
    } else if($randNum == 6){
        $vid = "https://www.youtube.com/watch?v=v6yg4ImnYwA";
        $message->channel->sendMessage($vid." Hope you enjoy!");
    } else if($randNum == 7){
        $vid = "https://www.youtube.com/watch?v=hqThVULc5Z8";
        $message->channel->sendMessage($vid." Hope you enjoy!");
    } else if($randNum == 8){
        $vid = "https://www.youtube.com/watch?v=Yj5ec0pS1XI";
        $message->channel->sendMessage($vid." Hope you enjoy!");
    } else if($randNum == 9){
        $vid = "https://www.youtube.com/watch?v=jSjaKrYQuDI&t";
        $message->channel->sendMessage($vid." Hope you enjoy!");
    } else if($randNum == 10){
        $vid = "https://www.youtube.com/watch?v=pxuBwfNp2wk";
        $message->channel->sendMessage($vid." Hope you enjoy!");
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

$discord->registerCommand('pun', function ($message) {
    $pun;
    $randNum = rand(1, 50);
    if($randNum == 1){
        $pun = "How do you throw a space party? You planet.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 2){
        $pun = "How was Rome split in two? With a pair of Ceasars.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 3){
        $pun = "The shovel was a ground breaking invention, but everyone was blow away by the leaf blower.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 4){
        $pun = "A scarecrow says, 'This job isn't for everyone, but hay, it's in my jeans.'";
        $message->channel->sendMessage($pun);
    } else if($randNum == 5){
        $pun = "Why are blacks not in Nascar, because they can't fit the gun under the seat";
        $message->channel->sendMessage($pun);
    } else if($randNum == 6){
        $pun = "Did you hear about the guy who lost the left side of his body? He's alright now.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 7){
        $pun = "What do you call a girl with one leg that's shorter than the other? Ilene.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 8){
        $pun = "I did a theatrical performance on puns. It was a play on words.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 9){
        $pun = "A cross eyed teacher couldn’t control his pupils.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 10){
        $pun = "What does a clock do when it's hungry? It goes back for seconds.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 11){
        $pun = "What do you do with a dead chemist? You barium.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 12){
        $pun = "What do you call a cow with no legs? Ground beef.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 13){
        $pun = "What do you call a cow with two legs? Lean beef.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 14){
        $pun = "What happens to nitrogen when the sun comes up? It becomes daytrogen.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 15){
        $pun = "What’s america’s favorite soda? Mini soda.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 16){
        $pun = "What kind of car does a sheep drive? A lamborghini, but if that breaks down they drive their SuBAHHru.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 17){
        $pun = "Why didn’t the lion win the race? Because he was racing a cheetah.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 18){
        $pun = "Why did the man dig a hole in his neighbor’s backyard and fill it with water? Because he meant well.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 19){
        $pun = "I couldn’t remember how to throw a boomerang but it came back to me.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 20){
        $pun = "What do you call a beautiful pumpkin? GOURDgeous.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 21){
        $pun = "I bet the person who created the door knocker won a Nobel prize.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 22){
        $pun = "Do you know sign language? You should learn it, it’s pretty handy.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 23){
        $pun = "What do you call a cow with all of its legs? High steaks.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 24){
        $pun = "Why should you never trust a train? They have loco motives.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 25){
        $pun = "What do you call a line of rabbits marching backwards? A receding hairline.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 26){
        $pun = "What’s it called when you have too many aliens? Extraterrestrials.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 27){
        $pun = "What do you call a bear with no teeth? A gummy bear.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 28){
        $pun = "Why shouldn’t you trust atoms? They make up everything.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 29){
        $pun = "What do you call a fake noodle? An impasta.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 30){
        $pun = "What did the buffalo say to his son? Bison.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 31){
        $pun = "What should you do if you’re cold? Stand in the corner. It’s 90 degrees.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 32){
        $pun = "I couldn’t remember how to throw a boomerang but it came back to me.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 33){
        $pun = "After the accident, the juggler didn’t have the balls to do it.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 34){
        $pun = "What happens when you eat too many spaghettiOs? You have a vowel movement.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 35){
        $pun = "The energizer bunny went to jail. He was charged with battery.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 36){
        $pun = "What’s the difference between a bench, a fish, and a bucket of glue? You can’t tune a bench but you can tuna fish. I bet you got stuck on the bucket of glue part.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 37){
        $pun = "Want to hear a pizza joke? Nevermind, it’s too cheesy.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 38){
        $pun = "I used to be afraid of hurdles, but I got over it.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 39){
        $pun = "A cabbage and celery walk into a bar and the cabbage gets served first because he was a head.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 40){
        $pun = "How do trees access the internet? They log on.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 41){
        $pun = "How does Moses make coffee? Hebrews it.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 42){
        $pun = "Towels can’t tell jokes. They have a dry sense of humor.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 43){
        $pun = "Why did one banana spy on the other? Because she was appealing.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 44){
        $pun = "Did you hear about the cheese factory that exploded in france? There was nothing but des brie.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 45){
        $pun = "I read a book on anti-gravity. I couldn’t put it down.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 46){
        $pun = "To write with a broken pencil is pointless.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 47){
        $pun = "Why can’t you take inventory in Afghanistan? Because of the tally ban.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 48){
        $pun = "No I really hate puns";
        $message->channel->sendMessage($pun);
    } else if($randNum == 49){
        $pun = "Yesterday I accidentally swallowed some food coloring. The doctor says I'm OK, but I feel like I've dyed a little inside.";
        $message->channel->sendMessage($pun);
    } else if($randNum == 50){
        $pun = "A friend of mine tried to annoy me with bird puns, but I soon realized that toucan play at that game.";
        $message->channel->sendMessage($pun);
    }
});

$discord->registerCommand('lenny', function ($message) {
    $lenny;
    $randNum = rand(1, 20);
    if($randNum == 1){
        $lenny = "┬┴┬┴┤ ͜ʖ ͡°) ├┬┴┬┴";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 2){
        $lenny = "( ͡° ͜ʖ ͡°)";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 3){
        $lenny = "̿̿ ̿̿ ̿̿ ̿'̿'\̵͇̿̿\з= ( ▀ ͜͞ʖ▀) =ε/̵͇̿̿/’̿’̿ ̿ ̿̿ ̿̿ ̿̿";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 4){
        $lenny = "(ノಠ益ಠ)ノ彡┻━┻";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 5){
        $lenny = "[̲̅$̲̅(̲̅ ͡° ͜ʖ ͡°̲̅)̲̅$̲̅]";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 6){
        $lenny = "(ﾉ◕ヮ◕)ﾉ*:･ﾟ✧";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 7){
        $lenny = "(◕‿◕✿)";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 8){
        $lenny = "(╯°□°)╯︵ ʞooqǝɔɐɟ";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 9){
        $lenny = "(╯°□°）╯︵ ┻━┻";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 10){
        $lenny = "┻━┻ ︵ヽ(`Д´)ﾉ︵ ┻━┻";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 11){
        $lenny = "(•_•) ( •_•)>⌐■-■ (⌐■_■)";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 12){
        $lenny = "(☞ຈل͜ຈ)☞";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 13){
        $lenny = "╚(ಠ_ಠ)=┐";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 14){
        $lenny = "ლ,ᔑ•ﺪ͟͠•ᔐ.ლ";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 15){
        $lenny = "┬─┬ノ( º _ ºノ)";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 16){
        $lenny = "﴾͡๏̯͡๏﴿ O'RLY?";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 17){
        $lenny = "| (• ◡•)| (❍ᴥ❍ʋ)";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 18){
        $lenny = "♪~ ᕕ(ᐛ)ᕗ";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 19){
        $lenny = "༼ つ  ͡° ͜ʖ ͡° ༽つ";
        $message->channel->sendMessage($lenny);
    } else if($randNum == 20){
        $lenny = "ヾ(⌐■_■)ノ♪";
        $message->channel->sendMessage($lenny);
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

?>