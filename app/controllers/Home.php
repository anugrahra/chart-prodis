<?php

class Home extends Controller
{
  public function index()
  {
    $data['title'] = '' . $this->title;
    $this->view('templates/header', $data);
    $this->view('templates/navbar');
    $this->view('home/index');
    $this->view('templates/footer');
  }

  public function about()
  {
    $data['title'] = '' . $this->title;
    $this->view('templates/header', $data);
    $this->view('templates/navbar');
    $this->view('home/about');
    $this->view('templates/footer');
  }
}
