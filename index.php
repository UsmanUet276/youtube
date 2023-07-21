<?php
    $key = "AIzaSyBupeqKGaFIHl6zLwFeZ5vk9kY1T3PX4Ds";
    $url = "https://www.googleapis.com/youtube/v3/search";
    $id = "UCEWnHmLlURfYRqqRSUD_kAw";
    $res = 10;

    $API_url = $url . "?order=date&part=snippet&channelId=". $id . "&maxResults=" .$res."&key=" . $key;
    $videos = json_decode(file_get_contents($API_url));
    foreach($videos->items as $video)
    {
        $v = (string)$video->id->videoId;
        echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$v.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
    }
?>