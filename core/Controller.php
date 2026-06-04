<?php
class Controller
{
    public function model($model)
    {
        $file = "modules/".$model."/".$model."Model.php";
        require_once $file;
        return new $model."Model";
    }

    public function view($path,$data=[])
    {
        extract($data);
        require_once "modules/".$path.".php";
    }
} ?>