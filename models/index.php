<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
 <h3>Indx.php</h3
<?php
define("BASE_URL", '/mvc');

require_once "models/Router.php";
require_once "models/User.php";
require_once "controllers/HomeController.php";
require_once "controllers/ProfileController.php";
require_once "controllers/LogoutController.php";

$router = new Router();

$router->addRoute('GET', BASE_URL. '/', 'HomeController', 'index');
$router->addRoute('POST', BASE_URL. '/profile', 'ProfileController', 'index');
$router->addRoute('GET', BASE_URL. '/logout', 'LogutController', 'index');

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$handler = $router-> gethandler($method, $uri);

if ($handler == null) {
  header ('HTTP/1.1 404 not found');
  exit();
}
  $controller = new $handler['controller'] ();
$action = $handler['action'];
$controller->$action();
?>
<p>
  Le code php présenté ci-dessus suit une logique pour gérer les routes et kles demandes HTTP entrantes dans une application web.Il commence par définir une constante BASE_URL, qui sera utilisée comme URL de base pour l'pplication. Ensuite , les fichiers nécessiares sont inclus grace à la fonction require_once.
   Une fois les fichiers inclus, l'objet Router est instancié pour gérer les routes .Plusieurs routes sont ensuite définies avec la methode "addRoute() de la classe Router", chacune associée à une méthode HTTP, un chemin d'URL spécifique et un nom de controller.
  Lorsqu'une demande HTTP est recue, le code récupère la méthode de l'URI de la requete à l'aide des superglobales $_SERVER. La méthode getHandler de l'objet Router est appelée pour détérminer quelle route doit etre utilisée pour traiter lza demande . Si aucune correspondante n'est trouvée, une réponse 404 vest renvoyée. Enfin, le controlleur approprié est instancié pour la route trouvée et la méthode d'action associée est appelée pour traiter la demande.
</p>
     <h3>les controlleurs</h3
<?php

class HomeController {
  public function {
    require_once 'views/form.php '
  }
}
?>
 <p>
   Le controlleur HomeController est défini dans ce code et contient une méthode publique nommée "index" qui apour but d'inclure le fichier de vue "form.php" situé dans le repertoire "views"
 </p> 

     <h3>ProfileController</h3
<?php

require_once 'models/User.php';
class ProfileController {
  public function index() {
    if($_SERVER['REQUEST_METHOD'] === "POST") {
      require_once 'views/profile.php';
    }
  }
}
  
?>
<p>
  Ce code implémente une classe appelée ProfileController avec une méthode publique nommée "index" . Si lz méthode  HTTP de la requete entrante est POST, la méthode index inclut le fichier de la vue "prifile.php" , située dans le repertoire "views".
</p>

    <h3>LogoutController</h3>

<?php

class LogoutController {
  public function index() {
    header('location:' ; BASE_URL);
  }
}
?>
 <p>
   Le code ci-dessus définit le controller LogoutController qui comporte une méthode publique nommée "index". Cette méthode a pour role de rediriger l'utilisateur vers la page d'accueil de l'application. Elle utilise la fonction header pour effectuer cette redirecvtion en passant comme paramètre l'URL de base auparavant dans la constante BASE_URL. 
 </p>

 <h3>.htaccess</h3>
    RewriteEngine On

    RewriteRule^([a-zA-Z0-9\-\_\]*)$index.php
     Cette expression que nous avans vue dans la vidéo concerne la confoguration du serveur Apache utiliosant le modile mod_rewrite. Elle permet de réécrire les URL en utilisant des regles définies dans un fichier.htaccess situé à al racine du site  web. La première ligne "RewriteEngine On" active le module de réécriture , tandis que la seconde ligne "RewriteRule ..." définie une régle de réécriture.

    Cette regle s'applique aux URl qui respectent un certain modèle spécifique entre les parenthèses. 
    Lorsqu'une règle corrspond à un modèle, elle est réécrite en appelant le fichier index.php situé à la racine du site web. Le fichier index.php est alors chargé et peut exécuter le code PHP nécessaire pour traiter le requêteet renvoyer une réponse . Cette configuration est particulièrement utile, car elle permet de router les requêtes vers les controllers appropriés en fonction de l'URL demandée. EN somme, cette configuration facilite la navigation sur un site web en réécrivant le sURL  de manière transparent pour l'utilisateur. 

     <h3>Voici, un exemple de définition de notre class User :</h3>

<?php

class User {
  private $email;
  public function __construct(string $email) {
   $this->mail = $email; 
  }

  public function getEmail() : string {
    return $this->email;
  }
  public function setEmail(string $email) {
    $this -> email = $email;
  }

  public function getmessage() : string {
    return "Bonjour" . $this->email. ", bienvenue sur notre site"
      }
}
?>

    Le constructeur prend une addresse email en paramètre et l'assigne à la propriété de l'instabce de la classe . Les méthodes getEmailet setEmail permettent respectivement de récupérer et de définir la propiété email. Enfin, la classe a une méthode  public getMessage qui renvoie une chaine de caractères contenant un message de bienvenue personnalisé pour l'adresse email stockée dans la propriété email. Cette classe peut etre utilisée pour représenter un utilisateur d'un site web et stocker son addressse email. La méthode getMessage peut etre utilisée pour renvoyer un message de bikenvenue personnalisée à l'utilisateur lorsqu'il s'inscrit sur le site.
  </body>
</html>