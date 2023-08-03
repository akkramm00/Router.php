<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

<?php
class Router {
  private $routes;
  public function __construct() {
  $this->routes = [];
  }

  public function addroute(string $method, string $path, string $controller, string $action) {
    $this->routes [] = [
      'method' => $method,
      'path' => $path,
      'controller' => $controller,
      'action' => $action
    ];
  }
  public function ggetHandler(string $method, string $uri) {
    foreach($this->routes as $route) {
      if($route['method'] === $method && $route['path'] === $uri) {
        return [
          'method' => $route['method'],
          'controller' => $route['controller'],
          'action' => $route['action'],
        ];
      }
    }
    return null;
  }
}
?>
 Ce code présente la classe "Router", qui est déstinée à la gestion des routes et des requétes HTTP d'une application web. La classe comprend une variable privée et deux méthodes publiques.
La métohde constructeur, appelée "__construct" est utilisée pour initialiser la variable $routes en tant que "tableau vide . D'un autre coté , la methode "addRoute" permet l'ajout de nouvelles routes à l'objet Route.
    Cette meéthode prend en entrée quatres paramétres: $method, $path, $controller, et $action. Elle ajoute une nouvelle entrée dans le tableau $routes avec les informations sur la route spécifiée, qui sont stockées dans un tableau associatif avec les clès "method" "path" "controller"  et "action".
    La méthode "getHandler" est utilisée pour trouver la route corerspondanteà une demande HTTP entrante.
    Cette méthode prend duex paramètres : $method et $uri. Elle parfcourt le tableau $routes pour trouver une route qui correspond à la méthode HTTp et a l'uri spécifiés. Si un ecorrespondance est trouvée, la méthode retourne un tableau associatif contenant les informations de la route trouvée(méthode, controleur, action). En cas b'absence de correspondance, elle retourne la valeur null.
  
  </body>
</html>