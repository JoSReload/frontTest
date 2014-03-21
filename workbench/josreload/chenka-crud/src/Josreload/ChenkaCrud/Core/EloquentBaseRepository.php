<?php namespace Josreload\ChenkaCrud\Core;

use Eloquent;

abstract class EloquentBaseRepository implements BaseInterface {

    protected $model;

    function __construct(Eloquent $model = null)
    {
        $this->model = $model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    public function getAll() {
        return $this->model->all();
    }

    public function getById($id) {
        return $this->model->find($id);
    }

}