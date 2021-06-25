<?php 


class Buku extends Controller{


  public function index()
  {

    $data['judul'] = 'Daftar Buku';
    $data['buku'] = $this->model('Buku_model')->getAllBuku();
    $this->view('layouts/header',$data);
    $this->view('buku/index', $data);
    $this->view('layouts/footer');
  }

  public function detail($id = null){
    
    if(is_null($id)){
      return $this->index();
    }

    
    $data['buku'] = $this->model('Buku_model')->getBukuById($id);

    if($data['buku'] == false){
      return $this->index();
    }
    $data['judul'] = 'Detail Buku';
    $this->view('layouts/header',$data);
    $this->view('buku/detail', $data);
    $this->view('layouts/footer');

  }


  public function tambah()
  {
    if($this->model('Buku_model')->tambahDataBuku($_POST) > 0){
      Flasher::setFlash('berhasil','ditambahkan','success');
      header('Location:' . BASEURL. '/buku');
      exit;
    } else{
      Flasher::setFlash('gagal','ditambahkan','danger');
      header('Location:' . BASEURL. '/buku');
      exit;
    }


  }

  public function delete($id)
  {
    if($this->model('Buku_model')->hapusDataBuku($id) > 0){
      Flasher::setFlash('berhasil','dihapus','success');
      header('Location:' . BASEURL. '/buku');
      exit;
    } else{
      Flasher::setFlash('gagal','dihapus','danger');
      header('Location:' . BASEURL. '/buku');
      exit;
    }

  }


  public function getUbah()
  {
      echo json_encode($this->model('Buku_model')->getBukuById($_POST['id']));
  }

  public function edit()
  {

    if($this->model('Buku_model')->editDataBuku($_POST) > 0){
      Flasher::setFlash('berhasil','diubah','success');
      header('Location:' . BASEURL. '/buku');
      exit;
    } else{
      Flasher::setFlash('gagal','diubah','danger');
      header('Location:' . BASEURL. '/buku');
      exit;
    }
    
  }

  public function cari()
  {

    $data['judul'] = 'Daftar Buku';
    $data['buku'] = $this->model('Buku_model')->CariDataBuku();
    $this->view('layouts/header',$data);
    $this->view('buku/index', $data);
    $this->view('layouts/footer');

  }

 


}


?>