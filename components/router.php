<?php
    class Router{

        private $routes;

        public function __construct(){
            $this->routes = include (ROOT."/config/routes.php");
        //    $lang = include(ROOT."/lang/en.php");
        }


        private function getUri(){
                if(!empty($_SERVER["REQUEST_URI"])){
                    return trim($_SERVER["REQUEST_URI"], "/");
                }
        }

        public function run(){
                $uri = $this->getUri();

                foreach ($this->routes as $uriPattern => $path){
                    if(preg_match("~$uriPattern~", $uri)){

                        $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                        $segments = explode("/",$internalRoute);
                        $controllerName = ucfirst(array_shift($segments)."Controller");
                        $actionName = "action".ucfirst(array_shift($segments));


                        $controller = ROOT."/controllers/".$controllerName.".php";

                        if (file_exists($controller)) include_once($controller);

                        
                        $object = new $controllerName;
                        $result = call_user_func_array(array($object, $actionName), $segments);

                        if ($result != null) break;


                    }
                }
        }

    }
?>
