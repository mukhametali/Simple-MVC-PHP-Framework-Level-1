<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller
{
    public function indexAction()
    {
        $db = new Db;

        $params = ['id' => 2];

        $data = $db->row('SELECT name FROM users WHERE id =:id',$params);
        debug($data);


        $this->view->render('Main page');
    }
}