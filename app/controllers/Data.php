<?php

class Data extends Controller
{
  public function index()
  {
    header('Content-Type: application/json');

    echo json_encode($this->model('Data_model')->chartData());
  }

  public function getData()
  {
    echo json_encode($this->model('Data_model')->showChartDataByTahun($_POST));
  }

  public function input()
  {
    if ($this->model('Data_model')->input($_POST) > 0) {
      echo "<script>alert('Data berhasil ditambahkan')</script>";
      header('Location: ' . BASEURL . '/');
    } else {
      echo "<script>alert('Data gagal ditambahkan')</script>";
      header('Location: ' . BASEURL . '/input');
    }
  }
}
