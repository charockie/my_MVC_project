<?php
require __DIR__ . '/../models/countries.php';

class Controller_main extends controller{

    public function action_index() {

        $countries = new countries();
        $data = $countries->selectAll();

        $this->view->generate('myview.php', $data);
    }

    public function action_hello() {
        echo '2. hello this is Main controller, hello action!';die;
    }
}