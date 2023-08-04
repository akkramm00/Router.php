<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

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
  </body>
</html>