

<div class="container mt-5">
 <div class="row justify-content-center">
   <div class="col-md-6">
    <h3>Detail Buku</h3>
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['buku']['judul'] ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['buku']['penulis'] ?></h6>
        <p class="card-text"><?= $data['buku']['penerbit'] ?></p>
        <p class="card-text">Rp <?= number_format($data['buku']['harga']) ?></p>
        <a href="<?= BASEURL;?>/buku" class="card-link"> Kembali  </a>
      </div>
    </div>
  </div>
 
 </div>
</div>