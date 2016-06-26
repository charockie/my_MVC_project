<?php
require __DIR__ . '/../models/countries.php';

class Controller_main extends controller
{

    public function action_index()
    {
        $this->view->generate('registration/index.php');
    }

    public function action_registration()
    {
        echo '<pre>';
        var_dump($_POST);
    }
}