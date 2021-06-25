<?php 

class About extends Controller{

  public function index($nama = 'riyon', $pekerjaan = 'ga kerja gan'){
    $data['nama'] = $nama;
    $data['pekerjaan']  = $pekerjaan;
    $data['judul'] = 'About Me';

    $this->view('layouts/header',$data);
    $this->view('about/index', $data);
    $this->view('layouts/footer');

  }

  public function page()
  {
    $data['judul'] = 'Page';
    $this->view('layouts/header',$data);
    $this->view('about/page', $data);
    $this->view('layouts/footer');
  }
}
?>