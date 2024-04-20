<?php
// создаем наследуемый калсс 
namespace app\controllers;
use app\core\Controller;
class MainController extends Controller{
    public function indexAction(){
        echo'контроллер' . __CLASS__ . 'экшон '. __METHOD__;
    }
}