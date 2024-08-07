<?php
function slack($message, $channel)
{
    $ch = curl_init("https://slack.com/api/chat.postMessage");
    $data = http_build_query([
        "token" => "xoxe.xoxp-1-Mi0yLTY2MjY4Mjc2MjgzMDktNjY0MjQwMzczMDgwMS02NjQyNjI1NjgzNTY5LTY2MjMzMzE1MjIzOTAtNWRhOTdhNzFkNDNiNTY1YWQyMzU0N2NmYTI5MTE3ODhjZjk5ZGFlNjY3MDMwODZlMzVlZWRkN2VjZjQyNmM5Mw",
    	"channel" => $channel,
    	"text" => $message,
    	"username" => "dev_chat",
    ]);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    
    return $result;
}

// Example message will post "Hello world" into the random channel
slack('Hello world 2024', '#message_notification');








?>