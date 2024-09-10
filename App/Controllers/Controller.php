<?php
class Controller{
    public function model($model){
        require_once '../app/Model/' .$model. '.php';
        return new $model;

    }//fim da function model
}//fim da classe