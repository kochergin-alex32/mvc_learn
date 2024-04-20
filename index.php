 <!-- точка дочтупа формиуем дерево проекта -->
 <?php
 include 'app/lib/debug.php';
//  прописываем путь до роутера
use app\core\Router;
use app\config\Db;

//  автолоадер
 spl_autoload_register(function($class){
    // меняем слеш двойной на обычный для нас в классе
    $class = str_replace('\\','/',$class);
    require_once "{$class}.php";

 });
//  создаем экземпляр класса и добавляем путь
$router = new Router();
$db = new Db();

$router ->run();