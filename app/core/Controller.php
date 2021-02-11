<?php
// class utama yang ngatur semua controller di folder controllers
class Controller
{
  public $title = 'Grafik Prodis BLUD Air Minum Kota Cimahi';

  public function view($view, $data = [])
  {
    require_once 'app/views/' . $view . '.php';
  }

  public function model($model)
  {
    require_once 'app/models/' . $model . '.php';
    // instansiasi class model
    return new $model;
  }
}
