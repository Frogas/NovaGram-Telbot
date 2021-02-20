<?php

require __DIR__ . '/vendor/autoload.php';

use skrtdev\NovaGram\Bot;
use skrtdev\Telegram\Message;

$bot = new Bot("BOT_TOKEN");

$bot->onCommand("start", function(Message $ctx){
    $ctx->reply("Ohayo ! Welcome to NatehoruBot.");
});

$bot->onCommand("help", function(Message $ctx) use ($bot){
    $bot->sendMessage($ctx->chat->id, "I can help your my friend :(");
});

?>
