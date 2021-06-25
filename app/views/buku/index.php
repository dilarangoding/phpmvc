

<div class="container mt-5">

  <div class="row justify-content-center">
    <div class="col-lg-6">
      <?php Flasher::flash()?>
    </div>
  </div>

  <div class="row justify-content-center">
  
    <div class="col-lg-6">

      <div class="row">
        <div class="col-md-6">
          <button type="button" class="btn btn-primary btn-sm  tambahData"
            data-toggle="modal" data-target="#formModal"> Tambah Data Buku
          </button>
        </div>
        <div class="col-md-6">
          <form action="<?= BASEURL?>/buku/cari" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="cari buku" name="keyword" id="keyword" autocomplate="off">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="buttonCari"> Cari</button>
              </div>
            </div>
          </form> 
        </div>
      </div>
      
    </div>
    
  </div>

  <div class="row justify-content-center">
    <div class="col-md-6">
      

      <h3>Daftar Buku</h3>


       <ul class="list-group">
        <?php foreach($data['buku'] as $b) :?>
          <li class="list-group-item">
            <?= $b['judul'] ?>

            <a href="<?= BASEURL;?>/buku/delete/<?=$b['id']?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin ingin menghapus data')">Delete</a>

            <a href="<?= BASEURL;?>/buku/ubah/<?=$b['id']?>" class="badge badge-warning float-right ml-2 modalUbah" data-id="<?= $b['id']?>"  data-toggle="modal" data-target="#formModal" >Edit</a>

            <a href="<?=BASEURL;?>/buku/detail/<?= $b['id']?>" class="badge badge-primary float-right ml-2">Detail</a>
          </li>
        <?php endforeach ;?>
      </ul>
     
    </div>
  </div>

</div>



<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>/buku/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" >
          </div>
          <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" class="form-control" id="penulis" >
          </div>
          <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" id="penerbit" >
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" min="1" name="harga" class="form-control" id="harga" >
          </div>
            
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
      </div>
    </div>
  </div>
</div>