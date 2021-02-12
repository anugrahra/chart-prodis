<?php

class Dataset extends Controller
{
  public function index()
  {
    $data['title'] = 'LIST DATA | ' . $this->title;
    $data['header'] = 'LIST DATA';
    $data['prodis'] = $this->model('Data_model')->chartData();
    $data['tahun'] = date("Y");
    $data['maxminbocor'] = $this->model('Data_model')->maxminBocor();

    if (isset($_POST['tahun'])) {
      $data['prodis'] = $this->model('Data_model')->showChartDataByTahun($_POST);
      $data['tahun'] = $_POST['tahun'];
      $data['maxminbocor'] = $this->model('Data_model')->maxminBocorByTahun($_POST);
    }

    $this->view('templates/header', $data);
    $this->view('templates/navin', $data);
    $this->view('dataset/index', $data);
    $this->view('templates/footer');
  }

  public function input()
  {
    $data['title'] = 'INPUT DATA PRODIS | ' . $this->title;
    $data['header'] = 'INPUT DATA PRODIS';
    $this->view('templates/header', $data);
    $this->view('templates/navin', $data);
    $this->view('dataset/input', $data);
    $this->view('templates/footer');
  }
}
