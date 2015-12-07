<?php
    function fetchGit($user, $amount = 10){
        $url = "https://api.github.com/users/$user/repos?per_page=$amount";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        curl_setopt($ch, CURLOPT_USERAGENT, "neilgaryallen.co.uk");
        $result = curl_exec($ch);
        curl_close($ch);   
        return json_decode($result, true);
    }
?>