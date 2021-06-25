$(function () {
  $('.tambahData').on('click', function () {
    $('#formModalLabel').html('Tambah Data Buku');
    $('.modal-footer button[type=submit]').html('Tambah Data');
  });

  $('.modalUbah').on('click', function () {
    $('#formModalLabel').html('Edit Data Buku');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/buku/edit');

    const id = $(this).data('id'); // this yang di maksud adalah tombol yang di klik 

    $.ajax({
      url: "http://localhost/phpmvc/public/buku/getUbah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {

        $('#judul').val(data.judul);
        $('#penulis').val(data.penulis);
        $('#penerbit').val(data.penerbit);
        $('#harga').val(data.harga);
        $('#id').val(data.id);
      }
    });

  })

});