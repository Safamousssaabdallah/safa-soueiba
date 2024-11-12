<?php
// core/Controller.php
class Controller {
    public function view($view, $data = []) {
        extract($data);
        require_once "app/Views/{$view}.php";
    }

    public function model($model) {
        require_once "app/Models/{$model}.php";
        return new $model();
    }
}