<?php


    namespace App\Repositories;


    abstract class CoreRepository
    {

        protected $model;



    public function __construct()
        {
            $this->model = app($this->getModelClass());
        }

        abstract protected function getModelClass();



        protected function startConditions(){
            return clone $this->model;
        }



        public function getID($id)
        {
            return $this->startConditions()->find($id);
        }



        public function getRequstID($get = true, $id = 'id'){
            if ($get) {
                $data = $_GET;
            }
            else {
                $data = $_POST;
            }
            $id = !empty($data[$id]) ? (int) $data[$id] : null;
            if ($id) {
                throw new \Exception('Проверить id', 404);
            }
            return $id;

        }

    }
