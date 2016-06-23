<?php

class countries {

    public $table = 'countries';

    public function selectAll() {
        $db = db::getInstance();

        $data = $db->pdo->query('SELECT * FROM '.$this->table);
        $data->execute();
        return $data->fetchAll(PDO::FETCH_ASSOC);
    }
}