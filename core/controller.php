<?php

class Controller {
    public $model;
    public $view;
    function __construct()
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';
        db::getInstance($conf);
        $this -> view = new View();
    }
    function action_index()
    {
    }
}