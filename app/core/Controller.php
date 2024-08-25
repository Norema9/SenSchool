<?php

class Controller {
    public function model($model) {
        require_once '../app/src/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []) {
        require_once '../app/src/views/' . $view . '.php';
    }
}
