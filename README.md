API-REST-PHP-Twitter
====================

Ejemplo de conexión con la API de Twitter
API pública de twitter: https://dev.twitter.com/rest/reference/get/statuses
Para obtener el timeline de un usuario en cuestión: https://dev.twitter.com/rest/reference/get/statuses/user_timeline

1. Iniciar sesión en https://apps.twitter.com/ con tu cuenta de twitter
2. Crear una nueva aplicación, en este caso 'APITwitter-PHP', es indispensable crear la aplicación ya que twitter hace uso de OAuth para permitir el acceso a su API con motivo de controlar el abuso de ésta. Donde pide que introduzcamos una URL de una web he metido mi dirección de usuario de twitter: https://twitter.com/gaboingab
3. Ir a la pestaña de 'Keys and Acces tokens' y clickar en el botón de 'create my access token', así generamos los token necesarios para luego introducir en la configuración para hacer las peticiones.
4. Accedemos a https://github.com/J7mbo/twitter-api-php/blob/master/TwitterAPIExchange.php para obtener la API creada en PHP que nos permite conectarnos a twitter y hacer la petición que nosotros queramos. Ésta es una de las muchas librerias creadas.
5. Creamos un nuevo documento en php (TwitterAPIExchange.php)y copiamos el código de la librería.
6. Creamos un index.php y hacemos un include de TwitterAPIExchange.php, de esta manera importamos el archivo y podremos utilizar todos sus recursos. 
7. En index.php tenemos que crear la configuración de acceso a la API:
8. $settings = array(
    'oauth_access_token' => "YOUR_OAUTH_ACCESS_TOKEN",
    'oauth_access_token_secret' => "YOUR_OAUTH_ACCESS_TOKEN_SECRET",
    'consumer_key' => "YOUR_CONSUMER_KEY",
    'consumer_secret' => "YOUR_CONSUMER_SECRET"
);
9. Rellenamos las variables con los datos que nos ha proporcionado twitter.
10. Elegimos el método GET que vamos a utilizar y en la url asignamos la conexión a la API que nos interesa
11. $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
    $getfield = '?screen_name=gaboingab';
    $requestMethod = 'GET';

    $twitter = new TwitterAPIExchange($settings);
    echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
