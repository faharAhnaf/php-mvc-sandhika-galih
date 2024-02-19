<?php 

class About extends Controller
{
  public function index($name = 'fahar', $job = 'programmer', $age = 20)
  {
    $data['title'] = 'About';
    $data['name'] = $name;
    $data['job'] = $job;
    $data['age'] = $age;

    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }
  
  public function page()
  {
    $data['title'] = 'Page';

    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}