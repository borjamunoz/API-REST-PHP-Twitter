<?php
    ini_set('display_errors', 1);
    //De esta manera importamos el documento para poder utilizar sus recursos
    require_once('TwitterAPIExchange.php');

    //Creamos la configuracion de acceso en un array
    $settings = array(
    'oauth_access_token' => "492041774-Zmx8ShsGFEFgSXjTvzD7Dg9sCTdfUbeqp68YWs0O",
    'oauth_access_token_secret' => "ukqW8EcwBbFmW7pxieo4WRxour5OJsB7o64COgW3UNM8M",
    'consumer_key' => "CgXbhXZh2cNRdmkrV9MbS12r5",
    'consumer_secret' => "NInli0TjjP1B991RRCp8an41dhFk9EIl6lTbqz5AxziMHGH9Sg");
    
    $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
    $getfield = '?screen_name=gaboingab&count=1';
    $requestMethod = 'GET';
    
    //Creamos un objeto del tipo API
    $twitter = new TwitterAPIExchange($settings);
    //configuramos la peticion
    echo $twitter ->setGetfield($getfield)
                  //Pasamos la url de la API y el tipo de metodo
                  ->buildOauth($url, $requestMethod)
                  //hacemos la peticion
                  ->performRequest();
?>