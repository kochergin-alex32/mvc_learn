<?php
// создаем путь
namespace app\core;
// описываем клас роутер
class Router{
    private $routes = [];
    private $params = [];
    public function __construct(){
        // подклуччаем роуты из папки что прописали 
       $routes_arr = require_once 'app/config/routes.php';
       foreach ($routes_arr as $route => $params) {
          
           
           $this->add($route,$params);
       }
    }
    private function add($route,$params) {
        // пишем для чгото регуляркузначки в кавычках не ают дажды прописывать одно и тоже в адресной строке
        $route = '#^' . $route . '$#';
        // презаписываем массив в регулярку
        $this->routes[$route] = $params;
       
    }
    private function match() {
        // неебически нужная штука для обработкизпросов
        $url = trim($_SERVER['REQUEST_URI'],'/');
        // проверяем на соответствие регулярному выражению
        foreach ($this->routes as $route => $params) {
            // debug($params);
            if (preg_match($route,$url,$matches)){
                // записываем совпадение в массив
                $this->params = $params;
                // debug($this->params);
                return true;
            }
        } 
            return false;
      

    }

    public function run() {
        
        if($this->match()){ 
            // подключаемконотроллер
            debug($this->params);
           echo $controller_name =  '\app\controllers\\' . ucfirst($this->params['controller']) . 'Controller';
           $mainController =  new $controller_name;
           $mainController->indexAction();

        }
    }

    
}